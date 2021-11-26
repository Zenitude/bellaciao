<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('../../insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) || $_SESSION['adminUser'] == 1 ): ?>

    <h1>Supprimer un utilisateur</h1>

    <form action="supprimerUtilisateur.php" method="POST">

        <div class="champsForm">
            <label for="selectUtilisateur" class="labelSelect">Sélectionner l'utilisateur</label>
            <select name="selectUtilisateur" id="selectUtilisateur"></select>
        </div>

        <button class="btn-supprimer">Supprimer</button>
        </div>

    </form>

<?php else: header("Refresh:0; url=../../../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('../../insertions/footer.php'); ?>