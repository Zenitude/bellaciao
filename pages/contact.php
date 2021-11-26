<!-- Header -->
<?php  $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Body -->

<h1>Contactez-nous</h1>

<form action="contact.php" method="POST" autocomplete="off">

    <div class="champsForm">
        <label for="nom" class="labels">Nom</label>
        <input name="nomMessage" id="nom" type="text">
    </div>

    <div class="champsForm">
        <label for="prenom" class="labels">Prénom</label>
        <input name="prenomMessage" id="prenom" type="text">
    </div>

    <div class="champsForm" class="labels">
        <label for="mail" class="labels">E-mail</label>
        <input name="mailMessage" id="mail" type="text">
    </div>

    <div class="champsFormArea">
        <label for="message" class="labelArea">Message</label>
        <textarea name="contenuMessage" id="message"></textarea>
    </div>

    <button class="btn-envoyer">Envoyer</button>

</form>

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>
