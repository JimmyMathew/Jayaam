<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class material extends Controller
{
    public function materialInsert()
    {
        $job=Input::get('job_code');
       foreach ($_POST['material_type'] as $key => $val) {
           if(!empty($_POST['material_type'][$key]) && !empty($_POST['quantity'][$key]) &&!empty($_POST['lot_no'][$key]))
           {
               $obj=new \App\Material();
           $obj->job_code = $job;
           $obj->material_type = Input::get('material_type')[$key];
           $obj->material_structure= Input::get('material_structure')[$key];
           $obj->material_dimension = Input::get('material_dimension')[$key];
           $obj->quantity = Input::get('quantity')[$key];
            $obj->lot_no = Input::get('lot_no')[$key];
            $obj->rejected = Input::get('rejected')[$key];
            $obj->material_status = Input::get('material_status');
            $obj->save();
            
             $recObj = new \App\Receipt();
        DB::table('receipts')->where('id', 1)->update(['notes' =>Input::get('notes')]);

        }
       }
        return "material inserted";
    }


    public function materialView()

    {
        $results=\App\Material::all();
        return view('materials')->with('result',$results);
    }
    public function lot_show()
    {
         $results=\App\Material::where('job_code',Input::get('job_code'))->orderby('lot_no')->get();
        echo "<option>Select lot-No</option>";
        foreach ($results as $data) {
            echo "<option value='".$data->lot_no."'>".$data->lot_no."</option>";
        }
    }
}
?>