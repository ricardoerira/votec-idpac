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

    public function localities(){
        return $this->belongsTo(Choice::class, 'id_location');
    }

    public function groupPopulations(){
        return $this->belongsTo(GroupPopulation::class, 'id_groupP');
    }

    public function disabilities(){
        return $this->belongsTo(Disability::class, 'id_disability');
    }
}
