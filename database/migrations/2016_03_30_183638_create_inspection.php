<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $ins)
         {
            $ins->increments('id');
            $ins->integer('job_code',10);
            $ins->Date('date',50);
            $ins->string('std',20);
            $ins->string('batchNo',20);
            $ins->string('supplierName',20);
            $ins->integer('pr_sampleNo');
            $ins->string('pr_sample',20);
            $ins->integer('pr_minDip');
            $ins->string('pr_remarks',20);
            $ins->string('str_sample',20);
            $ins->float('str_thickness',10);
            $ins->float('str_galvanizing',20);
            $ins->float('str_blackWt',10);
            $ins->float('str_area',10);
            $ins->float('str_coatingWt',10);
            $ins->float('str_coatingGms');
            $ins->string('str_microns',20);
            $ins->string('str_remarks',20);
            $ins->string('ham_sample',20);
            $ins->string('ham_location',20);
            $ins->string('ham_remarks',20);
            $ins->string('elco_sample',20);
            $ins->string('elco_microns',20);
            $ins->string('elco_remarks',20);
            $ins->integer('ann_no',10);
            $ins->string('ann_description',20);
            $ins->integer('ann_uom',20);
            $ins->integer('ann_quantity',50);
            $ins->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
