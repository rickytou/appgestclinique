<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->unsignedInteger("identifiantMedecin"); // Utilisez unsignedInteger
            $table->foreign('identifiantMedecin')->references('idMedecin')->on('medecins')->onDelete('cascade');
            $table->text("motifConge");
            $table->text("note")->nullable();
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->enum("statutConge", ['en cours', 'annuler'])->default('en cours');
            
            // Clé primaire composée
            $table->primary(['identifiantMedecin', 'dateDebut', 'dateFin']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conges');
    }
}
