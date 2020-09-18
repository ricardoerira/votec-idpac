<?php

use App\Models\Disability;
use App\Models\ElectionUser;
use App\Models\GroupPopulation;
use App\models\Identification_Type;
use App\Models\InputType;
use App\Models\Location;

use App\Models\UserType;
use App\Rol;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //disability data
        Disability::create(["name" =>'Ninguno']);
        Disability::create(["name" =>'Fisica']);
        Disability::create(["name" =>'Auditiva']);
        Disability::create(["name" =>'Hipoacustica']);
        Disability::create(["name" =>'Visual']);
        Disability::create(["name" =>'Baja vision']);
        Disability::create(["name" =>'Intelectual']);
        Disability::create(["name" =>'Cognitiva']);
        Disability::create(["name" =>'Visceral']);
        Disability::create(["name" =>'Multiple']);
        Disability::create(["name" =>'Psicosocial']);

        //input  type data
        InputType::create(['name' => 'Text']);
        InputType::create(['name' => 'checkbox']);
        InputType::create(['name' => 'Select']);
        InputType::create(['name' => 'Radio']);
        InputType::create(['name' => 'Date']);
        InputType::create(['name' => 'File']);

        //type identification data
        Identification_Type::create(['name' =>  'Cédula de Ciudadanía']);
        Identification_Type::create(['name' =>  'Cédula de Extranjería']);
        Identification_Type::create(['name' =>  'Pasaporte']);

        //Group population data
        GroupPopulation::create(['name' => 'Ninguno']);
        GroupPopulation::create(['name' => 'Afrodescendiente']);
        GroupPopulation::create(['name' => 'Mestizo']);
        GroupPopulation::create(['name' => 'Indigena']);
        GroupPopulation::create(['name' => 'Palenquero']);
        GroupPopulation::create(['name' => 'Raizal']);
        GroupPopulation::create(['name' => 'Gitano']);
        GroupPopulation::create(['name' => 'Desmovilizado']);
        GroupPopulation::create(['name' => 'Víctima del Conflicto']);

        //User election data
        UserType::create(['name' => 'candidato']);
        UserType::create(['name' => 'Votante']);

        //Locations data
        Location::create(['name' => 'ANTONIO NARIÑO']);
        Location::create(['name' => 'BARRIOS UNIDOS']);
        Location::create(['name' => 'BOSA']);
        Location::create(['name' => 'CANDELARIA']);
        Location::create(['name' => 'CHAPINERO']);
        Location::create(['name' => 'CIUDAD BOLÍVAR']);
        Location::create(['name' => 'ENGATIVÁ']);
        Location::create(['name' => 'FONTIBÓN']);
        Location::create(['name' => 'KENNEDY']);
        Location::create(['name' => 'LOS MÁRTIRES']);
        Location::create(['name' => 'PUENTE ARANDA']);
        Location::create(['name' => 'RAFAEL URIBE URIBE']);
        Location::create(['name' => 'SAN CRISTÓBAL']);
        Location::create(['name' => 'SANTA FE']);
        Location::create(['name' => 'SUBA']);
        Location::create(['name' => 'SUMAPAZ']);
        Location::create(['name' => 'TEUSAQUILLO']);
        Location::create(['name' => 'TUNJUELITO']);
        Location::create(['name' => 'USAQUÉN']);
        Location::create(['name' => 'USME']);

        //rol data
        Rol::create(['name' => 'user']);
        Rol::create(['name' => 'admin']);
    }

    
        
}
