<?php
            // coonect to the DB
            include ("bd_connexion.php");
            
            $date = htmlspecialchars ($_POST['date_traitement']);
            $traitement = htmlspecialchars ($_POST['traitement']);
            $id_patient = htmlspecialchars ($_POST['id_patient']);
            
        
            $infos_traitement = $bdd->prepare('INSERT INTO traitement (date, traitement_txt, id_patient ) VALUES (?, ?, ?)');

            $infos_traitement->execute (array(
                    $date, 
                    $traitement, 
                    $id_patient
                    ));

            header("Location: http://app.cabinet-drmalki.com/production/action.php?id_patient=$id_patient");
    ?> 