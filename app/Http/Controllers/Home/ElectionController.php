<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\Person;
use Illuminate\Http\Request;

class ElectionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index (string $slug){
        $election = Election::where('slug', $slug)->get();
        return view('pages.home.election.index', compact('election'));
    }

    public function inscription (string $slug, string $type){
        $election = Election::where('slug', $slug)->get();
        $inf = Person::where('id_user', auth()->user()->id)->get();
        return view('pages.home.election.candidate', compact('type', 'election', 'inf'));
    }

    public function add (Request $request){
        Person::where('id_user', auth()->user()->id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'date_birth' => $request->date_birth,
            'sex' => $request->sex,
            'id_location' => $request->id_location,
            'address' => $request->address,
            'phone' => $request->phone,
            'gender_identity' => $request->gender_identity,
            'id_disability' => $request->date_birth,
            'id_groupP' => $request->date_birth,
            'occupation' => $request->date_birth,
        ]);
    }
}
