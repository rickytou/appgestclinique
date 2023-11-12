<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments("idPatient"); // Clé primaire auto-incrémentée
            $table->string('numeroDossier', 30)->unique();
            $table->string('nomPatient', 50);
            $table->string('prenomPatient', 50);
            $table->string('courrielPatient', 30)->unique()->nullable();
            $table->char('sexePatient', 1);
            $table->string('adressePatient', 255);
            $table->string('telephonePatient'); // Retirez l'auto-incrémentation ici
            $table->string('NumeroAssMalPatient', 12)->unique();
            $table->enum('groupSanguin', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']);
            $table->enum('statutPatient', ['actif', 'inactif', 'en attente'])->default('actif');
            $table->text('noteDossier')->nullable();
            $table->date('dateNaissancePatient');
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
}
