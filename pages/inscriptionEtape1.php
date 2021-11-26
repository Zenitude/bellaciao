<!-- Header -->
<?php  $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Body -->

<?php 
    if(isset($_SESSION['prenomUser']))
    {
        header('location:../index.php');
    }
    else
    {
        echo '<h2>Inscrivez-vous</h2>

        <form action="inscriptionEtape2.php" method="POST" autocomplete="off">
        
        <div class="champsForm">
            <label for="societe" class="labels">Nom de votre Société*</label>
            <input type="text" name="nomSocieteInscription" require>
        </div>    
        
            <button class="btn-continuer">Continuer</button>
        </form>';
    }
?>

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>
