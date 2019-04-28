<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class reports extends Controller
{
    
	public static $codeset=["bnd_0"=>"binding inprogress",
					"bnd_1"=>"binding approved",
					"dgr_0"=>"degreasing inprogress",
					"dgr_1"=>"degreasing approved",
					"pck_0"=>"pickling inprogress",
					"pck_1"=>"pickling approved",
					"rns_0"=>"rinsing inprogress",
					"rns_1"=>"rinsing approved",
					"flx_0"=>"rinsing inprogress",
					"flx_1"=>"rinsing approved",
					"dry_0"=>"drying inprogress",
					"dry_1"=>"drying approved",
					"glv_0"=>"galvanising inprogress",
					"glv_1"=>"galvanising approved",
					"que_0"=>"quenching inprogress",
					"que_1"=>"quenching approved",
					"pas_0"=>"passivation inprogress",
					"pas_1"=>"passivation approved",
					"qly_0"=>"quality inprogress",
					"qly_1"=>"quality approved",
					"unb_0"=>"unbinding inprogress",
					"unb_1"=>"unbinding approved",
					"cln_0"=>"cleaning inprogress",
					"cln_1"=>"cleaning approved",
					 ];
    public function jigDay()
    

    {
    	$currentdate=Input::get('date');
        $results= \App\Process::whereDate('created_at','=',$currentdate)->get();
        return view('jigs')->with(['results'=>$results,'codeset'=>reports::$codeset]);
        //var_dump(reports::$codeset); 
   
          }


     public function labreports() 

     {
     	$currentdate =Input::get('date');
     	$dgr= \App\lab::where('stage','dgr')-> whereDate ('created_at','=',$currentdate)->get();
       

        $pck= \App\lab::where('stage','pck')-> whereDate ('created_at','=',$currentdate)->get();
        
        $rns= \App\lab::where('stage','rns')-> whereDate ('created_at','=',$currentdate)->get();
        

        $flx= \App\lab::where('stage','fix')-> whereDate ('created_at','=',$currentdate)->get();
       

        $dry= \App\lab::where('stage','dry')-> whereDate ('created_at','=',$currentdate)->get();
        

        $galv= \App\lab::where('stage','galv')-> whereDate ('created_at','=',$currentdate)->get();
        

        $que= \App\lab::where('stage','que')-> whereDate ('created_at','=',$currentdate)->get();

        $pas= \App\lab::where('stage','pas')-> whereDate ('created_at','=',$currentdate)->get();
        return view('labreport')->with(['dgrs'=>$dgr, 'pcks'=>$pck, 'rnss'=>$rns, 'flxs'=>$flx, 'drys'=>$dry, 'galvs'=>$galv, 'ques'=>$que, 
        	'pass'=>$pas]);
        

     }

     

     public function labform()
    {
        return view('labform');
    }

    public function jigform()
    {
    	return view('jigsform');
    }

}





