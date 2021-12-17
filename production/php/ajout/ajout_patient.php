<?php

            // coonect to the DB
            include ("bd_connexion.php");
            
            $nom = htmlspecialchars ($_POST['nom']);
            $prenom = htmlspecialchars ($_POST['prenom']);
            $date_naissance = htmlspecialchars ($_POST['date_naissance']);
            $cin = htmlspecialchars ($_POST['cin']);
            $telephone = htmlspecialchars ($_POST['telephone']);
            $mutuel = htmlspecialchars ($_POST['mutuel']);
            $adresse = htmlspecialchars ($_POST['adresse']);

            
        
            $infos_patient = $bdd->prepare('INSERT INTO patient (nom_patient, prenom_patient, date_naissance, cin_patient, telephone_patient, mutuel_patient, adresse_patient, date_inscription) VALUES (?, ?, ?, ?, ?, ?, ?, NOW() )');

            $infos_patient->execute (array(
                    $nom, 
                    $prenom,
                    $date_naissance,
                    $cin,
                    $telephone,
                    $mutuel,
                    $adresse
                    ));

            header('Location: http://app.cabinet-drmalki.com/production/secretaire.php');
    ?>  
