<?php
    // coonect to the DB
    include ("bd_connexion.php");
            
    $traitement = $bdd->query("SELECT * FROM traitement WHERE id_patient=$id_patient");
?>