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
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->unsignedInteger("idPatient");
            $table->foreign('idPatient')->references('idPatient')->on('patients')->onDelete('cascade');

            $table->unsignedInteger("idMedecin");
            $table->foreign('idMedecin')->references('idMedecin')->on('medecins')->onDelete('cascade');



            $table->date('dateRendezVous');
            $table->time('heureRendezVous');
            
            $table->enum("statutRendezVous", ['planifier','annuler', 'terminer'])->default('planifier');

            $table->text('motifRendezVous');
            $table->text('noteRendezVous')->nullable();
            $table->primary(['idMedecin', 'dateRendezVous', 'heureRendezVous']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
