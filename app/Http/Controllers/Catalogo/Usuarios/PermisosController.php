<?php

namespace App\Http\Controllers\Catalogo\Usuarios;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Permission;
use App\RolesPermission;
use App\Role;

class PermisosController extends Controller
{
   

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    protected $permisos;
    
    public function  __construct() {
		$permisos = Permission::all();
        
		$this->permisos = $permisos;
	}
    
	public function index(Request $request)
	{
		
		return \Response::json($this->getPermisos($request->id));
        
	}
    
    private function getPermisos($id_rol){
        $permisos = array();

        $permisos['permisosAsignados'] = $this->getPermisosAsignados($id_rol);
        return $permisos;
        
    }
    
    private function getPermisosAsignados($id_rol){
        $permisosDeRol = RolesPermission::where('role_id', '=', $id_rol)->get();
        $asignados = array();
        foreach($permisosDeRol as $p){

		  foreach ($this->permisos as $key => $value){
            if($value->id == $p->permission_id){
                $asignados[] = $value;
			 }
          }   
      }
        
        return $asignados;
	}
    
    public function asignar(Request $request){
		$rol = Role::find($request->role_id);
        $rol->attachPermission($request->permission_id);
        return \Response::json('ok');
	}
    
    public function desasignar(Request $request){

    	
		$rol = Role::find($request->role_id);
        $rolPermisos = RolesPermission::where('role_id', '=', $request->role_id)
            ->where('permission_id', '=', $request->permission_id)->get()->first();
            //dd($request->permission_id);
        $desasignar = RolesPermission::destroy($rolPermisos->id);

        return \Response::json('ok');
	}

}
