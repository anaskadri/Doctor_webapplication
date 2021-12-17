<?php
            // coonect to the DB
            include ("bd_connexion.php");
            
            $date = htmlspecialchars ($_POST['date_examen']);
            $examen = htmlspecialchars ($_POST['examen']);
            $id_patient = htmlspecialchars ($_POST['id_patient']);
            
        
            $infos_examen = $bdd->prepare('INSERT INTO examen (date, examen_txt, id_patient) VALUES (?, ?, ?)');

            $infos_examen->execute (array(
                    $date, 
                    $examen, 
                    $id_patient
                    ));

            header("Location: http://app.cabinet-drmalki.com/production/action.php?id_patient=$id_patient");
    ?> 