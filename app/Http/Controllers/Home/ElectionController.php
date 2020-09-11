<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function index (string $slug){
        //$election = Election::where('')
        return view('pages.home.election.index');
    }
}
