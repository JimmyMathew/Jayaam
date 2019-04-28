<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class plan extends Controller
{
    public function planInsert()
    {
       


        $object= new \App\Plan();
        $object->job_code = Input::get('job_code');
        $object->microns_required = Input::get('microns_required');
        $object->suggested_dip_time =Input::get('suggested_dip_time');
        
        $object->save();
        
       echo " Process inserted";
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

    public function client()
    {
        $results = \App\Receipt::where('job_code',Input::get('id'))->first();
        //echo $results;
        echo $results->party_name;
    }

    
    
}

