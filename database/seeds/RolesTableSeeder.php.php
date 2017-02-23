<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Role_User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         Role::create([
                 'name'               =>'FullControl',
                 'display_name'       =>'Full Control',
                 'description'        =>'Full Control'
        ]);


        Role_User::create([
                 'user_id'            =>'1',
                 'role_id'            =>'1'
        ]);

    }
}
