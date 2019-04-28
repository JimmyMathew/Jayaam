<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class binding extends Controller
{
    public function processInsert()
    {
       


        $object= new \App\Process();
        $object->job_code = Input::get('job_code');
        $object->lot_no = Input::get('lot_no');
        $object->fixture =Input::get('fixture');
         $object->jig_no=Input::get('facility');
         
         $object->quantity=Input::get('bndquantity');
        $object->status = "bnd_0";
        $object->save();
        
        $processId=$object->id;
        $stage=new \App\Stage();
        $stage->process_id=$processId;
        $stage->stage="bnd";
        $stage->image=Input::get('image');
        $stage->facility=Input::get('facility');
        $stage->time_in=date('Y-m-d H:i:s');
        $stage->save();

        echo " Process inserted";
    }

    
    public function stageUpdate()
    {
       
       $processId=Input::get('process_id');
       DB::table('processes')->where('id',$processId)->update(['status'=>"bnd_1"]);
        $stageId=Input::get('stage_id');
       DB::table('stages')->where('id',$stageId)->update(['time_out'=>date('Y-m-d H:i:s')]);
       echo "Status Updated";
   }

   public function jobPopulate()
   {
    $results=\App\Receipt::whereNotNull('vehicle_out')->get();
        //echo $results;
    echo "<option>Select Job Code</option>";
    foreach ($results as $data) {
        echo "<option value='".$data->job_code."'>".$data->job_code."</option>";
    }
}
public function lotPopulate($job_code)
{
 $results=\App\Material::where('job_code',$job_code)->orderby('lot_no')->get();
 echo "<option>Select lot-No</option>";
 foreach ($results as $data) {
    echo "<option value='".$data->lot_no."'>Lot No: ".$data->lot_no." | Structure: ".$data->material_structure."</option>";
    
}

}

public function approvalPopulate()
{
  
  $results=\App\Process::where('status','bnd_0')->get();
  
foreach ($results as $data) {
    echo "<ons-list-item class='list__item ons-list-item-inner'><label>Jig number:".$data->jig_no."</label>
          <label>&nbsp;|&nbsp;</label>
          <label>Fixture: ".$data->fixture."</label>". '<input type="submit" value="Approve" status="bnd" pid="'.$data->id.'" class="subbut approve"></ons-list-item>';
    
}
}
}
