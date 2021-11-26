<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) || $_SESSION['adminUser'] == 1 ): ?>

    <h1>Supprimer un message</h1>

    <form action="supprimerMessage.php" method="POST">

        <div class="champsForm">
            <label for="selectMessage" class="labelSelect">Selectionner le message</label>
            <select name="selectMessage" id="selectMessage"></select>
        </div>

        <button class="btn-supprimer">Supprimer</button>

    </form>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>