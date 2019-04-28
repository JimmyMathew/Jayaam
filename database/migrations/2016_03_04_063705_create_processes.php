<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('processes',function($var)
        {
            $var->increments('id')->unique();
            $var->integer('job_code');
            $var->integer('lot_no');
            $var->integer('fixture');
            $var->integer('jig_no');
            $var->integer('quantity');
            $var->string('status');
           

            $var->timestamps();

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
