<?php session_start();?>

<?php
try
{
	$bddBellaCiao = new PDO('mysql:host=localhost;dbname=bellaciao;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../../ressources/logo-icon.png" />

        <!-- Gestion du head et de la navBar en fonction du nom de la page -->
        <?php 

            $sqlQueryNavHeader = "SELECT * FROM `gestionPages`";
            $navHeaderPrepare = $bddBellaCiao->prepare($sqlQueryNavHeader);
            $navHeaderPrepare->execute() or die(print_r($db->errorInfo()));
            $menuListe = $navHeaderPrepare->fetchAll();

            forEach($menuListe as $menu)
            {
                switch($nomDeLaPage)
                {
                    case $menu['nomDeLaPage'] :
                        $nomPage = $menu['nomPage'];
                        $lienLogo = $menu['lienLogo'];
                        $lienMainCss = $menu['lienMainCss'];
                        $lienMediaCss = $menu['lienMediaCss'];
                        $lienAccueil = $menu['lienAccueil'];
                        $lienConnection = $menu['lienConnection'];
                        $lienInscription = $menu['lienInscription'];
                        $lienContact = $menu['lienContact'];
                        $lienDownload = $menu['lienDownload'];
                        $lienGestion = $menu['lienGestion'];
                        $srcDeconnexion = $menu['srcDeconnection'];
                        $accueilActive = $menu['activeAccueil'];
                        $connectionActive = $menu['activeConnection'];
                        $inscriptionActive = $menu['activeInscription'];
                        $contactActive = $menu['activeContact'];
                        $downloadActive = $menu['activeDownload'];
                        $gestionActive = $menu['activeGestion'];
                        $scriptFooter = $menu['scriptFooter'];
                    break;
                }
            }
        ?>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo $lienMainCss; ?>" />
        <link rel="stylesheet" href="<?php echo $lienMediaCss; ?>" />

        <!-- Titre de page -->
        <title>BellaCiào - <?php echo $nomPage; ?></title>

    </head>

    <body>

        <!-- Header -->
        <header class="headerMain">

            <nav class="navbar">

                <div class="logo"><a href="<?php echo $lienAccueil; ?>">Bella_Ciào</a></div>

                <ul>

                    <?php if(! isset($_SESSION['prenomUser'])) : ?>

                        <li class="<?php echo $accueilActive; ?>">
                            <?php 
                                echo $lien = sprintf(
                                    '<a href="%s">%s</a>',
                                    $lienAccueil,
                                    'Accueil'          
                                );
                            ?>
                        </li>

                        <li class="<?php echo $connectionActive;?>">
                            <?php
                                echo $lien = sprintf(
                                    '<a href="%s">%s</a>',
                                    $lienConnection,
                                    'Connexion'               
                                );
                            ?>
                        </li>

                        <li class="<?php echo $contactActive;?>">
                            <?php 
                                echo $lien = sprintf(
                                    '<a href="%s">%s</a>',
                                    $lienContact,
                                    'Contact'                        
                                );
                            ?>
                        </li>                  

                        <?php if($nomDeLaPage == 'inscriptionEtape1.php' || $nomDeLaPage == 'inscriptionEtape2.php' || $nomDeLaPage == 'inscriptionEtape3.php') : ?>

                            <li class="<?php echo $inscriptionActive; ?>">
                                <?php 
                                    echo $lien = sprintf(
                                        '<a href="%s">%s</a>',
                                        $lienInscription,
                                        'Inscription'          
                                    );
                                ?>
                            </li>

                        <?php endif; ?>

                    <? else: ?>

                        <li class="<?php echo $accueilActive?>">
                            <?php 
                                echo $lien = sprintf(
                                    '<a href="%s">%s</a>',
                                    $lienAccueil,
                                    'Accueil'          
                                );
                            ?>
                        </li>

                        <li class="<?php echo $downloadActive;?>">
                            <?php 
                                echo $lien = sprintf(
                                    '<a href="%s">%s</a>',
                                    $lienDownload,
                                    'Téléchargement'                         
                                );
                            ?>
                        </li>

                        <li class="<?php echo $contactActive;?>">
                            <?php 
                                echo $lien = sprintf(
                                    '<a href="%s">%s</a>',
                                    $lienContact,
                                    'Contact'                        
                                );
                            ?>
                        </li>

                        <?php if(isset($_SESSION['adminUser']) && $_SESSION['adminUser'] == true) : ?>

                            <li class="<?php echo $gestionActive; ?>">
                                <?php 
                                    echo $lien = sprintf(
                                        '<a href="%s">%s</a>',
                                        $lienGestion,
                                        'Gestion'          
                                    );
                                ?>
                            </li>

                        <?php endif; ?>

                        <li class="liDeco">
                            <?php
                                echo $lien = sprintf(
                                    '<form action="%s" method="POST" class="form-deco"><button name="%s" class="%s"><image src="%s"></button></form>',
                                    $lienConnection,
                                    'deconnection',
                                    'btn-deconnection',
                                    $srcDeconnexion
                                )
                            ?>
                        </li>

                    <?php endif; ?>
                    
                </ul>

                <div class="menuHDeco">
                    
                    <?php if(isset($_SESSION['prenomUser'])) : ?>
                        
                        <?php
                        echo $lien = sprintf(
                            '<form action="%s" method="POST" class="form-deco-mini"><button name="%s" class="%s"><image src="%s"></button></form>',
                            $lienConnection,
                            'deconnection',
                            'btn-deconnection',
                            $srcDeconnexion
                            )
                            ?>

                    <?php endif; ?> 

                    <div class="menuH">
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </div>
                    
                </div>

            </nav>

        </header>

        <div class="container">
