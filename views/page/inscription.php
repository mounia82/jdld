<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="boxInscription">
                <form method="post" action="#"  class="box1">
                    <div>Se connecter</div>
                    <?php
                    // S'il y a une erreur sur le nom alors on affiche
                    if (isset($er_nom)){
                    ?>
                        <div class='error'><?= $er_nom ?></div>
                    <?php   
                    }
                    ?>

                    <input type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>
                    
    
                        <?php
                            if (isset($er_mail)){
                            ?>
                                <div class='error'><?= $er_mail ?></div>
                            <?php   
                            }
                        ?>


                    <input type="email"  placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>

                        <?php
                            if (isset($er_mdp)){
                            ?>
                                <div class='error'><?= $er_mdp ?></div>
                            <?php   
                            }
                        ?>

                    <input type="password"  placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>

                    <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required value=" ">
                    <button type="submit" name="inscription">Envoyer</button>
                </form>
            </div>                                
        </div>        
    </div>                                        
</div>    