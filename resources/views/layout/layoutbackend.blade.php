<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" /> --}}
  @vite(['resources/scss/backend.scss', 'resources/js/appbackend.js'])
  <title>Clinique Jeannot Cadet | Administration</title>
</head>
<body>
  <div class="wrapper">
    <!-- Header -->
    <header>
      <!-- Header Center -->
      <div class="header">
        <!-- Logo -->
        <div class="logo">
          
            <a href="#">
              <img src="{{url('assets/images/logo-clinique-jeannot-cadet.png')}}" alt="logo Clinique Jeannot Cadet">
            </a>
            <h1>
               <span>Clinique Jeannot Cadet</span>
               <span class="dashboard">Dashboard</span>            
          </h1>
        </div>
        <!-- Fin Logo -->
        <!-- Account connected -->
        <div>
          <div class="account-login">
            <!-- Photo login connected -->
            <p class="account-login-profil">
              <img src="{{url('assets/images/avatar.png')}}" alt="profil de l'utilisateur">
            </p>
            <!-- Fin Photo Login Connected -->
            <!-- Nom user connected -->
            <div class="account-login-username">
              <strong>Dr. Cadet</strong>
              <p>
                <span>connect&eacute;</span>
                <span class="fa-solid fa-chevron-down"></span>
              </p>
            </div>
            <!-- Fin Nom user connected -->
          </div>
        </div>
        <!-- Fin Account connected -->
      </div>
      <!-- Fin Header Center -->
    </header>
    <!-- Fin Header -->
    <!-- Navigation -->
    <nav>
      <div class="nav">
        <!-- Menu Login -->
        <ul class="menu-login">
          <li>
            <span class="fa-regular fa-circle-user"></span>
            <a href="#">Profil</a>
          </li>
          <li>
            <span class="fa-solid fa-right-from-bracket"></span>
            <a href="#">Logout</a>
          </li>
          <div class="menu-login-bloc-design"></div>
        </ul>       
        <!-- Fin Menu Login -->
        <!-- Logo Dashboard -->
        <p class="dashboardIcon">
          <span class="fa-solid fa-gauge-high"></span>
          <a href="#">Dashboard</a>
        </p>
        <!-- Fin Logo Dashboard -->
        <!-- Menu Admin -->
        <ul class="menu">
          <li class="menu-list-item">
            <span class="fa-solid fa-laptop-medical"></span>
            <a href="#">Patient</a>
         </li>
         <li class="menu-list-item">
            <span class="fa-solid fa-stethoscope"></span>
            <a href="#">M&eacute;decin</a>
         </li>
         <li class="menu-list-item">
            <span class="fa-regular fa-calendar-check"></span>
            <a href="#">Rendez-vous</a>
         </li>
         <li class="menu-list-item">
            <span class="fa-solid fa-eye"></span>
            <a href="#">Consultation</a>
         </li>
        </ul>
        <!-- Fin Menu Admin -->
      </div>
    </nav>
    <!-- Fin Navigation -->
    <main>
      <div class="main">
          <div class="breadcrumb">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, doloribus!</p>
            <span>22 Octobre 2023</span>
          </div>
      <!-- Jumbotron -->
    <div class="hero-unit">
      <h1>Application de gestion de clinique</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus!</p>
      <span class="fa-solid fa-hospital"></span>
    </div>
    <!-- Fin Jumbotron -->
      </div>

      <!-- Resume -->
      <div class="resume">
        <div class="resume-group">
          <!-- Bloc 1 -->
          <div class="resume-group-bloc">
            <span></span>
            <b>Medecins</b>
            <span>3,973</span>
          </div>
          <!-- Fin bloc 1 -->
        </div>

      </div>

    </main>
    
    
  </div>
  <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src={{ asset('js/appbackend.js') }}></script>
</body>
</html>