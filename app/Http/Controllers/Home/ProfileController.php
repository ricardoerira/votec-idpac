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

    public function update(Request $request)
    {
        Person::where('id_user', auth()->user()->id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'date_birth' => $request->date_birth,
            'sex' => $request->sex,
            'id_location' => $request->id_location,
            'address' => $request->address,
            'phone' => $request->phone,
            'gender_identity' => $request->gender_identity,
            'id_disability' => $request->id_disability,
            'id_groupP' => $request->id_groupP,
            'occupation' => $request->occupation,
        ]);

         //return to the home page
         return redirect()->route('home')->with(["type" => "success", "message" => 'El usuario ha sido actualizado con éxito']);
    }
}

