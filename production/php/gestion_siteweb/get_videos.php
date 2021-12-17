<?php 
    include ("bd_connexion.php");

    $videos = $bdd->query("SELECT * FROM videos_utiles");
?>