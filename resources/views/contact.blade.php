@extends('layout.layout')
@section('title')
  <title>Clinique Jeannot Cadet | Contactez-nous</title>
@endSection
@section('content')
<!-- Section Contact Wrapper -->
<section id="contact">
  <div class="contact">
    <!-- Titre de la section Contact -->
    <h3>Nous contacter</h3>
    <div class="contact__bloc">
      <!-- Formulaire de contact -->
      <form action="#" method="POST">
        <div class="contact__bloc__left">
            <textarea name="message"></textarea>
            <p>
              <img src="assets/images/Feedback-amico.svg" />
            </p>
        </div>  
        <div class="contact__bloc__middle">
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="email" name="email" placeholder="Votre email">
            <input type="tel" name="telephone" placeholder="Telephone [Optionnel]">
            <input type="submit" name="submitContact" value="Envoyer">
        </div>
          <address class="contact__bloc__right">
            <p>
              <strong>Clinique Jeannot Cadet</strong>
            </p>
            <p>
            <i class="fa-solid fa-location-dot"></i>
              <span>180, Avenue Lamartini&egrave;re</span><br />
              <span>Port-au-Prince, Haiti HT6112</span>
            </p>
            <p>
              <i class="fa-solid fa-phone"></i>
              <span>(509) 3122-1122</span>
            </p>
            <p>
              <i class="fa-solid fa-envelope"></i>
              <span>jeannotcadetclinique@gmail.com</span>
            </p>
          </address>
      </form>            
    </div>
  </div>
 </section>
 @endSection