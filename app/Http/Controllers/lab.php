<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class lab extends Controller
{
    public function labInsert()
    {
    	$lab=new \App\Lab();
        $lab->stage=Input::get('stage');
        $lab->tank_no=Input::get('tank_no');
        $lab->temp=Input::get('temp');
        $lab->ph=Input::get('ph');
        $lab->concentration=Input::get('concentration');
        $lab->add_solution=Input::get('add_solution');
        $lab->replace_tank=Input::get('replace_tank');
        $lab->specific_gravity=Input::get('specific_gravity');
        $lab->hcl_concentration=Input::get('hcl_concentration');
        $lab->iron_concentration=Input::get('iron_cocentration');
        $lab->add_water=Input::get('add_water');
        $lab->zinc_ammonium_chloride_content=Input::get('zinc_ammonium_chloride_content');
        $lab->tds_maximum=Input::get('tds_maximum');
        $lab->chromate_content=Input::get('chromate_content');
        $lab->save();
        return "Report Inserted";
    }
    public function picklingLabInsert()
    {
        foreach ($_POST['tank_no'] as $key => $val) {
            if(!empty($_POST['tank_no'][$key]) && !empty($_POST['temp'][$key]) &&!empty($_POST['add_solution'][$key]) &&!empty($_POST['replace_tank'][$key]) &&!empty($_POST['specific_gravity'][$key]) &&!empty($_POST['hcl_concentration'][$key]) &&!empty($_POST['iron_concentration'][$key])&&!empty($_POST['stage'][$key]))
            {
                $lab=new \App\Lab();
$lab->stage=Input::get('stage')[$key];
                $lab->tank_no=Input::get('tank_no')[$key];
                $lab->temp=Input::get('temp')[$key];
                $lab->add_solution=Input::get('add_solution')[$key];
                $lab->replace_tank=Input::get('replace_tank')[$key];
                $lab->specific_gravity=Input::get('specific_gravity')[$key];
                $lab->hcl_concentration=Input::get('hcl_concentration')[$key];
                $lab->iron_concentration=Input::get('iron_concentration')[$key];

                $lab->save();

            }
        }
        return "Report Inserted";
    }
    public function rinsingLabInsert()
    {
        foreach ($_POST['tank_no'] as $key => $val) {
            if(!empty($_POST['tank_no'][$key]) && !empty($_POST['temp'][$key]) &&!empty($_POST['ph'][$key]) &&!empty($_POST['add_water'][$key]) &&!empty($_POST['replace_tank'][$key])&&!empty($_POST['stage'][$key]))
            {
                $lab=new \App\Lab();
                $lab->stage=Input::get('stage')[$key];
                $lab->tank_no=Input::get('tank_no')[$key];
                $lab->temp=Input::get('temp')[$key];
                $lab->ph=Input::get('ph')[$key];
                $lab->add_water=Input::get('add_water')[$key];
                $lab->replace_tank=Input::get('replace_tank')[$key];
                $lab->save();
            }
        }
        return "Rinsing Lab Report Inserted";
    }

     public function stageShow($pid)
    {
        $results= \App\Stage::where('process_id',$pid)->get();

       return view('stageshow')->with('result',$results);
    }

    
}
