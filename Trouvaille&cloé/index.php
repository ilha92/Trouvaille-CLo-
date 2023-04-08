<?php 
session_start();
if(!$_SESSION['pseudo']){
    header('Location: Trouvaille&cloé/Espace Membres/connexion.php');
}
echo $_SESSION['pseudo'];

?>
<!DOCTYPE html>
<html>
<head>
   <title>Home</title>
   <meta charset="utf-8">
</head>
<body>
<?php
    include_once "./components/navbar.php";
  ?>

   <a href="Trouvaille&cloé/Espace Membres/deconnexion.php">
      <button>Se deconnecter</button>
  </a>
</body>
</html>