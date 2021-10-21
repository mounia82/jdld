<h3>Poster un commentaire</h3>
<form method="post" action="<?php echo $currenturl; ?>">
    <input type="hidden" name="action" value="poster-commentaire" />
    <input type="text" name="email" class="hidden" />
    <p>Commentaire<br /><textarea name="commentaire"></textarea></p>
    <p>Nom<br /><input type="text" name="nom" /></p>
    <p>Adresse e-mail<br /><input type="text" name="emailtrue" /></p>
    <p><input type="submit" class="button-blue left" value="Poster mon commentaire" /></p>
    <div class="clear"></div>
    <p class="red right">Votre adresse e-mail n'est pas publiée lorsque vous ajoutez un commentaire.<br />Tous les champs sont obligatoires pour soumettre votre commentaire.</p>
    <div class="clear"></div>
</form>