<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'Personas';


        protected $fillable = [
        'Nombre', 'Apellidos', 'Fecha_de_Nacimiento','Sexo','Cedula','Pasaporte','Direccion','Provincia_id','Telefono','Correo'
    ];

    protected $dates = ['Fecha_de_Nacimiento'];

    //protected $primaryKey = 'Cedula';




	public function setCedulaAttribute($value)
	{

	    $this->attributes['Cedula'] = str_replace('-', '', $value);
	   
	}

	public function setNombreAttribute($value)
	{
	    $this->attributes['Nombre'] = ucfirst(strtolower($value));
	}

	public function setApellidosAttribute($value)
	{
	    $this->attributes['Apellidos'] = ucfirst(strtolower($value));
	}


	public function getFechaNacimientoAttribute()
	{
	   return $this->Fecha_de_Nacimiento->format('Y-m-d') ;
	}




}
