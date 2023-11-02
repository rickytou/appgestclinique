<!-- Debut navigation Header Backend -->
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
    <p class="dashboardIcon active">
      <a href="{{route('admin.show')}}" class="fa-solid fa-gauge-high"></a>
      <a href="{{route('admin.show')}}">Dashboard</a>
    </p>
    <!-- Fin Logo Dashboard -->
    <!-- Menu Admin -->
    <ul class="menu">
      <li class="menu-list-item">
        <span class="fa-solid fa-laptop-medical"></span>
        <a href="#">Patient</a>
        <span class="fa-solid fa-chevron-down arrow-down"></span>
        <ul class="menu-list-item-sub-menu">
          <li>
            <span class="fa-solid fa-circle-plus"></span>
            <a href="{{route('patient.show')}}">Ajouter un patient</a>
          </li>
          <li>
            <span class="fa-solid fa-circle-plus"></span>
            <a href="{{route('patient.show')}}">Ant&eacute;c&eacute;dent m&eacute;dical</a>
          </li>
          <li>
            <span class="fa-solid fa-list"></span>
            <a href="#">Liste patient</a>
          </li>
          <div class="menu-login-bloc-design"></div>
        </ul>
     </li>
     <li class="menu-list-item">
        <span class="fa-solid fa-stethoscope"></span>
        <a href="#">M&eacute;decin</a>
        <span class="fa-solid fa-chevron-down arrow-down"></span>
        <ul class="menu-list-item-sub-menu">
          <li>
            <span class="fa-solid fa-circle-plus"></span>
            <a href="/medecin/ajoutermedecin">Ajouter un m&eacute;decin</a>
          </li>
          <li>
            <span class="fa-solid fa-toggle-on"></span>
            <a href="{{ route("disponibilite.show") }}">Ajouter disponibilit&eacute;</a>
          </li>
          <li>
            <span class="fa-solid fa-stopwatch"></span>
            <a href="{{ route("conge.show") }}">Prendre cong&eacute;</a>
          </li>
          <li>
            <span class="fa-solid fa-list"></span>       
            <a href="#">Voir disponibilite</a>
          </li>
          <li>
            <span class="fa-solid fa-list"></span> 
            <a href="#">Liste cong&eacute;</a>
          </li>
          <div class="menu-login-bloc-design"></div>
        </ul>
     </li>
     <li class="menu-list-item">
        <span class="fa-regular fa-calendar-check"></span>
        <a href="#">Rendez-vous</a>
        <span class="fa-solid fa-chevron-down arrow-down"></span>
        <ul class="menu-list-item-sub-menu">
          <li>
            <span class="fa-solid fa-circle-plus"></span>
            <a href="{{ route("rendezvous.show") }}">C&eacute;duler rendez-vous</a>
          </li>
          <li>
            <span class="fa-solid fa-list"></span>
            <a href="#">Liste rendez-vous</a>
          </li>
          <div class="menu-login-bloc-design"></div>
        </ul>
     </li>
     <li class="menu-list-item">
        <span class="fa-solid fa-eye"></span>
        <a href="#">Visites</a>
        <span class="fa-solid fa-chevron-down arrow-down"></span>
     </li>
    </ul>
    <!-- Fin Menu Admin -->
  </div>
</nav>
<!-- Fin navigation Header Backend -->