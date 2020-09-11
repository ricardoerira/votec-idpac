<?php

namespace App\Http\Controllers\Admin;

use App\Models\Election;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('EsAdmin');
    }

    public function index(){

        return view('pages.admin.home');
    }
}
