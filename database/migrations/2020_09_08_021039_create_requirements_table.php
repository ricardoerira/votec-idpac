<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('id_input')->unsigned();
            $table->integer('id_election')->unsigned();
            $table->boolean('obligatory')->default(0);
            $table->integer('id_typeUser')->unsigned();

            $table->timestamps();

            $table->foreign('id_input')
                ->references('id')->on('input_types');

            $table->foreign('id_election')
                ->references('id')->on('elections');

            $table->foreign('id_typeUser')
                ->references('id')->on('type_users');
        });

        Schema::create('choices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('data_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_requirement')->unsigned();
            $table->integer('id_electionUser')->unsigned();
            $table->integer('id_choice')->unsigned();
            $table->string('text');
            $table->timestamps();

            $table->foreign('id_requirement')
                ->references('id')->on('requirements');

            $table->foreign('id_electionUser')
                ->references('id')->on('election_Users');
            
            $table->foreign('id_choice')
                ->references('id')->on('choices');
        });


        Schema::create('choice_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_choice')->unsigned();
            $table->integer('id_requirement')->unsigned();
            $table->timestamps();

            $table->foreign('id_choice')
                ->references('id')->on('choices');

            $table->foreign('id_requirement')
                ->references('id')->on('requirements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('input_types');
        Schema::dropIfExists('requirements');
        Schema::dropIfExists('data_requirements');
        Schema::dropIfExists('choices');
        Schema::dropIfExists('choice_requirements');
    }
}
