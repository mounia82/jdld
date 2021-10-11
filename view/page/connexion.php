   <div class="container">
    <div>Se connecter</div>
        <form method="post" action="?section=connexion">
                <?php
                    if (isset($er_mail)){
                ?>
                    <div><?= $er_mail ?></div>
                <?php   
                    }
                ?>
                <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
                <?php
                    if (isset($er_mdp)){
                ?>
                    <div><?= $er_mdp ?></div>
                <?php   
                    }
                ?>
                <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                <button type="submit" name="connexion">Se connecter</button>
                
            <div class="Account">
                <span>Vous n'avez pas de compte?</span>
                <a href="#">S'inscrire</a>
            </div>


        </form>
</div>
