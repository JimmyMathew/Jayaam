<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class galvanizing extends Controller
{
    public function processInsert()
    {


        $processId=Input::get('process_id');
        DB::table('processes')->where('id',$processId)->update(['status'=>"glv_0"]);
        $processId=$processId;

        $stage=new \App\Stage();
        $stage->process_id=$processId;
        $stage->stage="glv";

        $stage->image=Input::get('image');
        $stage->facility=Input::get('facility');
        $stage->diptime=Input::get('timer');
        $stage->time_in=date('Y-m-d H:i:s');
        $stage->temp=Input::get('galtemp');
        $stage->save();

        echo " Process inserted";
    }

    
    public function stageUpdate()
    {

       $processId=Input::get('process_id');
       DB::table('processes')->where('id',$processId)->update(['status'=>"glv_1"]);

       $stageId=Input::get('stage_id');
       DB::table('stages')->where('id',$stageId)->update(['time_out'=>date('Y-m-d H:i:s')]);
       echo "Status Updated";
   }
   public function jobPopulate(){
    $results=\App\Process::where('status','dry_1')->get();   
    

    echo "<option>Select Job Code</option>";
    foreach ($results as $data) {
        echo "<option value='".$data->job_code."'>".$data->job_code."</option>";
    }
}
public function jigPopulate(){
    $results=\App\Process::where('status','dry_1')->get();   
    

    echo "<option>Select Jig number</option>";
    foreach ($results as $data) {
        echo "<option value='".$data->id."'>".$data->jig_no."</option>";
    }
}
public function approvalPopulate()
{

  $results=\App\Process::where('status','glv_0')->get();
  
  foreach ($results as $data) {
    echo "<ons-list-item class='list__item ons-list-item-inner'><label>Jig number:".$data->jig_no."</label>
    <label>&nbsp;|&nbsp;</label>
    <label>Fixture: ".$data->fixture."</label>".'<input type="submit" value="Approve" status="glv" pid="'.$data->id.'" class="subbut approve">'."
    <select pid='".$data->id."' class='rev_stage small_sel'>
        <option>Move to previous</option>
        <option value='bnd_1'>Degreasing</option>
        <option value='dgr_1'>Pickling</option>
        <option value='pck_1'>Rinsing</option>
        <option value='rns_1'>Fluxing</option>
        <option value='flx_1'>Drying</option>

    </select></ons-list-item>";
    $res=DB::table('stages')->where('stage','glv')->where('process_id',$data->id)->first();

    
    if($res->image != ""){
        $imgexplode = explode(",", $res->image);
        array_pop($imgexplode);
        echo "<ons-list-item class='list__item ons-list-item-inner'>";
        foreach($imgexplode as $img){
          echo"  <img src='http://192.168.1.203/jayaamweb/public/upload/$img' alt='galvanization' class='camimgshow'>";
        }
        echo "</ons-list-item>";
  }
}
}


}

