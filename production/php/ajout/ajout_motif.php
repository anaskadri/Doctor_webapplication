<?php
            // coonect to the DB
            include ("bd_connexion.php");
            
            $date = htmlspecialchars ($_POST['date_motif']);
            $motif = htmlspecialchars ($_POST['motif']);
            $id_patient = htmlspecialchars ($_POST['id_patient']);
            
        
            $infos_motif = $bdd->prepare('INSERT INTO motif (date, motif_txt, id_patient ) VALUES (?, ?, ?)');

            $infos_motif->execute (array(
                    $date, 
                    $motif, 
                    $id_patient
                    ));

            header("Location: http://app.cabinet-drmalki.com/production/action.php?id_patient=$id_patient");
    ?> 