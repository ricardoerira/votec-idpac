<?php

namespace App;

use App\models\Identification_Type;
use App\models\Rol;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_identificationType','identification', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function IdentificationTypes()
    {
        return $this->belongsTo(Identification_Type::class, 'id_identificationType');
    }

    public function roles()
    {
        return $this->hasMany(Rol::class, 'id_rol');
    }

    public function esAdmin (){
        if($this->role->name == 'admin'){
            return true;
        }
        return false;
    }

    public function esUser (){
        if($this->role->name == 'user'){
            return true;
        }
        return false;
    }
}
