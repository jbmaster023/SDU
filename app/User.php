<?php

namespace App;

use Zizaco\Entrust\Traits\EntrustUserTrait;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario', 'Empleados_id', 'password',
    ];

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function empleados()
    {
        return $this->hasOne('App\Empleados','id','Empleados_id');;
    }


        public function roles()
    {
        return $this->belongsToMany('App\Role','role_user');
    }


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }


}
