<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) && $_SESSION['adminUser'] == 1 ): ?>

    <h1>Ajouter une version</h1>

    <form action="ajouterLogiciel.php" method="POST">

        <div class="champsForm">
            <label for="numVersion" class="labels">Numéro de la version</label>
            <input type="text" id="numVersion" name="numVersion">
        </div>

        <div class="champsForm">
            <label for="dateVersion" class="labels"></label>
            <input type="date" name="dateVersion" />
        </div>

        <div class="champsForm">
            <label for="envoiFichier" class="labels"></label>
            <input type="file" name="addFiles" id="envoiFichier"/>
        </div>

        <button class="btn-ajouter">Ajouter</button>

    </form>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>