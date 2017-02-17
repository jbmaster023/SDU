<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'Nombre'        =>'required',
            'Sexo'          =>'required',
            'Provincia_id'  =>'required',
            'usuario'       =>'required|unique:users',
            'password'      =>'required'
        ];
    }

    public function all(){
        $data = parent::all();
        $data['Cedula'] = str_replace('-', '', $data['Cedula']);
        return $data;
    }
}
