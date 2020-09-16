<?php

use App\Models\Choice;
use App\Models\choiceRequirement;
use App\Models\DataRequirement;
use App\Models\Election;
use App\Models\ElectionUser;
use App\Models\Requirement;
use Illuminate\Http\Request;
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
        if($typeInput[0]->id_input == 1 || $typeInput[0]->id_input == 5 || $typeInput[0]->id_input == 6){
            return 'text';
        }else{
            return 'id_choice';
        }
    }
}

if (!function_exists('setElectionUser')) {
    function setElectionUser(int $idUser, int $election, int $idType, array $requirement)
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
        foreach ($requirement as $key => $index){

            if ((DataRequirement::where('id_electionUser', $electionUser)->where('id_requirement', $key)->get())->count() > 0){
                DataRequirement::where('id_electionUser', $electionUser)->where('id_requirement', $key)->update([
                    checkTypeInput($key) => $index,
                ]);
            }else{
                if(checkTypeInput($key) == 'text'){
                    DataRequirement::create([
                        'id_requirement' => $key,
                        'id_electionUser' => $electionUser,
                        'text' => $index,
                    ]);
                }else{
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
