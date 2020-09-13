<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('selectData')) {
    function selectData(string $nameTable)
    {
        return (DB::select('select * from '.$nameTable));
    }
}