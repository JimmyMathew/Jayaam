<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class quality extends Controller
{
    public function qualityInsert()
    {

        $qua=new \App\Quality();
        
        $qua->job_code=Input::get('job_code');
        $qua->required_coating=Input::get('required_coating');
        $qua->microns=Input::get('microns');
        $qua->qty=Input::get('qty');
        $qua->remarks=Input::get('remarks');
        $qua->shift=Input::get('shift');
        $qua->image=Input::get('image');
        $qua->recovery_supervisor=Input::get('recovery_supervisor');
        $qua->shift_incharge=Input::get('shift_incharge');
        $qua->quality_incharge=Input::get('quality_incharge');
        $qua->work_manager=Input::get('work_manager');
        $qua->save();

        $processId=Input::get('job_code');
        DB::table('processes')->where('id',$processId)->update(['status'=>"rec_1"]);
        return "Process inserted ";

    }
public function recoveryjobcode()
{
    $results=\App\Process::where('status','pas_1')->get();   
    echo "<option>Select Job Code</option>";
    foreach ($results as $data) {
        echo "<option value='".$data->id."'>".$data->job_code."</option>";
    }
}
}

