<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) || $_SESSION['adminUser'] == 1 ): ?>

    <h1>Modifier une société</h1>

    <form action="modifierSociete.php" method="POST">

        <div class="champsForm">
            <label for="nomSociete" class="labelSelect">Sélectionner la société</label>
            <select name="selectSociete" id="nomSociete"></select>
        </div>

        <div class="champsForm">
            <label for="nomSociete" class="labels">Nom de la société</label>
            <input type="text" name="nomSociete" id="nomSociete" />
        </div>

        <div class="champsForm">
            <label for="adresseSociete" class="labels">Adresse</label>
            <input type="text" name="adresseSociete" id="adresseSociete" />
        </div>

        <div class="champsForm">
            <label for="cpSociete" class="labels">Code Postal</label>
            <input type="text" name="cpSociete" id="cpSociete" />
        </div>

        <div class="champsForm">
            <label for="villeSociete" class="labels">Commune</label>
            <input type="text" name="villeSociete" id="villeSociete" />
        </div>
        
        <div class="champsForm">
            <label for="telSociete" class="labels">Téléphone</label>
            <input type="text" name="telSociete" id="telSociete" />
        </div>

        <div class="champsForm">
            <label for="mailSociete" class="labels">Email</label>
            <input type="text" name="mailSociete" id="mailSociete" />
        </div>

        <button class="btn-ajouter">Ajouter</button>

    </form>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>