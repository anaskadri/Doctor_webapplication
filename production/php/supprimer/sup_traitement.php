<?php
include("bd_connexion.php");

$id_traitement=$_GET['id_traitement'];
//$id_patient =$_GET['id_patient'];

$bdd->query("DELETE FROM traitement WHERE id_traitement='$id_traitement'");
  
header("Location: http://app.cabinet-drmalki.com/production/action.php?id_patient=$_GET[id_patient]");

?>