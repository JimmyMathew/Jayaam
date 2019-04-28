<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Process;
use Illuminate\Http\Request;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  public function processApproval(){
   DB::table('processes')->where('id',Input::get('pid'))->update(['status'=>Input::get('status').'_1']);
   DB::table('stages')->where('process_id',Input::get('pid'))->where('stage',Input::get('status'))->update(['time_out'=>date('Y-m-d H:i:s')]);
   return "Process Approved";

 }
 public function degreasingTank()
 {

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>Temp(C)-Ambient</th><th>Ph 2-3</th><th>Concentration 5-10%</th><th>Add Solution</th><th>Replace Tank</th></tr>";


  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->temp."</td>";
  echo "<td>".$data->ph."</td>";
  echo "<td>".$data->concentration."</td>";
  echo "<td>".$data->add_solution."</td>";
  echo "<td>".$data->replace_tank."</td></tr>";
}
public function picklingTank()
{

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>Temp(C)-Ambient</th><th>Specific Gravity</th><th>Hcl Concentration 15-5%</th><th>Iron Content(g/l) maximum-120</th><th>Add Solution</th><th>Replace Tank</th></tr>";


  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->temp."</td>";
  echo "<td>".$data->specific_gravity."</td>";
  echo "<td>".$data->hcl_concentration."</td>";
  echo "<td>".$data->iron_concentration."</td>";
  echo "<td>".$data->add_solution."</td>";
  echo "<td>".$data->replace_tank."</td></tr>";
}
public function rinsingTank()
{

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>Temp(C)-Ambient</th><th>PH(2-6)</th><th>Add water</th><th>Replace Tank</th></tr>";


  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->temp."</td>";
  echo "<td>".$data->ph."</td>";
  echo "<td>".$data->add_water."</td>";
  echo "<td>".$data->replace_tank."</td></tr>";
}
public function fluxingTank()
{

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>PH(3.5-5)</th><th>Sp.Gr.1.100-1.1.150</th><th>Zinc ammonium chloride content(g/l)200-400</th><th>Iron content maximum 5(g/l)</th><th>Add solution</th><th>Replace Tank</th></tr>";


  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->ph."</td>";
  echo "<td>".$data->specific_gravity."</td>";
  echo "<td>".$data->zinc_ammonium_chloride_content."</td>";
  echo "<td>".$data->iron_concentration."</td>";
  echo "<td>".$data->add_solution."</td>";
  echo "<td>".$data->replace_tank."</td></tr>";
}
public function dryingTank()
{

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>Temp(C)-About 120 C</th></tr>";
  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->temp."</td></tr>";

}
public function galvanizingTank()
{

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>Temp(C)-Above 440-460 C</th></tr>";
  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->temp."</td></tr>";

}
public function quenchingTank()
{

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>PH(5-6)</th><th>TDS Maximum 100 PPM</th><th>Add water</th><th>Replace tank</th></tr>";
  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->ph."</td>";
  echo "<td>".$data->tds_maximum."</td>";
  echo "<td>".$data->add_water."</td>";
  echo "<td>".$data->replace_tank."</td></tr>";

}
public function passivationTank()
{

  $results=\App\Lab::where('tank_no',Input::get('id'))->orderBy('id','desc')->first();

  $data=$results;
  echo "<table border=1><tr><th>Tank no</th><th>PH(3-7)</th><th>Temp(C)Max 65</th><th>Chromate content Max 1%</th><th>Add solution</th><th>Replace tank</th></tr>";
  echo "<tr><td>".$data->tank_no."</td>";
  echo "<td>".$data->ph."</td>";
  echo "<td>".$data->temp."</td>";
  echo "<td>".$data->chromate_content."</td>";
  echo "<td>".$data->add_solution."</td>";
  echo "<td>".$data->replace_tank."</td></tr>";

}
public function galPlan()
{

  $results=\App\Plan::where('job_code',Input::get('galjobcode'))->first();

  $data=$results;
  echo "<table border=1 align='center' class='diptime'><tr><th>Microns Required</th><th>Suggested Dip time</th></tr>";
  echo "<tr><td>".$data->microns_required."</td>";
  echo "<td>".$data->suggested_dip_time."</td>";
  //echo $data->id;
  

}

public function reverseProcess()
{

  DB::table('processes')->where('id',Input::get('pid'))->update(['status'=>Input::get('status')]);
  return "Process has been moved to the previous stage";
}

public function photoUpload()
{
  /*--------------------------Image start-----------------------------------------*/
  if(isset($_FILES["file"]["type"]))
  {
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000000)//Approx. 100kb files can be uploaded.
      && in_array($file_extension, $validextensions)) {
      if ($_FILES["file"]["error"] > 0)
      {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
      }
      else
      {
        if (file_exists("upload/" . $_FILES["file"]["name"])) {
          echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
        }
        else
        {
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
$image=$_FILES['file']['name'];
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

// echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
// echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
// echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
// echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
// echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
}
}
}
else
{
  echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}
 /*--------------------------Image end-----------------------------------------*/
}

}

