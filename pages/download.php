<!-- Header -->
<?php  $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Body -->

<?php if(!isset($_SESSION['mailUser'])): header("Refresh:0; url=../index.php"); ?>

<?php else: ?>

    <?php
        $sqlQueryDownload = "SELECT * FROM `logiciels` ORDER BY `numeroVersion` DESC";
        $queryDownload = $bddBellaCiao->prepare($sqlQueryDownload);
        $queryDownload->execute() or die(print_r($db->errorInfo()));
        $listeDownload = $queryDownload->fetchAll();       
    ?>

    <div class="telechargement">

        <a href="<?php echo $listeDownload[0]['emplacementLogiciel']; ?>" class="download">
            <span>Télécharger</span><br>
            Dernière version : <span class="versionActuelle"><?php echo $listeDownload[0]['numeroVersion']; ?></span><br>
            <span class="dateVersionActuelle"><?php echo "( ".date("d / m / Y", strtotime($listeDownload[0]['dateVersion']))." )"; ?></span>
        </a>
        
    </div>

    <div class="exVersions">

        <h2>Anciennes versions</h2>

        <table class="anciennesVersions">
            <thead>
                <tr>
                    <th>Version</th>
                    <th>Date</th>
                    <th>Liens</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $listeDownload[1]['numeroVersion']; ?></td>
                    <td><?php echo date("d / m / Y", strtotime($listeDownload[1]['dateVersion'])); ?></td>
                    <td><a href="<?php echo $listeDownload[1]['emplacementLogiciel']; ?>" class="lienDl">Télécharger</a></td>
                </tr>
                <tr>
                    <td><?php echo $listeDownload[2]['numeroVersion']; ?></td>
                    <td><?php echo date("d / m / Y", strtotime($listeDownload[2]['dateVersion'])); ?></td>
                    <td><a href="<?php echo $listeDownload[2]['emplacementLogiciel']; ?>" class="lienDl">Télécharger</a></td>
                </tr>
                <tr>
                    <td><?php echo $listeDownload[3]['numeroVersion']; ?></td>
                    <td><?php echo date("d / m / Y", strtotime($listeDownload[3]['dateVersion'])); ?></td>
                    <td><a href="<?php echo $listeDownload[3]['emplacementLogiciel']; ?>" class="lienDl">Télécharger</a></td>
                </tr>
            </tbody>

        </table>
    </div>

<?php endif; ?>

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>