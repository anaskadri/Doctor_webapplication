<?php 
    include ("bd_connexion.php");

    $informations = $bdd->query("SELECT * FROM informations_clients");
?>