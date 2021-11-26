<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) || $_SESSION['adminUser'] == 1 ): ?>

    <h1>Modifier une version</h1>

    <form action="modifierLogiciel.php" method="POST">

        <div class="champsForm">
            <label for="selectVersion" class="labelSelect">Sélectionner la version</label>
            <select name="selectVersion" id="selectVersion"></select>
        </div>

        <div class="champsForm">
            <label for="numVersion" class="labels">Numéro de la version</label>
            <input type="text" name="numVersion" id="numVersion">
        </div>

        <div class="champsForm">
            <label for="dateVersion" class="labels"></label>
            <input type="date" name="dateVersion" id="dateVersion">
        </div>

        <button class="btn-modifier">Modifier</button>

    </form>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>