<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments("idPatient");
            $table->string("numeroDossier",30)->unique();
            $table->string("nomPatient",50);
            $table->string("prenomPatient",50);
            $table->string("courrielPatient",30)->unique()->nullable();
            $table->char("sexe",1);
            $table->string("adressePatient", 255);
            $table->string("telephonePatient",13);
            $table->string("NumeroAssMalPatient",9)->unique();
            $table->enum("groupSanguin", ['A+','A-','B+','B-','O+','O-','AB+','AB-']);
            $table->enum("statutPatient", ['actif','inactif','en attente']);
            $table->text('noteDossier')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
