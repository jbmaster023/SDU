<?php

namespace App\Http\Controllers\Catalogo\Usuarios;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;
use App\Permission;
use App\Http\Controllers\Controller;



class RolesController extends Controller
{
    //

        public function index()
    {
       $Roles      = Role::get();
       $permisos   =  Permission::all();
       $Datos      =$Roles;

       //dd($Datos);

       return view('Catalogo.Usuario.GestionDeRolesDeUsuarios',compact('Roles','permisos','Datos'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		
		$role = new Role();
        $role->name = $request->name;
        $role->save();
        
        return \Redirect::route('GestionDeRoles.index');
	}



  public function update($id,Request $request)
  {
    $role = Role::find($id);
    \Session::flash('success', 'El rol ('.$role->name.') fue modificado por ('.$request->name.') corectamente');
        $role->name = $request->name;
        $role->save();

        
        return \Redirect::route('GestionDeRoles.index');
  }


 public function destroy($id)
  {
       // $role =Role::destroy($id);
        Role::destroy($id);

       // dd($id);


        return \Redirect::route('GestionDeRoles.index');
  }







}
