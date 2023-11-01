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
      <span class="fa-solid fa-gauge-high"></span>
      <a href="#">Dashboard</a>
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
            <a href="{{url('patient/adminpatient')}}">Ajouter un patient</a>
          </li>
          <li>
            <span class="fa-solid fa-rectangle-list"></span>
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
            <a href="#">Ajouter disponibilit&eacute;</a>
          </li>
          <li>
            <span class="fa-solid fa-rectangle-list"></span>
            <a href="#">Demander cong&eacute;</a>
          </li>
          <li>
            <span class="fa-solid fa-rectangle-list"></span>
            <a href="#">Voir disponibilite</a>
          </li>
          <li>
            <span class="fa-solid fa-rectangle-list"></span>
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
            <a href="#">C&eacute;duler rendez-vous</a>
          </li>
          <li>
            <span class="fa-solid fa-rectangle-list"></span>
            <a href="#">Liste rendez-vous</a>
          </li>
          <div class="menu-login-bloc-design"></div>
        </ul>
     </li>
     <li class="menu-list-item">
        <span class="fa-solid fa-eye"></span>
        <a href="#">Consultation</a>
        <span class="fa-solid fa-chevron-down arrow-down"></span>
     </li>
    </ul>
    <!-- Fin Menu Admin -->
  </div>
</nav>
<!-- Fin navigation Header Backend -->