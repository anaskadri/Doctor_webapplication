<?php
include("bd_connexion.php");

$id=$_POST['id_patient'];

$bdd->query("DELETE FROM patient WHERE id_patient='$id'");
            
header('Location: http://app.cabinet-drmalki.com/production/medecin.php');

?>