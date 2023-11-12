@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Lister m&eacute;decin</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main class="list-view-details">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bread">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route("app.home") }}">Dashboard</a></li>
      <li class="breadcrumb-item" aria-current="page">M&eacute;decin</li>
      <li class="breadcrumb-item" aria-current="page"><a href="{{ route("medecin.listmedecin") }}">Liste</a></li>
      <li class="breadcrumb-item active" aria-current="page">D&eacute;tails</li>
    </ol>
    <p>Aujourd'hui : {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

  </nav>
  <div class="main list-view">
  
    <div class="container-xl ">
			    <div class="detailsprofilapp">
            <!-- TOP -->
            <div class="detailsprofiltop">
              <div class="detailsprofiltop-img">
                <img src="{{ Storage::url($findMedecin->photo) }}" alt="">
              </div>
              <div class="detailsprofiltop-info">
                <h2>Dr. {{ $findMedecin->nomMedecin . " ".$findMedecin->prenomMedecin }}</h2>
                <p class="detailsprofiltop-info-details">
                  <span class="fa-solid fa-location-dot"></span>
                  {{ $findMedecin->adresseMedecin }}
                </p>
                <p class="detailsprofiltop-info-details">
                  <span class="fa-solid fa-envelope"></span>
                  <strong>
                    {{ $findMedecin->courrielMedecin }}
                  </strong>
                </p>
                <p class="detailsprofiltop-info-details">
                  <span class="fa-solid fa-phone"></span>
                  <span>{{ $findMedecin->telephoneMedecin }}</span>
                </p>
                
              </div>
              <div class="detailsprofiltop-moreinfo">
                <p>Num&eacute;ro Licence : {{ strtoupper($findMedecin->numeroLicence) }}</p>
              </div>
            </div>
            <!-- BOTTOM -->
            <div class="detailsprofilbottom">
              <div class="detailsprofilbottomMore">
                <h3>Autres renseignements</h3>
                <!-- #1 -->
                <div class="detailsprofilbottomMoredetails">
                  <p class="detailsprofilbottomspecialite">
                    <strong>Sp&eacute;cialit&eacute;</span>
                  </p>
                  
                  <p class="detailsprofilbottomspecialitetitle"> {{ $findMedecin->specialite }}
                  </p>  

                </div>
                <!-- #2 -->
                <div class="detailsprofilbottomMoredetails">
                  <p class="detailsprofilbottomspecialite">
                    <strong>Titres Acad&eacute;miques</span>
                  </p>
                  
                  <p class="detailsprofilbottomspecialitetitle"> {{ $findMedecin->titresAcademiques }}
                  </p>  

                </div>

                <!-- #3 -->
                <div class="detailsprofilbottomMoredetails">
                  <p class="detailsprofilbottomspecialite">
                    <strong>Affiliations Professionnelles</span>
                  </p>
                  
                  <p class="detailsprofilbottomspecialitetitle"> {{ $findMedecin->affiliationsProfessionnelles }}
                  </p>
                </div>

                 <!-- #4 -->
                 <div class="detailsprofilbottomMoredetails">
                  <p class="detailsprofilbottomspecialite">
                    <strong>Date d'enregistrement</span>
                  </p>
                  
                  <p class="detailsprofilbottomspecialitetitle"> {{
                  date('d F Y', strtotime($findMedecin->created_at))  }}
                  </p>
                </div>

                <!-- #5 -->
                <div class="detailsprofilbottomMoredetails">
                  <p class="detailsprofilbottomspecialite">
                    <strong>Derni&egrave;re mise &agrave; jour</span>
                  </p>
                  
                  <p class="detailsprofilbottomspecialitetitle"> {{ date('d F Y', strtotime($findMedecin->updated_at))  }}
                  </p>
                </div>
              </div>
            </div>
          </div>
         
      
    </div><!--//container-fluid-->
  </div>
  
</main>


<!-- Fin Main --> 
@endSection