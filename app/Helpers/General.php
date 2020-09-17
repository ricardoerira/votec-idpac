<?php

use App\Models\Choice;
use App\Models\choiceRequirement;
use App\Models\DataRequirement;
use App\Models\Election;
use App\Models\ElectionUser;
use App\Models\Requirement;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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

if (!function_exists('checkTypeInput')) {
    function checkTypeInput(int $id)
    {
        $typeInput = Requirement::where('id', $id)->get();
        if($typeInput[0]->id_input == 1 || $typeInput[0]->id_input == 5){
            return 'text';
        }elseif($typeInput[0]->id_input == 6){
            return 'file';
        }
        else{
            return 'id_choice';
        }
    }
}

if (!function_exists('setElectionUser')) {
    function setElectionUser(int $idUser, int $election, int $idType, Request $request, array $requirement = null)
    {
        if((ElectionUser::where('id_person', $idUser)->where('id_election', $election)->where('id_userType', $idType)->get())->count() > 0){
            $electionUser = (ElectionUser::where('id_person', $idUser)->where('id_election', $election)->where('id_userType', $idType)->pluck('id'))[0];
        }else{
            $electionUser = ElectionUser::create([
                'id_person' => $idUser,
                'id_election' => $election,
                'id_userType' => $idType,
                'enabled' => 0,
            ]);
        }
        if ($requirement <> null){
            foreach ($requirement as $key => $index){

                if ((DataRequirement::where('id_electionUser', $electionUser)->where('id_requirement', $key)->get())->count() > 0){
                    if(checkTypeInput($key) == 'text'){
                        DataRequirement::where('id_electionUser', $electionUser)->where('id_requirement', $key)->update([
                            'text' => $index,
                        ]);
                    }elseif(checkTypeInput($key) == 'file'){
                        DataRequirement::where('id_electionUser', $electionUser)->where('id_requirement', $key)->update([
                            'text' => $request->file('requirement.' . $key)->store('requirement'),
                        ]);
                    }
                    else{
                        DataRequirement::where('id_electionUser', $electionUser)->where('id_requirement', $key)->update([
                            'id_choice' => $index,
                        ]);
                    }
                    
                }else{
                    if(checkTypeInput($key) == 'text'){
                        DataRequirement::create([
                            'id_requirement' => $key,
                            'id_electionUser' => $electionUser,
                            'text' => $index,
                        ]);
                    }elseif(checkTypeInput($key) == 'file'){
                        DataRequirement::create([
                            'id_requirement' => $key,
                            'id_electionUser' => $electionUser,
                            'text' => $request->file('requirement.' . $key)->store('requirement'),
                        ]);
                    }
                    else{
                        DataRequirement::create([
                            'id_requirement' => $key,
                            'id_electionUser' => $electionUser,
                            'id_choice' => $index,
                        ]);
                    }
                }
            }
        }
    }
}

if (!function_exists('formatDate')) {
    function formatDate(string $fecha)
    {
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = Carbon::parse($fecha);
        $mes = $meses[($fecha->format('n')) - 1];
        $fecha= $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');

        return $fecha;
    }
}

if (!function_exists('valueRequirement')) {
    function valueRequirement(int $idUser, int $idRequirement)
    {
        $resp = "";
        $dr = DataRequirement::where('id_electionUser', $idUser)->where('id_requirement', $idRequirement)->get();
        if($dr->count()){
            if(checkTypeInput($idRequirement) == 'text' || checkTypeInput($idRequirement) == 'file'){
                $resp =  $dr[0]->text;
            }else{
                $resp = $dr[0]->id_choice;
            }
        }
        return($resp) ;
    }
}

if (!function_exists('prueba')) {
    function prueba(string $txt)
    {
        dd(Crypt::decryptString($txt, PATHINFO_FILENAME)) ;
    }
}


