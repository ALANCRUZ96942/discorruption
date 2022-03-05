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
            $table->text('place');
            $table->text('description')->nullable();

            $table->string('name-d')->nullable();
            $table->text('occupation-d')->nullable();

            $table->text('level-studies')->nullable();

            $table->string('name')->nullable();
            $table->char('sex');
            $table->integer('age');
            $table->text('occupation')->nullable();

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
