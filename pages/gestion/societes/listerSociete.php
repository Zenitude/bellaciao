<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) || $_SESSION['adminUser'] == 1 ): ?>

<h1>Liste des sociétés</h1>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>