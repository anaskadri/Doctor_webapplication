<?php
include("bd_connexion.php");

$id_examen=$_GET['id_examen'];
//$id_patient =$_GET['id_patient'];

$bdd->query("DELETE FROM examen WHERE id_examen='$id_examen'");
  
header("Location: http://app.cabinet-drmalki.com/production/action.php?id_patient=$_GET[id_patient]");

?>