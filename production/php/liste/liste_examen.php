<?php
    // coonect to the DB
    include ("bd_connexion.php");
            
    $examen = $bdd->query("SELECT * FROM examen WHERE id_patient=$id_patient");
?>