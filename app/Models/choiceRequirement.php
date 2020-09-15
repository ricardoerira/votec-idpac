<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class choiceRequirement extends Model
{
    public $table = "choice_requirements";

    public function choice()
    {
        return $this->belongsTo(Choice::class, 'id_choice');
    }

}
