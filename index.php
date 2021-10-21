<?php 
  
 session_start();
  ob_start();


include("views/html/head.php");

include("views/menu/menu-co.php");

include("views/html/menu.php");

include("controllers/router.php");

include("views/html/footer.php");


