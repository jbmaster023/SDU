<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class PersonasDB2 extends Model
{
    protected $connection = 'servidor';

     protected $table = 'padron';

     protected $dates = ['Fecha_de_Nacimiento'];


	public function getFechaNacimientoAttribute()
	{
	   return $this->Fecha_de_Nacimiento->format('Y-m-d') ;
	}


	  public function getFullNameAttribute()
	{
	   return $this->Nombre . ' ' . $this->Apellidos;
	}
}
