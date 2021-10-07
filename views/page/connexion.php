<?php


   


?>


<h1>S'inscrire</h1>
<form method="post">
    <!-- <div class="radios">
        <div class="radio">

            <input id="sexem" type="radio" name="bouton" value="sexe" checked="checked" />
            <label for="sexem">Homme</label> <br>
        </div>

        <div class="radio">
            <input id="sexef" type="radio" name="bouton" value="sexe" />
            <label for="sexef">Femme</label>
        </div>

        <div class="radio">
            <input id="sexeother" type="radio" name="bouton" value="sexe" />
            <label for="sexeother">Autre</label>
        </div>
    </div> -->

    <input type="text" name="identifiant" placeholder="Identifiant"> <br>
    <input type="date" name="date_naissance" placeholder="Date de naissance"><br>
    <input type="text" name="email" placeholder="John@hotmail.com"><br>
    <input type="password" name="mdp" placeholder="Mot de Passe"><br>
    <input type="password" name="confirmermdp" placeholder="Confirmez le mot de Passe"><br>

    <input type="submit" name="submit" value="S'inscrire"><br>

    <div class="Account">
        <span>Vous avez déja un compte?</span>
        <a href="connexion.html">Se connecter</a>
    </div>


</form>