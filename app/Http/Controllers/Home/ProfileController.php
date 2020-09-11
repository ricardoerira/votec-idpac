<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $inf = Person::where('id_user', auth()->user()->id)->get();
        return view('pages.home.profile',compact('inf'));
    }

    public function update(Request $request, object $user)
    {
       $user->update($request->all());

        return back()->withInput()->with(['error' => 'Algo va mal']);
    }
}

