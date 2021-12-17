<?php
    include("bd_connexion.php");

    if(isset($_POST['mdp_medecin'])){
        $mdp_medecin =  hash('sha256', $_POST['mdp_medecin']);
        $query1 = $bdd->query ("UPDATE medecin SET mdp_medecin = '$mdp_medecin'");
        header('Location: http://app.cabinet-drmalki.com/production/medecin.php');
    }

    if(isset($_POST['mdp_secretaire'])){
        $mdp_secretaire =  hash('sha256', $_POST['mdp_secretaire']);
        $query1 = $bdd->query ("UPDATE secretaire SET mdp_secretaire = '$mdp_secretaire'");
        header('Location: http://app.cabinet-drmalki.com/production/medecin.php');
    }
?>