<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Identification_Type extends Model
{
    public $table = "identification_types";

    protected $fillable = [
        'name',
    ];
}
