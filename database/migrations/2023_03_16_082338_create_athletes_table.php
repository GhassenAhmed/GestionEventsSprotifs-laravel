<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('prenom',60);
            $table->enum('sexe',['HOMME','FEMME']);
            $table->string('photo');
            $table->integer('score')->default(0)->unsigned();
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
            $table->foreignId('equipe_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('athletes');
    }
}
