<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class inspection extends Controller
{
	public function inspectionInsert()
	{
   $object= new \App\Inspection();
        $object->job_code = Input::get('job_code');
        $object->irdate = date('Y-m-d H:i:s');
        $object->std =Input::get('std');
         $object->batchNo=Input::get('batchNo');
         $object->supplierName=Input::get('supplierName');
         
         $object->pr_sampleNo = Input::get('pr_sampleNo');
        $object->pr_sample = Input::get('pr_sample');
        $object->pr_minDip =Input::get('pr_minDip');
         $object->pr_remarks=Input::get('pr_remarks');
         
         $object->str_sample=Input::get('str_sample');
         $object->str_thickness = Input::get('str_thickness');
        $object->str_galvanizing = Input::get('str_galvanizing');
        $object->str_blackWt =Input::get('str_blackWt');
         $object->str_area=Input::get('str_area');
         $object->str_coatingWt=Input::get('str_coatingWt');
         
         $object->str_coatingGms = Input::get('str_coatingGms');
        $object->str_microns = Input::get('str_microns');
        $object->str_remarks =Input::get('str_remarks');
         
         $object->ham_sample=Input::get('ham_sample');
         $object->ham_location=Input::get('ham_location');
         $object->ham_remarks = Input::get('ham_remarks');
        
        $object->elco_sample = Input::get('elco_sample');
        $object->elco_microns =Input::get('elco_microns');
         $object->elco_remarks=Input::get('elco_remarks');
         
         $object->ann_no=Input::get('ann_no');
         $object->ann_description = Input::get('ann_description');
        $object->ann_uom = Input::get('ann_uom');
        $object->ann_quantity =Input::get('ann_quantity');
         
        
        $object->save(); 

	
        echo "Inspection report stored";
    }
    
}

