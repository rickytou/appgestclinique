@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Enregistrer un patient</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="main form-insert">
    <form class="form-horizontal" method="POST" action="{{ route("patient.save") }}">
      @csrf
      <fieldset>      
      <!-- Form Name -->
        <legend>Enregistrer un nouveau patient</legend>
        <p class="text-danger">Tous les champs avec un ast&eacute;risque sont obligatoires</p>
     
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nompatient">Nom <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="nompatient" name="nompatient" type="text" placeholder="nom du patient" class="form-control input-md" required>
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenompatient">Pr&eacute;nom <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="prenompatient" name="prenompatient" type="text" placeholder="pr&eacute;nom du patient" class="form-control input-md" required>
          
        </div>
      </div>
      
      <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="sexePatient">Sexe</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="sexePatient-0">
            <input type="radio" name="sexePatient" id="sexePatient-0" value="m" checked="checked">
            Masculin
          </label> 
          <label class="radio-inline" for="sexePatient-1">
            <input type="radio" name="sexePatient" id="sexePatient-1" value="f">
            F&eacute;minin
          </label>
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="adressepatient">Adresse <span class="text-danger">*</span></label>
        <div class="col-md-6">                     
          <textarea class="form-control" id="adressepatient" name="adressepatient"></textarea>
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="courrielpatient">Courriel</label>  
        <div class="col-md-6">
        <input id="courrielpatient" name="courrielpatient" type="text" placeholder="adresse email" class="form-control input-md">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="numassmalpatient">Num. Ass. M&eacute;d. <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="numassmalpatient" name="numassmalpatient" type="text" placeholder="Numero Assurance Maladie" class="form-control input-md" required>
          
        </div>
      </div>
      
      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="groupsanguin">Groupe sanguin</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="groupsanguin-0">
            <input type="radio" name="groupsanguin" id="groupsanguin-0" value="A+" checked="checked">
            A+
          </label>
        </div>
        <div class="radio">
          <label for="groupsanguin-1">
            <input type="radio" name="groupsanguin" id="groupsanguin-1" value="A-">
            A-
          </label>
        </div>
        <div class="radio">
          <label for="groupsanguin-2">
            <input type="radio" name="groupsanguin" id="groupsanguin-2" value="B+">
            B+
          </label>
        </div>
        <div class="radio">
          <label for="groupsanguin-3">
            <input type="radio" name="groupsanguin" id="groupsanguin-3" value="B-">
            B-
          </label>
        </div>
        <div class="radio">
          <label for="groupsanguin-4">
            <input type="radio" name="groupsanguin" id="groupsanguin-4" value="O+">
            O+
          </label>
        </div>
        <div class="radio">
          <label for="groupsanguin-5">
            <input type="radio" name="groupsanguin" id="groupsanguin-5" value="O-">
            O-
          </label>
        </div>
        <div class="radio">
          <label for="groupsanguin-6">
            <input type="radio" name="groupsanguin" id="groupsanguin-6" value="AB+">
            AB+
          </label>
        </div>
        <div class="radio">
          <label for="groupsanguin-7">
            <input type="radio" name="groupsanguin" id="groupsanguin-7" value="AB-">
            AB-
          </label>
        </div>
        </div>
      </div>

       <!-- Text input-->
       <div class="form-group">
        <label class="col-md-4 control-label" for="dateNaissancePatient">Date naissance <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="dateNaissancePatient" name="dateNaissancePatient" type="date" class="form-control input-md" required>          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="telephonepatient">T&eacute;l&eacute;phone <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="telephonepatient" name="telephonepatient" type="text" placeholder="Format : 514-1112222" class="form-control input-md" required>          
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="notedossier">Note</label>
        <div class="col-md-6">                     
          <textarea class="form-control" id="notedossier" name="notedossier"></textarea>
        </div>
      </div>
      
      <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="statutPatient">Statut</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="statutPatient-0">
            <input type="radio" name="statutPatient" id="statutPatient-0" value="actif" checked="checked">
            actif
          </label> 
          <label class="radio-inline" for="statutPatient-1">
            <input type="radio" name="statutPatient" id="statutPatient-1" value="inactif">
            inactif
          </label> 
          <label class="radio-inline" for="statutPatient-2">
            <input type="radio" name="statutPatient" id="statutPatient-2" value="en attente">
            en attente
          </label>
        </div>
      </div>
      
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
          <button class="btn btn-primary">Enregistrer un patient</button>
        </div>
      </div>
      
      </fieldset>
      </form>
  </div>
  
</main>
<!-- Fin Main --> 
@endSection