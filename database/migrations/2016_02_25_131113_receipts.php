<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Receipts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts',function($var)
        {
            $var->increments('id')->unique();
            $var->integer('job_code')->null();

            $var->string('vehicle_regno',20);
            $var->string('party_dc',100);
            $var->Date('dc_date',50);
            $var->string('party_name',100);

            $var->float('dc_weight');
            $var->float('wbl_weight');
            $var->float('wb_weight');
            $var->DateTime('vehicle_in');
            $var->DateTime('vehicle_out');
            $var->string('notes',500);

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
