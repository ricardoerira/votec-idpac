<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('description');
            $table->boolean('status')->default(0);;
            $table->dateTime('dateStart_candidates');
            $table->dateTime('dateEnd_candidates');
            $table->dateTime('dateStart_result');
            $table->dateTime('dateEnd_result');
            $table->timestamps();
        });

        Schema::create('type_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('election_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_person')->unsigned();
            $table->integer('id_election')->unsigned();
            $table->integer('id_userType')->unsigned();
            $table->integer('enabled');
            $table->timestamps();

            $table->foreign('id_person')
                ->references('id')->on('persons');

            $table->foreign('id_election')
                ->references('id')->on('elections');

            $table->foreign('id_userType')
                ->references('id')->on('type_users');
        });

        Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_electionUser')->unsigned();
            $table->string('evidence');
            $table->string('observation');

            $table->foreign('id_user')
                ->references('id')->on('persons');

            $table->foreign('id_electionUser')
                ->references('id')->on('election_users');
        });

        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_election')->unsigned();
            $table->integer('id_electionUser')->unsigned();
            $table->timestamps();

            $table->foreign('id_user')
                ->references('id')->on('persons');

            $table->foreign('id_election')
                ->references('id')->on('elections');

            $table->foreign('id_electionUser')
                ->references('id')->on('election_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elections');
        Schema::dropIfExists('type_users');
        Schema::dropIfExists('election_users');
        Schema::dropIfExists('incidents');
        Schema::dropIfExists('votes');
    }
}
