<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class receipt extends Controller
{
    public function receiptInsert()
    {
      
        $object=new \App\Receipt();

       $object->vehicle_regno =Input::get('vehicle_regno');
        $object->party_dc = Input::get('party_dc');
        $object->dc_date= Input::get('dc_date');
        $object->party_name = Input::get('party_name');
        $object->dc_weight= Input::get('dc_weight');
        $object->wbl_weight= Input::get('wbl_weight');
        $object->wb_weight = Input::get('wb_weight');
        $object->units = Input::get('units');
        $object->vehicle_in = date('Y-m-d H:i:s');
        $object->notes = Input::get('notes');
        $object->save();

        $id = $object->id;
        // update job code
        DB::table('receipts')->where('id',$id)->update(['job_code'=>$id]);
        
        return "Vehicle In Successful";
        
    }
   

    public function receiptView()

    {
        $results= \App\Receipt::all();
        return view('receipts')->with('results',$results);
    }
    public function unloading()
    {
        $results=\App\Receipt::whereNull('vehicle_out')->get();
        echo "<option>Select Vehicle No</option>";
        foreach ($results as $data) {
            echo "<option value='".$data->job_code."'>".$data->vehicle_regno."</option>";
        }
    }
    public function vehicleOut()
    {
        DB::table('receipts')->where('job_code', Input::get('job_code'))->update(['wb_weight' =>Input::get('wb_weight'),'vehicle_out' =>date('Y-m-d H:i:s')]);
        echo "Records Updated";
    }
    public function UploadjobPopulate()
   {
     $results=\App\Process::where('status','cln_1')->get();
        //echo $results;
    echo "<option>Select Job Code</option>";
    foreach ($results as $data) {
        echo "<option value='".$data->job_code."'>".$data->job_code."</option>";
    }
}

}
