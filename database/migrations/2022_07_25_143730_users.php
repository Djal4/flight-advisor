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
        if(!Schema::hasTable('users')){
            Schema::create('users',function(Blueprint $table){
                $table->id();
                $table->string('username')->unique();
                $table->string('password');
                $table->string('firstname');
                $table->string('lastname');
                $table->string('salt')->nullable();
                $table->foreignId('role_id')->default(1)->constrained('roles');
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
