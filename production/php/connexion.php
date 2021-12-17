<?php
include ("bd_connexion.php");

$email = htmlspecialchars ($_POST['email']);
//$mdp = htmlspecialchars ($_POST['mdp']);

$mdp_tohash = hash('sha256', $_POST['mdp']);
    
    //medecin
    $req_medecin = $bdd->query("SELECT COUNT(*) AS exist FROM medecin WHERE adress_medecin='$email'");
    $donnees_medecin = $req_medecin->fetch();

    //secretaire
    $req_secretaire = $bdd->query("SELECT COUNT(*) AS exist FROM secretaire WHERE adress_secretaire='$email'");
    $donnees_secretaire = $req_secretaire->fetch();

    if ($donnees_medecin['exist'] != 0) //medecin
    {
        $quete_medecin = $bdd->query("SELECT * FROM medecin WHERE adress_medecin='$email'");
        $infos_medecin = $quete_medecin->fetch();
       
        if ($mdp_tohash == $infos_medecin['mdp_medecin'])
        {
            session_start ();
            $_SESSION['nom_medecin'] = $infos_medecin['nom_medecin'];
            $_SESSION['prenom_medecin'] = $infos_medecin['prenom_medecin'];
            header('Location: ../medecin.php');
        }else{header('Location: http://app.cabinet-drmalki.com/');}
    }
     
    if ($donnees_secretaire['exist'] != 0) // secretaire
    {
        $quete_secretaire = $bdd->query("SELECT * FROM secretaire WHERE adress_secretaire='$email'");
        $infos_secretaire = $quete_secretaire->fetch();
    
        if ($mdp_tohash == $infos_secretaire['mdp_secretaire'])
        {
            session_start ();
            $_SESSION['nom_secretaire'] = $infos_secretaire['nom_secretaire'];
            $_SESSION['prenom_secretaire'] = $infos_secretaire['prenom_secretaire'];
            header('Location: ../secretaire.php');
        }else{header('Location: http://app.cabinet-drmalki.com/');}
    }//elseif
    
    if($donnees_medecin['exist'] == 0 && $donnees_secretaire['exist'] == 0){header('Location: http://app.cabinet-drmalki.com/');}
?>