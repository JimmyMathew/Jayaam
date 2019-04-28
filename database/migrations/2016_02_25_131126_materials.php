<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function($var) {
            $var->increments('id')->unique();
            $var->integer('job_code');

            $var->string('description', 20);
            $var->integer('quantity');
            $var->integer('lot_no');

            $var->integer('rejected');

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
