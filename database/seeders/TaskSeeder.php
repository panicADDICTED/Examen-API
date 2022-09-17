<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'name' => 'Diseño',
                'description' => 'Diseño de la pagina con Mockups',
                'status' => 'Completado',
                'user_name' => 'Ricardo Gonzalez',
                'company' => 'Netcommerce',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Frontend',
                'description' => 'Desarrollar el diseño confirmado',
                'status' => 'Completado',
                'user_name' => 'Ricardo Gonzalez',
                'company' => 'Netcommerce',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Backend',
                'description' => 'Desarrollar el funcionamiento de los procesos',
                'status' => 'Completado',
                'user_name' => 'Ricardo Gonzalez',
                'company' => 'Netcommerce',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Base de datos',
                'description' => 'Creacion de la base de datos',
                'status' => 'Completado',
                'user_name' => 'Ricardo Gonzalez',
                'company' => 'Netcommerce',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Testing',
                'description' => 'Realizar pruebas de los procesos terminados',
                'status' => 'Completado',
                'user_name' => 'Ricardo Gonzalez',
                'company' => 'Netcommerce',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Diseño',
                'description' => 'Diseño de la pagina con Mockups',
                'status' => 'Pendiente',
                'user_name' => 'Raul Gonzalez',
                'company' => 'IBM',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Frontend',
                'description' => 'Desarrollar el diseño confirmado',
                'status' => 'Pendiente',
                'user_name' => 'Raul Gonzalez',
                'company' => 'IBM',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Backend',
                'description' => 'Desarrollar el funcionamiento de los procesos',
                'status' => 'Pendiente',
                'user_name' => 'Raul Gonzalez',
                'company' => 'IBM',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Base de datos',
                'description' => 'Creacion de la base de datos',
                'status' => 'Pendiente',
                'user_name' => 'Raul Gonzalez',
                'company' => 'IBM',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Testing',
                'description' => 'Realizar pruebas de los procesos terminados',
                'status' => 'Pendiente',
                'user_name' => 'Raul Gonzalez',
                'company' => 'IBM',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Diseño',
                'description' => 'Diseño de la pagina con Mockups',
                'status' => 'Pendiente',
                'user_name' => 'Alejandra Rubio',
                'company' => 'Lior',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Frontend',
                'description' => 'Desarrollar el diseño confirmado',
                'status' => 'Pendiente',
                'user_name' => 'Alejandra Rubio',
                'company' => 'Lior',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Backend',
                'description' => 'Desarrollar el funcionamiento de los procesos',
                'status' => 'Pendiente',
                'user_name' => 'Alejandra Rubio',
                'company' => 'Lior',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Base de datos',
                'description' => 'Creacion de la base de datos',
                'status' => 'Pendiente',
                'user_name' => 'Alejandra Rubio',
                'company' => 'Lior',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'name' => 'Testing',
                'description' => 'Realizar pruebas de los procesos terminados',
                'status' => 'Pendiente',
                'user_name' => 'Alejandra Rubio',
                'company' => 'Lior',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
        ];

        DB::table('tasks')->insert($datos);
    }
}
