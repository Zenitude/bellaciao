<!-- Header -->
<?php  $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Body -->
<?php 
    if(isset($_SESSION['prenomUser']))
    {
        header('location:../index.php');
    }
    elseif(isset($_POST['mailUtilisateurInscrption']))
    {
        if($_POST['mdpUtilisateurInscrption'] == $_POST['mdpConfirmeUtilisateurInscrption'])
        {
            $sqlQuerySocieteInscript = "SELECT * FROM `societes` WHERE raisonSociale = :raisonSociale";
            $societesQueryInscriptUser = $bddBellaCiao->prepare($sqlQuerySocieteInscript);
            $societesQueryInscriptUser->execute(array(':raisonSociale' => $_COOKIE['raisonSociale'])) or die(print_r($db->errorInfo()));
            $societesListeQueryInscriptUser = $societesQueryInscriptUser->fetchAll();
            $countSocieteInscriptUser = count($societesListeQueryInscriptUser);

            if($countSocieteInscriptUser == 1)
            {
                foreach($societesListeQueryInscriptUser as $societeListeUser)
                {
                    $idSociete = $societeListeUser['idSociete'];
                }
    
                $sqlQueryInscript = "INSERT INTO `representants`(nomRepresentant, prenomRepresentant, mailRepresentant, telephoneRepresentant, mdpRepresentant, autorisationRepresentant, idSociete) VALUES (':nomRepresentant', ':prenomRepresentant', ':mailRepresentant', ':telephoneRepresentant', ':mdpRepresentant', ':autorisationRepresentant', ':idSociete')";
                $userQueryInscript = $bddBellaCiao->prepare($sqlQueryInscript);
                $userQueryInscript->execute(array(
                    ':nomRepresentant' => strip_tags($_POST['nomInscription']),
                    ':prenomRepresentant' => strip_tags($_POST['prenomInscription']),
                    ':mailRepresentant' => strip_tags($_POST['mailInscription']),
                    ':telephoneRepresentant' => strip_tags($_POST['telInscription']),
                    ':mdpRepresentant' => strip_tags($_POST['mdpInscription']),
                    ':autorisationRepresentant' => 0,
                    ':idSociete' => $idSociete
                )) or die(print_r($bddBellaCiao->errorInfo()));
    
                    $_SESSION['mailUser'] = strip_tags($_POST['mailInscription']);
                    $_SESSION['prenomUser'] = strip_tags($_POST['prenomInscription']);
                    $_SESSION['adminUser'] = 0;
                    
                    echo `<p class="alerteValide">Inscription termin??e !</p>
                    <p>Vous allez recevoir un email comportant un r??capitualif de vos identifiants ainsi que la proc??dure ?? suivre pour obtenir la cl?? du logiciel.En attendant vous pouvez d'ors et d??j?? t??l??charger la derni??re version en allant dans l'onglet <a href="download.php">T??l??chargement</a></p>`;
                    
                    header("Refresh:10; url=../index.php");
            }
        }
    }
?>

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>