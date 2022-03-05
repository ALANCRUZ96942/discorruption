<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('description')->nullable();


            $table->string('name-d')->nullable();
            $table->text('occupation-d')->nullable();
            $table->string('e-mail')->nullable();

    

            $table->string('name')->nullable();
            $table->integer('age');
            $table->text('occupation')->nullable();

            $table->unsignedBigInteger('sexo_id')->nullable();
            $table->foreign('sexo_id')->references('id')->on('sexos');

            $table->unsignedBigInteger('acto_id')->nullable();
            $table->foreign('acto_id')->references('id')->on('actos');


            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->unsignedBigInteger('escolaridad_id')->nullable();
            $table->foreign('escolaridad_id')->references('id')->on('escolaridads');


            $table->text('suceso')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncias');
    }
}
