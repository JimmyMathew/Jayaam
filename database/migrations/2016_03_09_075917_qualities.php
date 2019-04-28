<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Qualities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualities',function($qua)
        {
            $qua->increments('id')->unique();
            $qua->integer('job_code');
            $qua->string('required_coating',50);
            $qua->integer('microns');
            $qua->integer('qty');
            $qua->text('remarks',100);
            $qua->integer('shift');
            $qua->string('recovery_supervisor',50);
            $qua->string('shift_incharge',100);
            $qua->string('quality_incharge',50);
            $qua->string('work_manager',100);
            $qua->timestamps(); 
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
