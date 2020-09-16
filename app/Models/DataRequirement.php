<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataRequirement extends Model
{
    public $table = "data_requirements";

    protected $fillable = [
        'id_requirement', 'id_electionUser', 'id_userType', 'enabled', 'id_choice', 'text'
    ];
}
