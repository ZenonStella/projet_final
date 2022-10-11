<?php 
session_start();
session_unset();
session_destroy();
require_once '../controllers/logout_controller.php';

include('../inc/header.php');
?>
<h1 class="mt-5 title text-center">Déconnexion</h1>
<p class="text-center">Vous êtes bien déconnecté</p>
<?php 
include('../inc/footer.php');

include('../inc/end.php');