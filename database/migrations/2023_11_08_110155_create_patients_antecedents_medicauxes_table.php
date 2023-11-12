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
        Schema::create('patients_antecedents_medicauxes', function (Blueprint $table) {
            $table->unsignedInteger('identifiantPatient');
            $table->unsignedInteger('idAntecedentsMedicaux');
            $table->date('dateDiagnostics')->nullable();
            $table->text('description')->nullable();
            $table->primary(['identifiantPatient', 'idAntecedentsMedicaux']);
            $table->foreign('identifiantPatient')->references('idPatient')->on('patients');
            $table->foreign('idAntecedentsMedicaux')->references('idAntecedentsMedicaux')->on('antecedent_medicals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_antecedents_medicauxes');
    }
};
