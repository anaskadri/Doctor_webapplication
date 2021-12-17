<?php
include("bd_connexion.php");

$id_motif=$_GET['id_motif'];
//$id_patient =$_GET['id_patient'];

$bdd->query("DELETE FROM motif WHERE id_motif='$id_motif'");
  
header("Location: http://app.cabinet-drmalki.com/production/action.php?id_patient=$_GET[id_patient]");

?>