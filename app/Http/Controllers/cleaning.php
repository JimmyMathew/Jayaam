<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class cleaning extends Controller
{
    
  public function processInsert()
  {


    $processId=Input::get('process_id');
    DB::table('processes')->where('id',$processId)->update(['status'=>"cln_0"]);
    $processId=$processId;

    $stage=new \App\Stage();
    $stage->process_id=$processId;
    $stage->stage="cln";
    $stage->image=Input::get('image');
    
    $stage->time_in=date('Y-m-d H:i:s');
    $stage->save();

    echo " Process inserted";
  }


  public function stageUpdate()
  {

   $processId=Input::get('process_id');
   DB::table('processes')->where('id',$processId)->update(['status'=>"cln_1"]);

   $stageId=Input::get('stage_id');
       DB::table('stages')->where('id',$stageId)->update(['time_out'=>date('Y-m-d H:i:s')]);
       echo "Status Updated";
 }

 public function jigPopulate(){
  $results=\App\Process::where('status','ubn_1')->get();   


  echo "<option>Select Job code</option>";
  foreach ($results as $data) {
    echo "<option value='".$data->job_code."'>Job Code: ".$data->job_code."- Quantity: ".$data->quantity."</option>";
  }
}
public function approvalPopulate()
{

  $results=\App\Process::where('status','cln_0')->get();
  
  foreach ($results as $data) {
    echo "<ons-list-item class='list__item ons-list-item-inner'><label>Job Code:".$data->job_code."</label>
    <label>&nbsp;|&nbsp;</label>
    <label>Fixture: ".$data->fixture."</label>".'<input type="submit" value="Approve" status="cln" pid="'.$data->id.'" class="subbut approve">'."
    </ons-list-item>
    ";
    
  }
}

}
