<?php
// require_once("models/Commentaire.php");

if (isset($_POST['submit'])) {
    extract($_POST);

    if (!empty($comment) AND (!empty($comment)  ){
        require_once("models/Commentaire.php")
    }

    $req = $db->prepare('INSERT INTO comments (comment,comment_date) VALUES  (?,?,NOW())');
    $req->execute(array($comment));
}


















include("views/page/commentaire.php");
