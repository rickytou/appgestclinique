@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Ant&eacute;c&eacute;dent Medical</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bread">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route("app.home") }}">Dashboard</a></li>
      <li class="breadcrumb-item" aria-current="page">Patient</li>
      <li class="breadcrumb-item active" aria-current="page">Vos ant&eacute;c&eacute;dents m&eacute;dicaux</li>
    </ol>
    <p>Aujourd'hui : {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

  </nav>
  <div class="main form-insert">

    <form class="form-horizontal form-add" method="post" action="{{ route("patient.save") }}">
      @csrf
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
        <legend>Vos ant&eacute;c&eacute;dents m&eacute;dicaux</legend>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
       
     
      
      <div class="form-group">
        <p class="col-md-6 control-label text-danger fs-5">(*) Tous les champs avec un ast&eacute;risque sont obligatoires</p>
      <!-- Button -->
      <div class="form-group">
       
        <div class="col-md-4">
          <button>Enregistrer un patient</button>
        </div>
      </div>
      
      </form>
  </div>
  
</main>
<!-- Fin Main --> 
@endSection