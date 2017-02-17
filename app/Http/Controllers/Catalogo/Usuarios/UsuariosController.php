<?php

namespace App\Http\Controllers\Catalogo\Usuarios;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Provincias;
use App\Role;
use App\User;
use App\Personas;
use App\Empleados;
use Validator;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $Provincias = Provincias::get();
       $Roles      = Role::get();
       $Usuarios   = User::with('empleados.Personas','roles')->get();
       $Datos =$Usuarios;



       //dd($Usuarios);

       return view('Catalogo.Usuario.GestionDeUsuarios',compact('Provincias','Roles','Usuarios','Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CrearUsuario $request)
    {

        $validatorCedula = Validator::make($request->all(), [
            'Cedula'        =>'required|unique:Personas'
        ]);  
        
        //Verificamos si la persona ya existe en la DB local
        if($validatorCedula->fails() == false){
            //Si es true es que no existe encontes la creamos
            $Persona = Personas::create($request->all());

        }else{
                //Si es false la actualizamos la informacion
                $Persona = Personas::where('Cedula',$request->Cedula)->first();
                
                $Persona->Nombre              = $request->Nombre;
                $Persona->Apellidos           = $request->Apellidos;
                $Persona->Fecha_de_Nacimiento = $request->Fecha_de_Nacimiento;
                $Persona->Sexo                = $request->Sexo;
                $Persona->Direccion           = $request->Direccion;
                $Persona->Provincia_id        = $request->Provincia_id;
                $Persona->Telefono            = $request->Telefono;

                $Persona->save();
        }

         
       $VerificarEmpleado = Empleados::where('Personas_id',$Persona->id)->count();
        
       if($VerificarEmpleado == 0){

        $Empleado = new Empleados;
        $Empleado->Personas_id = $Persona->id;
        $Empleado->saveOrFail();

        $input = $request->all();
    
        $input['Empleados_id']= $Empleado->id ;

        $User = User::create($input);

        \Session::flash('success', 'El usuario se creo coractamente.');
        return \Redirect::route('GestionDeUsuarios.index');

       }
    
        \Session::flash('error', 'Error:  El  empleado que intenta crear ya tiene un usuario activo.');
        return \Redirect::route('GestionDeUsuarios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::find($id);
        User::destroy($id);
        Empleados::destroy($User->Empleados_id);

        return \Redirect::route('GestionDeUsuarios.index');
    }
}
