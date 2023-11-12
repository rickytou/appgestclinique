<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->increments('idMedecin'); // Clé primaire nommée 'idMedecin'
            $table->string('nomMedecin', 50);
            $table->string('prenomMedecin', 50);
            $table->string('courrielMedecin', 30)->unique();
            $table->string('numeroLicence', 30)->unique();
            $table->string('adresseMedecin', 255);
            $table->string('telephoneMedecin'); // Champs téléphone en tant qu'entier
            $table->enum('statutMedecin', ['actif', 'inactif', 'en arret'])->default('actif');
            $table->string('photo', 50);
            $table->string('specialite', 20)->default('Ophtalmologue');
            $table->string('affiliationsProfessionnelles', 100)->nullable();
            $table->text('titresAcademiques');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecins');
    }
}
