<?php
            // coonect to the DB
            include ("bd_connexion.php");
            
            $date = htmlspecialchars ($_POST['date_bilan']);
            $bilan = htmlspecialchars ($_POST['bilan']);
            $id_patient = htmlspecialchars ($_POST['id_patient']);
            
        
            $infos_bilan = $bdd->prepare('INSERT INTO bilan (date, bilan_txt, id_patient ) VALUES (?, ?, ?)');

            $infos_bilan->execute (array(
                    $date, 
                    $bilan, 
                    $id_patient
                    ));

            header("Location: http://app.cabinet-drmalki.com/production/action.php?id_patient=$id_patient");
    ?> 