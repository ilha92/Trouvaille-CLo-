<?php
include '/Trouvaille&cloé/Espace Membres/login.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="/Trouvaille&cloé/style/style.css">
</head>
<body>
 <nav class="navbar">
    <a href="#" class="logo">NIGHT JOBS</a>
    <div class="nav-links">
     <ul>
         <li class="active"><a href="#">Accueil</a></li>
         <li><a href="#">Liste emploi</a></li>
         <li><a href="#">Employeur</a></li>
         <li><a href="#">Candidat</a></li>
         <li><a href="#">Nous contacter</a></li>
      </ul>
     </div>
     <img src="img/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
 </nav>
</body>

<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".nav-links")

    menuHamburger.addEventListener('clic',()=>{
    navLinks.classList.toggle('mobile-menu')
    })
</script>
</html>