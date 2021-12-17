<?php
include("bd_connexion.php");

$id=$_GET['id_information'];
echo $id;
$bdd->query("DELETE FROM informations_clients WHERE id='$id'");
            
header('Location: http://app.cabinet-drmalki.com/production/gestion_siteweb.php');

?>