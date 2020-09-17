<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\InscripcionRequest;
use App\Models\DataRequirement;
use App\Models\Election;
use App\Models\ElectionUser;
use App\Models\Person;
use App\Models\Requirement;
use App\Models\UserType;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Validator;

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

        if($type == 'candidato'){
            $idType = 1;
        }else{
            $idType = 2;
        }
        $eu = null;
        if(($electionUser = ElectionUser::where('id_person', $inf[0]->id)->where('id_election', $election[0]->id)->where('id_userType', $idType)->get())->count() > 0){
            $eu = $electionUser[0]->id;
        }

        $i = 1;
        $requirements = Requirement::where('id_election', $election[0]->id)->where('id_typeUser', $idType)->get();
        return view('pages.home.election.candidate', compact('type', 'election', 'inf', 'requirements', 'idType', 'i', 'eu'));
    }

    public function add (InscripcionRequest $request, string $slug, int $type){
//        Update basic information
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
        $person = Person::where('id_user', auth()->user()->id)->pluck('id')[0];

//        Update o create requirements, opc(create electionUser)
        if ($request->requirement <> null){
            setElectionUser($person, Election::where('slug', $slug)->pluck('id')[0], $type, $request->requirement);
        }else{
            setElectionUser($person, Election::where('slug', $slug)->pluck('id')[0], $type);
        }
        
        //return to the home page
        return redirect()->route('home')->with(["type" => "success", "message" => 'El '.(UserType::where('id', $type)->pluck('name'))[0].' ha sido creado con éxito']);
    }
}
