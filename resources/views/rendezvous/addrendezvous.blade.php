@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | C&eacute;duler un rendez-vous</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="main form-insert">
      <form>
        <legend>C&eacute;duler un rendez-vous</legend>
        <p class="text-danger">Tous les champs avec un ast&eacute;risque sont obligatoires</p>
        <div class="form-group">
          <!-- Numero dossier du patient -->
          <label class="col-md-4 control-label" for="numeroDossier">Num&eacute;ro dossier du patient <span class="text-danger">*</span></label>
          <div class="col-md-6">   
            <input type="text" class="form-control" placeholder="numero dossier du patient" id="numeroDossier" name="numeroDossier" required>
          </div>
        </div>
        <!-- Numero Assurance Maladie du patient -->
        <div class="form-group">
          <label class="col-md-4 control-label">Num. Ass. M&eacute;d.</label>
          <div class="col-md-6">   
          <input type="text" readonly class="form-control">
          </div>
        </div>
        <!-- Nom et Prenom du patient -->
        <div class="form-group">
          <label class="col-md-4 control-label">Nom et Pr&eacute;nom du patient</label>
          <div class="col-md-6">   
          <input type="text" readonly class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="idMedecin">M&eacute;decin <span class="text-danger">*</span></label>
          <div class="col-md-6">   
          <select class="form-control" id="idMedecin" required>
            <!-- Vous pouvez remplir les options avec les valeurs de la table Medecin -->
            <option value="">Sélectionnez le médecin</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <!-- etc. -->
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="dateRendezVous">Date du rendez-vous <span class="text-danger">*</span></label>
          <div class="col-md-6">   
          <input type="date" class="form-control" id="dateRendezVous" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="heureRendezVous">Disponibilit&eacute; du m&eacute;decin <span class="text-danger">*</span></label>
          <div class="col-md-4">   
          <select class="form-control" id="heureRendezVous" name="heureRendezVous" required>
            <!-- Vous pouvez remplir les options avec les valeurs de la table Medecin -->
            <option value="">Sélectionnez un cr&eacute;neau horaire</option>
            <option value="">1</option>
            <option value="">2</option>
            <!-- etc. -->
          </select>
          </div>
        </div>
        <!-- Statut du rendez-vous -->
        <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="statutRendezVous">Statut</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="statutRendezVous-0">
            <input type="radio" name="statutRendezVous" id="statutRendezVous-0" value="Planifier" checked="checked">
            actif
          </label> 
          <label class="radio-inline" for="statutRendezVous-1">
            <input type="radio" name="statutRendezVous" id="statutRendezVous-1" value="Annuler">
            inactif
          </label> 
          <label class="radio-inline" for="statutRendezVous-2">
            <input type="radio" name="statutRendezVous" id="statutRendezVous-2" value="Terminer">
            en arret
          </label>
        </div>
      </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="motifRendezVous">Motif du rendezVous <span class="text-danger">*</span></label>
          <div class="col-md-6">   
          <textarea class="form-control" id="motifRendezVous" required></textarea>
          </div>
        </div>
        <!-- Les champs dateCreation et dateMisesAJour peuvent être générés automatiquement par le système -->
        <div class="form-group">
          <label for="noteRendezVous">Laisser une note</label>
          <div class="col-md-6">   
          <textarea class="form-control" id="noteRendezVous" name="noteRendezVous"></textarea>
          </div>  
        </div>
    
        <!-- Vous pouvez ajouter d'autres champs si vous le souhaitez -->
         <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Enregistrer rendez-vous</button>
        </div>
      </div>  
      </form>
  </div>
  
</main>
<!-- Fin Main --> 
@endSection