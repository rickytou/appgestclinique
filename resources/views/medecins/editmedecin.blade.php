@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Mettre &agrave; jour le profil du m&eacute;decin</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bread">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route("app.home") }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ route("medecin.listmedecin") }}">Liste m&eacute;decin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Mettre &agrave; jour le profil du m&eacute;decin</li>
    </ol>
    <p>Aujourd'hui : {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

  </nav>
  <div class="main form-insert">
  <form class="form-horizontal form-add" method="POST" action="{{ route('medecin.updatemedecin', $medecin->idMedecin) }}">
    @csrf
    @method("PUT")
      <!-- Form Name -->
        <legend>Mettre &agrave; jour le profil du m&eacute;decin</legend>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
             <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nomMedecin">Nom <span class="text-danger">*</span></label> 
        <div class="col-md-6">
        <input id="nomMedecin" name="nomMedecin" type="text" value="{{ $medecin->nomMedecin }}" placeholder="nom du m&eacute;decin" class="form-control input-md" >
        @error("nomMedecin")
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenomMedecin">Pr&eacute;nom <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="prenomMedecin" name="prenomMedecin" value="{{ $medecin->prenomMedecin }}"  type="text" placeholder="pr&eacute;nom du m&eacute;decin" class="form-control input-md" >
        @error("prenomMedecin")
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="courrielMedecin">Courriel <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="courrielMedecin" name="courrielMedecin" value="{{ $medecin->courrielMedecin }}" type="text" placeholder="adresse email" class="form-control input-md" >
        @error("courrielMedecin")
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="adresseMedecin">Adresse <span class="text-danger">*</span></label>
        <div class="col-md-6">                     
          <textarea class="form-control" id="adresseMedecin" name="adresseMedecin">{{ $medecin->adresseMedecin }} </textarea>
          @error("adresseMedecin")
          <span class="text-danger fs-5">{{ $message }}</span>
          @enderror
        </div>
      </div>     
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="numeroLicence">Num&eacute;ro de licence <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="numeroLicence" value="{{ $medecin->numeroLicence }}"  name="numeroLicence" type="text" placeholder="Num&eacute;ro de licence" class="form-control input-md" >
        @error("numeroLicence")
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="telephoneMedecin">T&eacute;l&eacute;phone<span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="telephoneMedecin" value="{{ $medecin->telephoneMedecin }}"  name="telephoneMedecin" type="text" placeholder="Format : 5141112222" class="form-control input-md">
        @error("telephoneMedecin")
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
        </div>
      </div>
      
       <!-- Text input [AffiliationsProfessionnelles]-->
       <div class="form-group">
        <label class="col-md-4 control-label" for="affiliationsProfessionnelles">Affiliations professionnelles</label>  
        <div class="col-md-6">
        <input id="affiliationsProfessionnelles" value="{{ $medecin->affiliationsProfessionnelles }}"  name="affiliationsProfessionnelles" type="text" placeholder="ordre agr&eacute;&eacute;" class="form-control input-md">
          
        </div>
      </div>

      <!-- Textarea [Adresse]-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="titresAcademiques">Titre acad&eacute;miques <span class="text-danger">*</span></label>
        <div class="col-md-6"> 
         <textarea class="form-control" name="titresAcademiques" id="titresAcademiques">{{ $medecin->titresAcademiques }}</textarea>
         @error("titresAcademiques")
         <span class="text-danger fs-5">{{ $message }}</span>
         @enderror
        </div>
      </div>
      
    
      <div class="form-group">
        <div class="col-md-6">
          <p class="text-danger">Tous les champs avec un ast&eacute;risque sont obligatoires</p>
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <div class="col-md-4">
          <input type="hidden" name="idMedecin" value="{{ $medecin->idMedecin }}">
          <button>Mettre &agrave; jour le profil </button>
        </div>
      </div>
      </form>
  </div>  
</main>
<!-- Fin Main --> 
@endSection