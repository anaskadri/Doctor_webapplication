<?php
    // coonect to the DB
    include ("bd_connexion.php");
            
    $patient = $bdd->query("SELECT * FROM patient");
?>
