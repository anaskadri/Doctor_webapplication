<?php
    // coonect to the DB
    include ("bd_connexion.php");
            
    $motifs= $bdd->query("SELECT * FROM motif WHERE id_patient=$id_patient");
?>
