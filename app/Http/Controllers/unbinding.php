<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class unbinding extends Controller
{
   
  public function processInsert()
  {


    $processId=Input::get('process_id');
    DB::table('processes')->where('id',$processId)->update(['status'=>"ubn_0"]);
  

    $stage=new \App\Stage();
    $stage->process_id=$processId;
    $stage->stage="ubn";
    $stage->image=Input::get('image');
    $stage->time_in=date('Y-m-d H:i:s');
    $stage->save();

    echo " Process inserted";
  }


  public function stageUpdate()
  {

   $processId=Input::get('process_id');
   DB::table('processes')->where('id',$processId)->update(['status'=>"ubn_1"]);

    $stageId=Input::get('stage_id');
       DB::table('stages')->where('id',$stageId)->update(['time_out'=>date('Y-m-d H:i:s')]);
       echo "Status Updated";
 }

 public function jigPopulate(){
  $results=\App\Process::where('status','rec_1')->get();   


  echo "<option>Select Jig number</option>";
  foreach ($results as $data) {
    echo "<option value='".$data->id."'>".$data->jig_no."</option>";
  }
}
public function approvalPopulate()
{

  $results=\App\Process::where('status','ubn_0')->get();
  
  foreach ($results as $data) {
    echo "<ons-list-item class='list__item ons-list-item-inner'><label>Jig number:".$data->jig_no."</label>
    <label>&nbsp;|&nbsp;</label>
    <label>Fixture: ".$data->fixture."</label>".'<input type="submit" value="Approve" status="ubn" pid="'.$data->id.'" class="subbut approve">'."
    <select pid='".$data->id."' class='rev_stage small_sel'>
      <option>Move to previous</option>
      <option value='bnd_1'>Degreasing</option>
      <option value='dgr_1'>Pickling</option>
      <option value='pck_1'>Rinsing</option>
      <option value='rns_1'>Fluxing</option>
      <option value='flx_1'>Drying</option>
      <option value='dry_1'>Galvanizing</option>
      <option value='glv_1'>Quenching</option>

    </select></ons-list-item>
    ";
    
  }
}

}
