@extends('layout.layoutbackend')
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="main">
    <h1>Formulaire d'Inscription du Patient</h1>

    <form class="form-horizontal" method="POST" action="{{url('patient/savepatient')}}">
      @csrf
      <fieldset>      
      <!-- Form Name -->
        <legend>Enregistrer un patient</legend>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nompatient">Nom</label>  
        <div class="col-md-6">
        <input id="nompatient" name="nompatient" type="text" placeholder="nom du patient" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenompatient">Prenom</label>  
        <div class="col-md-6">
        <input id="prenompatient" name="prenompatient" type="text" placeholder="prenom du patient" class="form-control input-md" required="">
          
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
            Feminin
          </label>
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="adressepatient">Adresse</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="adressepatient" name="adressepatient"></textarea>
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="courrielpatient">Courriel</label>  
        <div class="col-md-6">
        <input id="courrielpatient" name="courrielpatient" type="text" placeholder="adresse email" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="numassmalpatient">NAM</label>  
        <div class="col-md-6">
        <input id="numassmalpatient" name="numassmalpatient" type="text" placeholder="Numero Assurance Maladie" class="form-control input-md" required="">
          
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
        <label class="col-md-4 control-label" for="telephonepatient">Telephone</label>  
        <div class="col-md-6">
        <input id="telephonepatient" name="telephonepatient" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="notedossier">Note</label>
        <div class="col-md-4">                     
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
          <button id="" name="" class="btn btn-primary">Enregistrer un patient</button>
        </div>
      </div>
      
      </fieldset>
      </form>
  </div>
  
</main>
<!-- Fin Main --> 
@endSection