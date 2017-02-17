<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
	protected $table = 'Empleados';

	
	protected $fillable = [
        'Personas_id'
    ];




	 public function Personas()
    {
        return $this->hasOne('App\Personas','id','Personas_id');  
    }



}
