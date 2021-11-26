<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) || $_SESSION['adminUser'] == 1 ): ?>

    <h1>Ajouter un Utilisateur</h1>

    <form action="ajouterUtilisateur.php" method="POST">

        <div class="champsForm">
            <label for="nomUtilisateur" class="labels">Nom</label>
            <input type="text" name="nomUtilisateur" id="nomUtilisateur" />
        </div>

        <div class="champsForm">
            <label for="prenomUtilisateur" class="labels">Prénom</label>
            <input type="text" name="prenomUtilisateur" id="prenomUtilisateur" />
        </div>

        <div class="champsForm">
            <label for="mailUtilisateur" class="labels">Mail</label>
            <input type="text" name="mailUtilisateur" id="mailUtilisateur" />
        </div>

        <div class="champsForm">
            <label for="telUtilisateur" class="labels">Téléphone</label>
            <input type="text" name="telUtilisateur" id="telUtilisateur" />
        </div>
        
        <div class="champsForm">
            <label for="adminSite" class="labels">Autorisation site</label>
            <input type="text" name="adminSite" id="adminSite" />
        </div>

        <div class="champsForm">
            <label for="nomSociete" class="labelSelect">Nom de la société</label>
            <select name="nomSociete" id="nomSociete"></select>
        </div>

        <button class="btn-ajouter">Ajouter</button>

    </form>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>