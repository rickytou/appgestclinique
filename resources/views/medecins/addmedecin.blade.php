@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Enregistrer un medecin</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="main form-insert">
    <form class="form-horizontal" method="POST" action="{{route('medecin.save')}}">
      @csrf
      <!-- Form Name -->
        <legend>Enregistrer un nouveau m&eacute;decin</legend>
        <p class="text-danger">Tous les champs avec un ast&eacute;risque sont obligatoires</p>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nommedecin">Nom <span class="text-danger">*</span></label> 
        <div class="col-md-6">
        <input id="nompmedecin" name="nommedecin" type="text" placeholder="nom du m&eacute;decin" class="form-control input-md" required>
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenommedecin">Pr&eacute;nom <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="prenommedecin" name="prenommedecin" type="text" placeholder="pr&eacute;nom du m&eacute;decin" class="form-control input-md" required>
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="courrielmedecin">Courriel <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="courrielmedecin" name="courrielmedecin" type="text" placeholder="adresse email" class="form-control input-md" required>
          
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="adressemedecin">Adresse <span class="text-danger">*</span></label>
        <div class="col-md-6">                     
          <textarea class="form-control" id="adressemedecin" name="adressemedecin"></textarea>
        </div>
      </div>
      
      
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="numeroLicence">Nu&eacute; de licence <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="numeroLicence" name="numeroLicence" type="text" placeholder="Num&eacute;ro de licence" class="form-control input-md" required>
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="telephonemedecin">T&eacute;l&eacute;phone<span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="telephonemedecin" name="telephonemedecin" type="text" placeholder="Format : 514-1112222" class="form-control input-md">
          
        </div>
      </div>
      
       <!-- Text input [AffiliationsProfessionnelles]-->
       <div class="form-group">
        <label class="col-md-4 control-label" for="affiliationsProfessionnelles">Affiliations professionnelles</label>  
        <div class="col-md-6">
        <input id="affiliationsProfessionnelles" name="affiliationsProfessionnelles" type="text" placeholder="ordre agr&eacute;&eacute;" class="form-control input-md">
          
        </div>
      </div>

       <!-- Input File [Photo] -->
       <div class="form-group">
        <label class="col-md-4 control-label" for="photo">T&eacute;l&eacute;charger votre photo <span class="text-danger">*</span></label>
        <div class="col-md-6">                     
          <input type="file" class="form-control" id="photo" name="photo">
        </div>
      </div>



      <!-- Textarea [Adresse]-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="titreAcademiques">Titre acad&eacute;miques <span class="text-danger">*</span></label>
        <div class="col-md-6">                     
          <textarea class="form-control" id="titreAcademiques" name="titreAcademiques"></textarea>
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
            en arret
          </label>
        </div>
      </div>
      
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
          <button class="btn btn-primary">Enregistrer un medecin</button>
        </div>
      </div>
      </form>
  </div>  
</main>
<!-- Fin Main --> 
@endSection