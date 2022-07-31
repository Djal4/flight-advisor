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
        if(!Schema::hasTable('comments')){
            Schema::create('comments',function(Blueprint $table){
                $table->id();
                $table->text('comment');
                $table->timestamp('created_at');
                $table->foreignId('user_id')->constrained('users');
                $table->foreignId('city_id')->constrained('cities');
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
        Schema::dropIfExists('comments');
    }
};
