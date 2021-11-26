<?php

$nomDeLaPage = basename(__FILE__); include_once('pages/insertions/header.php');
    
// Validation du formulaire de Connexion

if (isset($_POST['mailConnection']) &&  isset($_POST['mdpConnection'])) 
{
    $mail = strip_tags($_POST['mailConnection']);
    $mdp = strip_tags($_POST['mdpConnection']);
    
    $sqlQueryConnect = "SELECT * FROM `representants` WHERE mailRepresentant = :mail AND mdpRepresentant = :mdp";
    $userQueryConnect = $bddBellaCiao->prepare($sqlQueryConnect);
    $userQueryConnect->execute(array(':mail' => $mail, ':mdp' => $mdp)) or die(print_r($bddBellaCiao->errorInfo()));
    $usersListe = $userQueryConnect->fetchAll();
    $countUser = count($usersListe);
    
    if($countUser == 1)
    {
        foreach ($usersListe as $user)
        {
            if ($user['mailRepresentant'] === strip_tags($_POST['mailConnection']) && $user['mdpRepresentant'] === strip_tags($_POST['mdpConnection']))
            {
                $_SESSION['mailUser'] = $user['mailRepresentant'];
                $_SESSION['prenomUser'] = $user['prenomRepresentant'];
                $_SESSION['adminUser'] = $user['autorisationRepresentant'];
                header("Refresh:0");
            }
        }    
    }
    else 
    {
        $messageAlerte = "Les informations envoyées ne permettent pas de vous identifier :".strip_tags($_POST['mailConnection'])."/".strip_tags($_POST['mdpConnection']);
        header('location: pages/connection.php');
        exit();
    }
}

?>

<!-- Body -->

        <?php 
            if(isset($_SESSION['prenomUser']))
            {
                echo "<p class='msgAccueil'>Bonjour, bienvenue sur le site de BellaCiào <b>".$_SESSION['prenomUser']."</b>.</p>";
            }
        ?>

        <h1>Présentation</h1>

        <p class="presentation">
         Fondée en 1997, la société Bella_Ciào est spécialisée dans la conception et la maintenance de logiciel. Ses clients sont principalement dans le domaine de la banque, des assurances, de la gestion commerciale, dans le transport maritime, le transport aérien et les administrations. 
        </p>

<!-- Footer -->
<?php include_once('pages/insertions/footer.php'); ?>