@extends('layout.layout')
@section('title')
<title>Clinique Jeannot Cadet | Se connecter</title>
@endSection
@section('content')
  <section class="section-login">
    <div class="section-login-center">
      <div class="section-login-center-left">
        <strong>Application de gestion de clinique</strong>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus consequatur atque, vitae, ad error quae, sit reprehenderit in obcaecati sed ullam impedit ducimus saepe. Necessitatibus consequatur atque, vitae, ad error quae, sit reprehenderit in obcaecati sed ullam impedit ducimus saepe !</p>
      </div>
      <div class="section-login-center-right">
        <form class="connexion-utilisateur" action="/user/admin">
          <div class="form-group">
            <label for="nomutilisateur">Nom utilisateur</label>
            <input type="text" class="form-control" id="nomutilisateur" aria-describedby="nomUtilisateurHelp" placeholder="nom utilisateur">
            </div>
          <div class="form-group">
            <label for="motdepasse">Mot de passe</label>
            <input type="password" class="form-control" id="motdepasse" placeholder="Mot de passe">
          </div>
          <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
      </div>
    </div>
  </section>
@endSection