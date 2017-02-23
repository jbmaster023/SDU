<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Personas;
use App\Empleados;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Personas::create([
            'Nombre'               => 'Administrador',
            'Apellidos'            => 'Administrador',
            'Cedula'               => '0',
            'Provincia_id'         => '1',
            'Fecha_de_Nacimiento'  => '0000-00-00',
        ]);

       Empleados::create([
            'Personas_id'               => '1',
        ]);



        User::create([
            'usuario'           => 'Admin',
            'password'          => '1234',
            'Empleados_id'      => '1',

            
            
            
        ]);


    }
}
