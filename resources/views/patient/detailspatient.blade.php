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
      <li class="breadcrumb-item" aria-current="page">Patient</li>
      <li class="breadcrumb-item" aria-current="page"><a href="{{ route("patient.list") }}">Liste</a></li>
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
                <img class="imgpatient" src="{{ strtolower($findPatient->sexePatient) == "m" ? '/assets/images/homme.png' : '/assets/images/femme.jpeg' }}" alt="photo patient">
              </div>
              <div class="detailsprofiltop-info">
                <h2>{{ $findPatient->nomPatient . " ".$findPatient->prenomPatient }}</h2>
                <p class="detailsprofiltop-info-details">
                  <span class="fa-solid fa-location-dot"></span>
                  {{ $findPatient->adressePatient }}
                </p>
                <p class="detailsprofiltop-info-details">
                  <span class="fa-solid fa-envelope"></span>
                  <strong>
                    {{ $findPatient->courrielPatient }}
                  </strong>
                </p>
                <p class="detailsprofiltop-info-details">
                  <span class="fa-solid fa-phone"></span>
                  <span>{{ $findPatient->telephonePatient }}</span>
                </p>
                <p class="detailsprofiltop-info-details">
                  <span>Sexe : </span>
                  <span>{{ strtoupper($findPatient->sexePatient) }}</span>
                </p>
                <p class="detailsprofiltop-info-details">
                  <span>Groupe sanguin : </span>
                  <span>{{ strtoupper($findPatient->groupSanguin) }}</span>
                </p>
                
              </div>
              <div class="detailsprofiltop-moreinfo">
                <p class="nam">Num&eacute;ro Assurance Maladie : {{ strtoupper($findPatient->NumeroAssMalPatient) }}</p>
                <p class="numdossier">Num&eacute;ro Dossier : {{ strtoupper($findPatient->numeroDossier) }}</p>
                <p>Compte cr&eacute;&eacute; : {{ \Carbon\Carbon::parse($findPatient->created_at)->format('d-m-Y') }}</p>
                <p>Derni&egrave;res mises &agrave; jour : {{ \Carbon\Carbon::parse($findPatient->updated_at)->format('d-m-Y') }}</p>
              </div>
            </div>
            <!-- BOTTOM -->
            <div class="detailsprofilbottom">
              <!-- Antecedent Medical -->
              <div class="detailsprofilbottomMore">
                <h3>Autres renseignements</h3>
                <div class="detailsprofilbottomMoreAntecedentsMedicaux">
                  <p>
                    <span class="fa-regular fa-calendar-check"></span>
                    <strong>Ant&eacute;dent m&eacute;dical</strong>
                  </p>
                  <table class="table app-table-hover mb-0 text-left">
                    <thead>
                      <tr>
                        <th class="cell">Type maladie</th>
                        <th class="cell">Description</th>
                        <th class="cell">Date du diagnostic</th>
                      </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                  </table>
                </div>

                <!-- #1 -->
                {{-- <div class="detailsprofilbottomMoredetails">
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
                </div> --}}
              </div>
               <!-- Antecedent Medical -->
               <div class="detailsprofilbottomMore">
                <div class="detailsprofilbottomMoreAntecedentsMedicaux">
                  <p>
                    <span class="fa-regular fa-calendar-check"></span>
                    <strong>R&eacute;cents rendez-vous</strong>
                  </p>
                  <table class="table app-table-hover mb-0 text-left">
                    <thead>
                      <tr>
                        <th class="cell">M&eacute;decin</th>
                        <th class="cell">Date</th>
                        <th class="cell">Heure</th>
                        <th class="cell">Statut</th>
                      </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                  </table>
                </div>  
              </div>
            </div>
          </div>
         
      
    </div><!--//container-fluid-->
  </div>
  
</main>


<!-- Fin Main --> 
@endSection