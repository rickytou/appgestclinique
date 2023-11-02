@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Prendre cong&eacute;</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="main form-insert">
    <form action="" method="POST">
      @csrf
      <!-- Form Name -->
      <legend>Prendre un nouveau cong&eacute;</legend>
      <p class="text-danger">Tous les champs avec un ast&eacute;risque sont obligatoires</p>

      <div class="form-group">
        <label class="col-md-4 control-label" for="dateDebut">Date de début <span class="text-danger">*</span></label>
        <div class="col-md-6">
          <input type="date" class="form-control" id="dateDebut" name="dateDebut" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="dateFin">Date de fin <span class="text-danger">*</span></label>
        <div class="col-md-6">
          <input type="date" class="form-control" id="dateFin" name="dateFin" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="motifConge">Motif du congé <span class="text-danger">*</span></label>
        <div class="col-md-6">
        <textarea class="form-control" id="motifConge" name="motifConge" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="note">Note </label>
        <div class="col-md-6">
        <textarea class="form-control" id="note" name="note"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="statutConge">Statut du congé :</label>
        <div class="col-md-6">
        <select class="form-control" id="statutConge" name="statutConge">
          <option value="en cours" selected>En cours</option>
          <option value="annuler">Annuler</option>
        </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Enregistrer Congé</button>
        </div>
      </div>
    </form>
  </div>  
</main>
<!-- Fin Main --> 
@endSection