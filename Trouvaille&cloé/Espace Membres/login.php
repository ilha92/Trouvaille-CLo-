<?php 
session_start();

include_once "./components/navbar.php";

$bdd = new PDO('mysql:host=localhost;dbname=espaces_membres;charset=utf8;','root', '');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));

       if($recupUser->rowCount() > 0){
           $_SESSION['pseudo'] = $pseudo;
           $_SESSION['mdp'] = $mdp;
           $_SESSION['id'] = $recupUser->fetch()['id'];
           header('Location:Trouvaille&cloé/index.php');

       }else{
          echo "Votre mot de passe ou pseudo est incorrect...";
       }


  }else{
       echo "Veuillez compléter tout les champs...";
  }


}
?>