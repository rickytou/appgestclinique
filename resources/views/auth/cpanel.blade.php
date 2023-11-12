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
  <title>Clinique Jeannot Cadet | Dashboard</title>
</head>
<body>
  <div class="cpanel-wrapper">
    <header>
      <div class="header">
        <div class="logo">
          
          <a href="{{url('/')}}">
            <img src="{{url('assets/images/logo-clinique-jeannot-cadet.png')}}" alt="logo Clinique Jeannot Cadet">
          </a>
          <h1>
             <span>Clinique Jeannot Cadet</span>
             <span class="dashboard">Dashboard</span>            
        </h1>
      </div>
      </div>
    </header>
    <main class="cpanel">
      <div class="cpanel-title">
        <span>Dashboard</span>
      </div>
      
        <form class="connexion-utilisateur" method="POST" action="{{ route('auth.handlelogin') }}">
          @if(session("error"))
          <div class="form-group">
            <p class="alert alert-danger">{{ session("error") }}</p>
          </div>
          @endif
          <!-- Tout type erreur de validation -->
          @if ($errors->any())

      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
          @csrf
          <div class="form-group">
            <label for="email">Adresse email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Votre adresse email" >
            </div>
          <div class="form-group">
            <label for="motdepasse">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
          </div>
          <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </main>
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