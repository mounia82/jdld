<!--  
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index">J'aurais du lui dire</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="?section=accueil" id="register">Accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
            <a href="?section=apropos" class="nav-link" id="apropos">A propos</a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
            
            <a href="?section=deconnexion" class="nav-link" id="deconnexion">Bienvenue  Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->


<div class="menu" >
     
<a href="?section=accueil" id="register"><img class="logo" src="public/images/logo.png" alt="logo" ></a>

     <a href="#apropos" >A PROPOS</a>

     <a href="#generateur">GENERATEUR</a>

     <!-- <a href="?section=contact">CONTACT</a> -->

     <!-- <a href="?section=connexion">CONNEXION</a> -->
   
     <a href="?section=deconnexion"  id="deconnexion">Bienvenue <?= $_SESSION["nom"]; ?> DECONNEXION</a>
     
     <!-- <a href="?section=inscription"  id="inscription">INSCRIPTION</a> -->