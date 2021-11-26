<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Si utilisateur/trice est non identifié(e), on affiche le formulaire -->

<!-- Body -->
<?php if(isset($_POST['deconnection'])) 
{
    session_destroy();
    header("Refresh:0");
}
?>

<?php if(!isset($_SESSION['mailUser'])): ?>

    <h1>Connectez-vous</h1>
    
    <form action="../index.php" method="POST">

        <div class="champsForm">
            <label for="connexionMail" class="labels">E-mail</label>
            <input type="mail" id="connexionMail" name="mailConnection" />
        </div>

        <div class="champsForm">
            <label for="connexionMdp" class="labels">Mot de passe</label>
            <input type="password" id="connexionMdp" name="mdpConnection" />
        </div>

        <p class="msgMdpOublie">Mot de passe oublié ? <a href="mdpOublie.php">Réinitialiser mot de passe</a></p>

        <button class="btn-connexion">Se connecter</button>

    </form>

    <p class="msgInscription">Vous n'avez pas de compte ? <a href="inscriptionEtape1.php">Inscrivez-vous</a></p>

<?php else: header('location: ../index.php'); exit(); ?>

<?php endif; ?>

<!-- Si utilisateur/trice bien connectée on affiche un message de succès -->

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>