<!-- Header -->
<?php  $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Body -->
<?php
    if(isset($_SESSION['prenomUser']))
    {
        header('location:../index.php');
    }
    elseif(isset($_POST['nomSocieteInscription']))
    {
        $nomSocieteInscription = strip_tags($_POST['nomSocieteInscription']);
        setcookie('raisonSociale', $_POST['nomSocieteInscription'], time()+24*3600);

        $sqlQueryInscriptionSociete = "SELECT * FROM `societes` WHERE `raisonSociale` = :raisonSociale";
        $societeQueryInscription = $bddBellaCiao->prepare($sqlQueryInscriptionSociete);
        $societeQueryInscription->execute(array(':raisonSociale' => $nomSocieteInscription)) or die(print_r($db->errorInfo()));
        $societeInscriptionListe = $societeQueryInscription->fetchAll();
        $countSocieteInscription = count($societeInscriptionListe);

        if($countSocieteInscription == 1)
        {
            echo '<h2>Finalisez votre inscription</h2>

            <form action="inscriptionEtapeFinale.php" method="POST">

            <div class="champsForm">
                <label for="nomUtilisateurInscription" class="labels">Votre nom*</label>
                <input type="text" id="nomUtilisateurInscription" name="nomInscription" require/>
            </div>

            <div class="champsForm">
                <label for="prenomUtilisateurInscription" class="labels">Votre prénom*</label>
                <input type="text" name="prenomInscription" require/>
            </div>

            <div class="champsForm">
                <label for="telUtilisateurInscription" class="labels">Votre téléphone*</label>
                <input type="tel" name="telInscription" require/>
            </div>

            <div class="champsForm">
                <label for="mailUtilisateurInscrption" class="labels">Votre mail*</label>
                <input type="mail" name="mailInscription" require/>
            </div>

            <div class="champsForm">
                <label for="mdpUtilisateurInscrption" class="labels">Votre Mot de passe*</label>
                <input type="password" name="mdpInscription" require/>
            </div>

            <div class="champsForm">
                <label for="mdpConfirmeUtilisateurInscrption" class="labels">Confirmez votre mot de passe*</label>
                <input type="password" name="mdpConfirmeInscription" require/>
            </div>

            <button class="btn-terminer">Terminer</button>

            </form>';
        }
        else
        {
            echo '<p class="alerteValide">La société "<b>'.$nomSocieteInscription.'</b>" n\'est pas présente dans notre base de données, complétez ces informations pour l\'enregistrer.</p>
            
            <h2>Continuez votre inscription</h2>

            <form action="inscriptionEtape3.php" method="POST">

            <div class="champsForm">
                <label for="adresseSociete" class="labels">Adresse de la société*</label>
                <input type="text" id="adresseSociete" name="adresseSocieteInscription" require/>
            </div>

            <div class="champsForm">
                <label for="cpSociete" class="labels">Code Postal*</label>
                <input type="text" id="cpSociete" name="cpSocieteInscription" minlength="5" maxlength="5" require/>
            </div>

            <div class="champsForm">
                <label for="villeSociete" class="labels">Commune*</label>
                <input type="text" id="villeSociete" name="villeSocieteInscription" require/>
            </div>

            <div class="champsForm">
                <label for="telSociete" class="labels">Téléphone*</label>
                <input type="tel" id="telSociete" name="telSocieteInscription" require/>
            </div>    

            <div class="champsForm">
                <label for="mailSociete" class="labels">Email de la société</label>
                <input type="mail" id="mailSociete" name="mailSocieteInscription" />
            </div>

                <button class="btn-continuer">Continuer</button>

            </form>';
        }
    }
    else
    {
        header('location: inscriptionEtape1.php');
    }
?>

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>