<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages',function($sta)
        {
             $sta->increments('id')->unique();
             $sta->integer('process_id');
             
             $sta->string('stage',50);
             $sta->string('image',50);
             $sta->string('facility',50);
             
             $sta->dateTime('time_in');
             $sta->dateTime('time_out');
             $sta->timestamps();

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
