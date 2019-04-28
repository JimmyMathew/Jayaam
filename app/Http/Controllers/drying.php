<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class drying extends Controller
{
    public function processInsert()
    {

       
        $processId=Input::get('process_id');
        DB::table('processes')->where('id',$processId)->update(['status'=>"dry_0"]);
        $processId=$processId;

        $stage=new \App\Stage();
        $stage->process_id=$processId;
        $stage->stage="dry";
        $stage->image=Input::get('image');
        $stage->facility=Input::get('facility');
        $stage->time_in=date('Y-m-d H:i:s');
        $stage->save();

        echo " Process inserted";
    }

    
    public function stageUpdate()
    {

     $processId=Input::get('process_id');
     DB::table('processes')->where('id',$processId)->update(['status'=>"dry_1"]);
     
      $stageId=Input::get('stage_id');
       DB::table('stages')->where('id',$stageId)->update(['time_out'=>date('Y-m-d H:i:s')]);
       echo "Status Updated";
 }

public function jigPopulate(){
    $results=\App\Process::where('status','flx_1')->get();   
    

    echo "<option>Select Jig number</option>";
    foreach ($results as $data) {
        echo "<option value='".$data->id."'>".$data->jig_no."</option>";
    }
}
public function approvalPopulate()
{
  
  $results=\App\Process::where('status','dry_0')->get();
  
foreach ($results as $data) {
    echo "<ons-list-item class='list__item ons-list-item-inner'><label>Jig number:".$data->jig_no."</label>
          <label>&nbsp;|&nbsp;</label>
          <label>Fixture: ".$data->fixture."</label>".'<input type="submit" value="Approve" status="dry" pid="'.$data->id.'" class="subbut approve">'."
            <select pid='".$data->id."' class='rev_stage small_sel'>
                <option>Move to previous</option>
                <option value='bnd_1'>Degreasing</option>
                <option value='dgr_1'>Pickling</option>
                <option value='pck_1'>Rinsing</option>
                <option value='rns_1'>Fluxing</option>

            </select></ons-list-item>
        ";
    
}
}


}

