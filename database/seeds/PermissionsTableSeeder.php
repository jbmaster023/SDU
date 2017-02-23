<?php

use Illuminate\Database\Seeder;
use App\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          


        Permission::create([
                 'name'               =>'Facturacion',
                 'display_name'       =>'Facturacion',
                 'description'        =>'Facturacion'
        ]);

        Permission::create([
                 'name'               =>'Crear_Nueva_Factura',
                 'display_name'       =>'Crear Nueva Factura',
                 'description'        =>'Crear Nueva Factura'
        ]);

        Permission::create([
                 'name'               =>'Crear_Presupuesto',
                 'display_name'       =>'Crear Presupuesto',
                 'description'        =>'Crear Presupuesto'
        ]);

    }
}



