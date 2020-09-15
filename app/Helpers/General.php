<?php

use App\Models\Choice;
use App\Models\choiceRequirement;
use Illuminate\Support\Facades\DB;

if (!function_exists('selectData')) {
    function selectData(string $nameTable)
    {
        return (DB::select('select * from '.$nameTable));
    }
}

if (!function_exists('optionChoice')) {
    function optionChoice(int $id)
    {
        $data = choiceRequirement::where ('id_requirement', $id)->get();
        return $data;
    }
}