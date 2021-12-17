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
            $id_client = htmlspecialchars ($_POST['id_client']);
            
        
            $infos_patient = $bdd->prepare("UPDATE patient SET nom_patient='$nom', prenom_patient='$prenom', date_naissance='$date_naissance', cin_patient='$cin', telephone_patient='$telephone', mutuel_patient='$mutuel', adresse_patient='$adresse' WHERE id_patient='$id_client'");

            $infos_patient->execute (array(
                    $nom, 
                    $prenom,
                    $date_naissance,
                    $cin,
                    $telephone,
                    $mutuel,
                    $adresse
                    ));

            header('Location: http://app.cabinet-drmalki.com/production/medecin.php');
    ?>  
