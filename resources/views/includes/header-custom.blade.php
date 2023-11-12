<!-- Container centre header --> 
<div class="headerTop">
  <nav id="nav" role=navigation>
    <!-- Container centre navigation --> 
    <div class="navigation">
    <!-- Logo et Nom clinique-->
      <div class="logo">
        <img src="assets/images/logo-clinique-jeannot-cadet.png" alt="logo clinique" />
        <h1><a href="#headerMiddle">Clinique Jeannot Cadet</a></h1>    
      </div>
      <!--Menuburger -->
      <div class="menuburger">
        <div class="menuburger-ligne menuburger-ligne__1"></div>
        <div class="menuburger-ligne menuburger-ligne__2"></div>
        <div class="menuburger-ligne menuburger-ligne__3"></div>
      </div>
      <!-- Menu -->
      <ul class="menu">
        <li>
          <a href="#clinique"><span>Clinique</span><span class="fa-solid fa-house-chimney-medical"></span></a>
        </li>
        <li>
          <a href="#equipe"><span>Equipe</span><span class="fa-solid fa-people-group"></span></a>
        </li>
        <li>
          <a href="#services"><span>Services</span><span class="fa-solid fa-wrench"></span></a>
        </li>
        <li>
          <a href="#galeries"><span>Galeries</span><span class="fa-regular fa-image"></span></a>
        </li>
        <li>
          <a href="#temoignages"><span class="menuLinkHidden">T&eacute;moignages</span><span class="fa-regular fa-comments"></span></a>
        </li>
        <li>
          <a href="{{url('/contact')}}"><span class="menuLinkHidden">Contact</span><span class="fa-regular fa-envelope"></span>
          </a>
        </li>
        <li>
          <a href="{{ route("auth.login")  }}"><span class="menuLinkHidden">Connexion</span><span class="fa-regular fa-circle-user"></span>
        </a>
        </li>
      </ul>
    </div>
  </nav>
</div>