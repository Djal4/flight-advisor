<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Inserting roles
        DB::table('roles')->insert([
            'title'=>'user'
        ]);
        
        DB::table('roles')->insert([
            'title'=>'admin'
        ]);
        
        //Inserting administrator test account
        DB::table('users')->insert([
            'username'=>'admin',
            'password'=>bcrypt('admin'),
            'firstname'=>'admin',
            'lastname'=>'admin',
            'role_id'=>2
        ]);

        //Inserting regular user test account
        DB::table('users')->insert([
            'username'=>'user',
            'password'=>bcrypt('user'),
            'firstname'=>'user',
            'lastname'=>'user',
            'role_id'=>1
        ]);
    }
}
