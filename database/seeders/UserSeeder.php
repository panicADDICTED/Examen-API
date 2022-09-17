<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $datos = [
            [
                'name' => 'Ricardo Gonzalez',
                'email' => 'ricardo.gonzalez.rodriguez25@gmail.com',
                'email_verified_at' => date('Y-m-d H:m:s'),
                'password' =>  Hash::make('password'),
                'task_num' => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Raul Gonzalez',
                'email' => 'raul_mpg@hotmail.com',
                'email_verified_at' => date('Y-m-d H:m:s'),
                'password' =>  Hash::make('password'),
                'task_num' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Alejandra Rubio',
                'email' => '2118100789@soy.utj.edu.mx',
                'email_verified_at' => date('Y-m-d H:m:s'),
                'password' =>  Hash::make('password'),
                'task_num' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
            ];
            DB::table('users')->insert($datos);
    }
   
}
