<!-- Header -->
<?php  $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Body -->
<?php
    if(isset($_SESSION['prenomUser']))
    {
        header('location:../index.php');
    }
    elseif(isset($_POST['adresseSocieteInscription']))
    {
        $sqlQueryAjoutSocieteInscription = "INSERT INTO `societes`(raisonSociale, adresseSociete, cpSociete, villeSociete, telephoneSociete, mailSociete) VALUES (':raisonSociale', ':adresseSociete', ':cpSociete', ':villeSociete', ':telephoneSociete', ':mailSociete')";
        $societeAjoutQueryInscription = $bddBellaCiao->prepare($sqlQueryAjoutSocieteInscription);
        $societeAjoutQueryInscription->execute(array(
            'raisonSociale' => $_COOKIE['raisonSociale'],
            'adresseSociete' => strip_tags($_POST['adresseSocieteInscription']),
            'cpSociete' => strip_tags($_POST['cpSocieteInscription']),
            'villeSociete' => strip_tags($_POST['villeSocieteInscription']),
            'telephoneSociete' => strip_tags($_POST['telSocieteInscription']),
            'mailSociete' => strip_tags($_POST['mailSocieteInscription'])
        )) or die(print_r($db->errorInfo()));
        
        echo `<p class="alerteValide">La société "`.$_COOKIE['raisonSociale'].`" a été enregistrée avec succès !</p>`;
        
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
?>

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>