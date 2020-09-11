<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = "persons";

    protected $fillable = [
        'id_user',
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'id_user');
    }
}
