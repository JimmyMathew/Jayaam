<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Labs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('labs', function($lab)
        {
             $lab->increments('id')->unique();
             $lab->string('stage',50);
             $lab->integer('tank_no');
             $lab->float('temp');	
             $lab->float('ph');
             $lab->float('concentration');

             $lab->string('add_solution',50);
             $lab->string('replace_tank',50);
             $lab->float('specific_gravity');
             $lab->float('hcl_concentration');
             $lab->float('iron_content');
             $lab->float('add_water');
             $lab->float('zinc_ammonium_chloride_content');
            
             $lab->string('tds_maximum',50);
             $lab->string('chromate_content',50);
            
            

             $lab->timestamps();

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
