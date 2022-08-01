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
        if(!Schema::hasTable('airports')){
            Schema::create('airports',function(Blueprint $table){
                $table->id();
                $table->string('name');
                $table->foreignId('city_id')->constrained('cities');
                $table->char('iata',3)->nullable();
                $table->char('icao',4)->nullable();
                $table->double('latitude',20,15);
                $table->double('longitude',20,15);
                $table->smallInteger('altitude',false,false);
                $table->char('timezone',3);
                $table->foreignId('dst_id')->constrained('dst');
                $table->foreignId('timezone_id')->constrained('timezones');
                $table->foreignId('type_id')->constrained('types');
                $table->foreignId('source_id')->constrained('sources');
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
        Schema::dropIfExists('airports');
    }
};
