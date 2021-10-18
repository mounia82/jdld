<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="boxConnexion">
                <h3>Se connecter</h3>
                    <form method="post" action="#"  class="box">
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
                            <span>Vous n'avez pas de compte ? <a href="?</section=creer">S'inscrire</a></span>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</div>