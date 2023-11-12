@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Mettre &agrave; jour le profil du patient</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bread">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route("app.home") }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ route("patient.list") }}">Liste patient</a></li>
      <li class="breadcrumb-item active" aria-current="page">Mettre &agrave; jour le profil</li>
    </ol>
    <p>Aujourd'hui : {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

  </nav>
  <div class="main form-insert">

    <form class="form-horizontal form-add" method="POST" action="{{ route("patient.update", $patient->idPatient) }}">
      @csrf
      @method("PUT")
      {{-- @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif --}}
      <!-- Form Name -->
        <legend>Mettre &agrave; jour le profil du patient</legend>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
       
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nompatient">Nom <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="nompatient" name="nompatient" type="text" placeholder="nom du patient" class="form-control input-md" value="{{ $patient->nomPatient }}">
        @error('nompatient')
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror 
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenompatient">Pr&eacute;nom <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="prenompatient" name="prenompatient" type="text" placeholder="pr&eacute;nom du patient" class="form-control input-md" value="{{ $patient->prenomPatient }}">
        @error('prenompatient')
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
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
          <textarea class="form-control" id="adressePatient" name="adressePatient">{{ $patient->adressePatient }}</textarea>
          @error('adressePatient')
          <span class="text-danger fs-5">{{ $message }}</span>
          @enderror
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="courrielPatient">Courriel</label>  
        <div class="col-md-6">
        <input id="courrielPatient" value="{{ $patient->courrielPatient }}" name="courrielPatient" type="text" placeholder="adresse email" class="form-control input-md">
        @error('courrielPatient')
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="NumeroAssMalPatient">Num. Ass. M&eacute;d. <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="NumeroAssMalPatient" value="{{ $patient->NumeroAssMalPatient }}" name="NumeroAssMalPatient" type="text" placeholder="Numero Assurance Maladie" class="form-control input-md" >
        @error('NumeroAssMalPatient')
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
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
        <input id="dateNaissancePatient" value="{{ $patient->dateNaissancePatient }}" name="dateNaissancePatient" type="date" class="form-control input-md" >   
        @error('dateNaissancePatient')
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror       
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="telephonePatient">T&eacute;l&eacute;phone <span class="text-danger">*</span></label>  
        <div class="col-md-6">
        <input id="telephonePatient" name="telephonePatient" type="text" placeholder="Format : 5141112222" class="form-control input-md" value="{{ $patient->telephonePatient }}" >  
        @error('telephonePatient')
        <span class="text-danger fs-5">{{ $message }}</span>
        @enderror        
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="notedossier">Note</label>
        <div class="col-md-6">                     
          <textarea class="form-control" id="notedossier" name="notedossier">{{ $patient->noteDossier }}</textarea>
        </div>
      </div>
      
      <div class="form-group">
        <p class="col-md-6 control-label text-danger fs-5">(*) Tous les champs avec un ast&eacute;risque sont obligatoires</p>
      <!-- Button -->
      <div class="form-group">
       
        <div class="col-md-4">
          <button>Mettre &agrave; jour</button>
        </div>
      </div>
      
      </form>
  </div>
  
</main>
<!-- Fin Main --> 
@endSection