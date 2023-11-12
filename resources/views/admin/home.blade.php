@extends('layout.layoutbackend')
@section('content')
@include('includes.header-backend')
<main>
  <div class="main">

        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bread">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route("app.home") }}">Accueil</a></li>
          </ol>
          <p>Aujourd'hui : {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

        </nav>

  <!-- Jumbotron -->
<div class="hero-unit">
  <h1>Application gestion de clinique</h1>
  <p>Prise en charge du dossier de patient, planification de la disponibilit&eacute des m&eacute;decins et gestion des rendez-vous des patients. </p>
  <span class="fa-solid fa-hospital"></span>
</div>
<!-- Fin Jumbotron -->
  </div>

  <!-- Resume -->
  <div class="resume">
    <div class="resume-group">
      <!-- Bloc 1 -->
      <div class="resume-group-bloc">
        <span class="fa-solid fa-hospital-user"></span>
        <b>Patients</b>
        <span>{{ $allpatients }}</span>
      </div>
      <!-- Fin bloc 1 -->

       <!-- Bloc 2 -->
       <div class="resume-group-bloc">
        <span class="fa-solid fa-stethoscope"></span>
        <b>Medecins</b>
        <span>{{ $allmedecins }}</span>
      </div>
      <!-- Fin bloc 2 -->


       <!-- Bloc 3 -->
       <div class="resume-group-bloc">
        <span class="fa-regular fa-calendar-check"></span>
        <b>Rendez-vous</b>
        <span>0</span>
      </div>
      <!-- Fin bloc 3 -->


       <!-- Bloc 4 -->
       <div class="resume-group-bloc">
        <span class="fa-solid fa-eye"></span>
        <b>Consultations</b>
        <span>0</span>
      </div>
      <!-- Fin bloc 4 -->
    </div>

  </div>

  <div class="mainlist">
    <div class="mainlist-center">
      <!-- Mainlist-center-left -->
      <div class="mainlist-center-left">
        <span class="mainlist-center-title">Medecins disponibles</span>  

        <!-- Medecin 1 -->
        @forelse($listmedecins as $medecin) 
        <div class="account-login listMedecin">
          <!-- Photo login connected -->
          <p class="account-login-profil">
            <img src="{{ Storage::url($medecin->photo) }}" alt="profil du medecin {{ $medecin->nomMedecin }}">
          </p>
          <!-- Fin Photo Login Connected -->
          <!-- Nom user connected -->
          <div class="account-login-username">
            <strong>Dr. {{ $medecin->nomMedecin}}</strong>
            <p>
              <span>{{ $medecin->specialite }}</span>
            </p>
          </div>
          <!-- Fin Nom user connected -->
        </div>  
        <!-- Fin Medecin 1 -->  
       @empty 
       <p>Aucun m&eacute;decin disponible</p>

        @endforelse
      </div>
      <!-- Fin MainList-center-left -->
      <!-- Mainlist-center-left -->
      <div class="mainlist-center-right">
        <span class="mainlist-center-title">Nos r&eacute;cents rendez-vous</span>
        <table>
          <thead>
            <tr>
              <th>Patient</th>
              <th>Medecin</th>
              <th>Date</th>
              <th>Heure</th>
              <th>T&eacute;l&eacute;phone</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr> <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr> <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr> <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>Dr Chang.</td>
              <td>22 dec 2023 </td>
              <td>10:30 AM</td>
              <td>438-9001245</td>
            </tr>
          </tbody>            
        </table>
      </div>
      <!-- Fin MainList-center-right -->
    </div>
  </div>
  
</main>
<!-- Fin Main --> 
@endSection