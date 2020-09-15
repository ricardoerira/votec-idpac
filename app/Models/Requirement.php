<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class Requirement extends Model
{

    public function inputType()
    {
        return $this->belongsTo(InputType::class, 'id_input');
    }

    
}
