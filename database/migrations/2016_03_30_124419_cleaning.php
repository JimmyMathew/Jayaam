<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cleaning extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cleaning', function (Blueprint $cln) {
            $cln->increments('id');
            $cln->integer('job_code');
            $cln->integer('quantity');
            $cln->integer('approve');
            $cln->timestamps();
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
