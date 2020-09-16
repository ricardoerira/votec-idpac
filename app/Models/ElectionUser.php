<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElectionUser extends Model
{
    public $table = "election_users";

    protected $fillable = [
        'id_person', 'id_election', 'id_userType', 'enabled'
    ];
}
