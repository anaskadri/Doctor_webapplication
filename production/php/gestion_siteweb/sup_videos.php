<?php
include("bd_connexion.php");

$id=$_GET['id_video'];
echo $id;
$bdd->query("DELETE FROM videos_utiles WHERE id='$id'");
            
header('Location: http://app.cabinet-drmalki.com/production/gestion_siteweb.php');

?>