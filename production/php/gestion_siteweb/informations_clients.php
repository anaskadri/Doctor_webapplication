<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['titre_information'])){
        $titre_information = $_POST['titre_information'];
    }

    if(isset($_POST['type_information'])){
        $type_information = $_POST['type_information'];
    }

    /*if(isset($_POST['fichier_information'])){
        $fichier_information = $_POST['fichier_information'];
    } else {
        $fichier_information = "NULL";
    }*/

    if(!empty($_POST['lien_information'])){
        $lien_information = $_POST['lien_information'];
    } else {
        $lien_information = 'null';
    }

    if(isset($_FILES['fichier_information'])){
              $errors= array();
              $file_name = $_FILES['fichier_information']['name'];
              $file_size = $_FILES['fichier_information']['size'];
              $file_tmp = $_FILES['fichier_information']['tmp_name'];
              $file_type = $_FILES['fichier_information']['type'];
            
              $file_ext = explode('.',$_FILES['fichier_information']['name']);
              $file_ext=end($file_ext);
              $file_ext=strtolower($file_ext);
               
              $expensions= array("jpeg","jpg","png", "pdf", "docx", "txt", "xls", "xlsx", "ppt", "pptx", "oxps", "xps");

              if(in_array($file_ext,$expensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
              }

              if($file_size > 200097152) {
                 $errors[]='File size must be excately 2 MB';
              }
                if (!empty($file_ext)){
              $file_name = rand(1, 1000000).'.'.$file_ext;} else {$file_name='null';}
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"fichier_uploaded/".$file_name);
            
              }else{
        
              }
           }
        
        
    $ajout_information = $bdd->prepare("INSERT INTO informations_clients(titre, fichier, lien, type_information) VALUES (?, ?, ?, ?)");
    $ajout_information->execute (array (
        $titre_information,
        $file_name,
        $lien_information,
        $type_information
    ));

    header('Location: http://app.cabinet-drmalki.com/production/gestion_siteweb.php');
?>