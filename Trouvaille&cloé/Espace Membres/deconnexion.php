<?php 
session_start();
$_SESSION = array();
session_destroy();
header('Location: Trouvaille&cloé/Espace Membres/connexion.php');
?>