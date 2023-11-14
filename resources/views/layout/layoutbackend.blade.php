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
 @yield('title')
</head>
<body>
  <div class="wrapper">
    <!-- Header -->
    <header>
      <!-- Header Center -->
      <div class="header">
        <!-- Logo -->
        <div class="logo">
          
            <a href="{{url('/')}}">
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
              {{-- <img src="{{url('assets/images/avatar.png')}}" alt="profil de l'utilisateur"> --}}
              <span class="fa-regular fa-user"></span>
            </p>
            <!-- Fin Photo Login Connected -->
            <!-- Nom user connected -->
            <div class="account-login-username">
              <strong>{{ Auth::user()->name }}</strong>
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
   @yield('content')
  <footer>
    <div class="footer">
      <p>Copyright &copy; 2023. Tous droits r&eacute;serv&eacutes | Ricardo Samedi </p>  
    </div>  
  </footer>  
    
  </div>
  <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src={{ asset('js/appbackend.js') }}></script>
</body>
</html>