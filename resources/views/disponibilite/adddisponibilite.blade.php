@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | D&eacute;finir disponibilit&eacute;</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="main form-insert">
    <form action="" method="POST">
      @csrf
      <!-- Form Name -->
      <legend>D&eacute;finir une nouvelle disponibilit&eacute;</legend>
      <p class="text-danger">Tous les champs avec un ast&eacute;risque sont obligatoires</p>

      <div class="form-group">
        <label for="jourSemaine">Jour de la semaine :</label>
        <select class="form-control" id="jourSemaine" name="jourSemaine" required>
          <option value="dimanche">Dimanche</option>
          <option value="lundi">Lundi</option>
          <option value="mardi">Mardi</option>
          <option value="mercredi">Mercredi</option>
          <option value="jeudi">Jeudi</option>
          <option value="vendredi">Vendredi</option>
          <option value="samedi">Samedi</option>
        </select>
      </div>
      <div class="form-group">
        <label for="heureDebut">Heure de début :</label>
        <input type="time" class="form-control" id="heureDebut" name="heureDebut" required>
      </div>
      <div class="form-group">
        <label for="heureFin">Heure de fin :</label>
        <input type="time" class="form-control" id="heureFin" name="heureFin" required>
      </div>
      <div class="form-group">
        <label for="note">Note :</label>
        <textarea class="form-control" id="note" name="note" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="statut">Statut de la disponibilité :</label>
        <select class="form-control" id="statut" name="statut">
          <option value="disponible" selected>Disponible</option>
          <option value="indisponible">Indisponible</option>
        </select>
      </div>
      <div class="form-group">
        <div class="md-6">
          <button type="submit" class="btn btn-primary">Enregistrer la Disponibilité</button>
        </div>
      </div>
    </form>
    </form>
  </div>  
</main>
<!-- Fin Main --> 
@endSection