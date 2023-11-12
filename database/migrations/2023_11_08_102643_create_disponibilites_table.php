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
        Schema::create('disponibilites', function (Blueprint $table) {
            $table->unsignedInteger("identifiantMedecin");
            $table->foreign('identifiantMedecin')->references('idMedecin')->on('medecins')->onDelete('cascade');
            $table->enum("jourSemaine", ['dimanche','lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi']);
            $table->time('heureDebut');
            $table->time('heureFin');
            $table->primary(['identifiantMedecin', 'jourSemaine', 'heureDebut', 'heureFin']);
            $table->enum("statut", ['disponible','indisponible'])->default('disponible');
            $table->text("note")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilites');
    }
};
