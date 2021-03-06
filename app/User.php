<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','idrole','foto','activo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * Atributos Mostrar Foto
    */
    public function getMostrarFotoAttribute()
    {
        return asset($this->foto);
    }

    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function role()
    {
        return $this->hasOne('\App\Models\Catalogo','id','idrole');
    }
    /**
     * Atributos de la clase Users
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

}
