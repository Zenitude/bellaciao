<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) || $_SESSION['adminUser'] == 1 ): ?>

    <h1>Supprimer une société</h1>

    <form action="supprimerSociete.php" method="POST">

        <div class="champsForm">
            <label for="nomSociete" class="labelSelect">Nom de la société</label>
            <select name="selectSociete" id="nomSociete"></select>
        </div>

        <button class="btn-supprimer">Supprimer</button>

    </form>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>