<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('disabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('group_populations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('path')->nullable();
            $table->integer('id_location')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender_identity')->nullable();
            $table->string('sexual_orientation')->nullable();
            $table->integer('id_disability')->unsigned()->nullable();
            $table->integer('id_groupP')->unsigned()->nullable();
            $table->string('occupation')->nullable();
            $table->timestamps();

            $table->foreign('id_location')
                ->references('id')->on('locations');

            $table->foreign('id_disability')
                ->references('id')->on('disabilities');

            $table->foreign('id_groupP')
                ->references('id')->on('group_populations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
        Schema::dropIfExists('disabilities');
        Schema::dropIfExists('group_populations');
        Schema::dropIfExists('persons');
    }
}
