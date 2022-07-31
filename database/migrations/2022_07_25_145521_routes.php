<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('routes')){
            Schema::create('routes',function(Blueprint $table){
                $table->id();
                $table->char('airline',3);
                $table->foreignId('airline_id')->constrained('airlines');
                $table->foreignId('source_airport_id')->constrained('airports');
                $table->foreignId('destionation_airport_id')->constrained('airports');
                $table->char('codeshare',1)->default('');
                $table->smallInteger('stops',false,true);
                $table->foreignId('equipment_id')->constrained('equipment');
                $table->double('price',8,2);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};
