<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['titre_video'])){
        $titre_video = $_POST['titre_video'];
    }
    if(isset($_POST['lien_video'])){
        $lien_video = $_POST['lien_video'];
    }
            echo $titre_video." + ".$lien_video;

    $ajout_information = $bdd->prepare("INSERT INTO videos_utiles(titre, lien) VALUES (?, ?)");
    $ajout_information->execute (array (
        $titre_video,
        $lien_video
    ));

    header('Location: http://app.cabinet-drmalki.com/production/gestion_siteweb.php');
?>