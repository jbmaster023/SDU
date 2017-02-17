<?php

namespace App\Http\Controllers\api\Usuario;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Personas;
use App\PersonasDB2;
use App\Http\Controllers\Controller;

class ConsultarPersonasControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hola';
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
    public function store(Request $request)
    {        

        $cedula = $request->all();
        $cedula['cedula'] = str_replace('-', '', $cedula['cedula']);

        //Verificamos si este usuario ya esta credo en la bd local
        $VerificarCedula = Personas::where('Cedula',$cedula)->count();

        if($VerificarCedula == 1){
            //si existe un registro en la bd local procedemos a ejecutar este bloque
            $Persona = Personas::where('Cedula',$cedula)->first();
            $Persona['FechaNacimiento'] = $Persona->FechaNacimiento;

        }else{ 
               //En caso de ser lo contrario buscamos en la db sdu_s
               $Persona = PersonasDB2::where('Cedula',$cedula)->first();
               //en caso de que la respuesta de persona esta vacia hacemos lo siguiente
               if($Persona == ''){

                $Persona['Mensaje'] = 'Este Persona no existe en la BD2';
                $Persona['CrearPersona'] = 'true';

               }else{
                      $Persona['FechaNacimiento'] = $Persona->FechaNacimiento;
               }

        }

        return $Persona;
       
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
        //
    }
}
