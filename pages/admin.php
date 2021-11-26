<!-- Header -->
<?php $nomDeLaPage = basename(__FILE__); include_once('insertions/header.php'); ?>

<!-- Body -->

<?php if(isset($_SESSION['mailUser']) && $_SESSION['adminUser'] == 1 ): ?>

    <h1>Gestion administrateur</h1>

    <!-- Gestion des version de fichier -->
    <section id="logiciels">

        <div class="containerAdmin">

            <header>
                <h2>Logiciels</h2>
                <hr>
            </header>

            <div class="containerContenu">

                <div class="containerBtns">
                    <a href="gestion/logiciels/listerLogiciel.php" class="btn-lister">
                        <img src="../ressources/lister-black.png" alt="lister les logiciels">
                    <br>Lister</a>

                    <a href="gestion/logiciels/ajouterLogiciel.php" class="btn-ajouter">
                        <img src="../ressources/ajouter-black.png" alt="ajouter un logiciel">
                    <br>Ajouter</a>

                    <a href="gestion/logiciels/modifierLogiciel.php" class="btn-modifier">
                        <img src="../ressources/modifier-black.png" alt="modifier un logiciel">
                    <br>Modifier</a>
                    <a href="gestion/logiciels/supprimerLogiciel.php" class="btn-supprimer">
                        <img src="../ressources/supprimer-black.png" alt="supprimer un logiciel">
                    <br>Supprimer</a>
                </div>

                <hr>

                <div class="containerCompteur">
                    <h3>Nombre de versions</h3>
                    <?php
                        $sqlqueryCompteLogiciel = "SELECT * FROM `logiciels`";
                        $queryCompteLogiciel = $bddBellaCiao->prepare($sqlqueryCompteLogiciel);
                        $queryCompteLogiciel->execute();
                        $CompteLogiciel = $queryCompteLogiciel->fetchAll();
                        $nombreLogiciel = count($CompteLogiciel);
                        echo '<p>'.$nombreLogiciel.'</p>'; 
                    ?>
                </div>

            </div>

        </div>
        

    </section>

    <!-- Gestion des Societes -->
    <section id="societes">

        <div class="containerAdmin">

            <header>
                <h2>Sociétés</h2>
                <hr>
            </header>

            <div class="containerContenu">

                <div class="containerBtns">
                    <a href="gestion/societes/listerSociete.php" class="btn-lister">
                        <img src="../ressources/lister-black.png" alt="lister les sociétés">
                    <br>Lister</a>

                    <a href="gestion/societes/ajouterSociete.php" class="btn-ajouter">
                        <img src="../ressources/ajouter-black.png" alt="ajouter une société">
                    <br>Ajouter</a>

                    <a href="gestion/societes/modifierSociete.php" class="btn-modifier">
                        <img src="../ressources/modifier-black.png" alt="modifier une société">
                    <br>Modifier</a>

                    <a href="gestion/societes/supprimerSociete.php" class="btn-supprimer">
                        <img src="../ressources/supprimer-black.png" alt="supprimer une société">
                    <br>Supprimer</a>
                </div>

                <hr>

                <div class="containerCompteur">
                    <h3>Nombre de sociétés</h3>
                    <?php
                        $sqlqueryCompteSociete = "SELECT * FROM `societes`";
                        $queryCompteSociete = $bddBellaCiao->prepare($sqlqueryCompteSociete);
                        $queryCompteSociete->execute();
                        $CompteSociete = $queryCompteSociete->fetchAll();
                        $nombreSociete = count($CompteSociete);
                        echo '<p>'.$nombreSociete.'</p>'; 
                    ?>
                </div>

            </div>

        </div>
        
    </section>

    <!-- Gestion des Utilisateurs -->
    <section id="utilisateurs">

        <div class="containerAdmin">

            <header>
                <h2>Utilisateurs</h2>
                <hr>
            </header>

            <div class="containerContenu">

                <div class="containerBtns">
                    <a href="gestion/utilisateurs/listerUtilisateur.php" class="btn-lister">
                        <img src="../ressources/lister-black.png" alt="lister les utilisateurs">
                    <br>Lister</a>

                    <a href="gestion/utilisateurs/ajouterUtilisateur.php" class="btn-ajouter">
                        <img src="../ressources/ajouter-black.png" alt="ajouter un utilisateur">
                    <br>Ajouter</a>

                    <a href="gestion/utilisateurs/modifierUtilisateur.php" class="btn-modifier">
                        <img src="../ressources/modifier-black.png" alt="modifier un utilisateur">
                    <br>Modifier</a>

                    <a href="gestion/utilisateurs/supprimerUtilisateur.php" class="btn-supprimer">
                        <img src="../ressources/supprimer-black.png" alt="supprimer un utilisateur">
                    <br>Supprimer</a>

                    <a href="gestion/utilisateurs/genererMdpUtilisateur.php" class="btn-nouveau">
                        <img src="../ressources/modifMdp-black.png" alt="générer un nouveau mot de passe utilisateur">
                    <br>Mot de passe</a>
                </div>

                <hr>

                <div class="containerCompteur">
                    <h3>Nombre d'utilisateurs</h3>
                    <?php
                        $sqlqueryCompteUtilisateur = "SELECT * FROM `representants`";
                        $queryCompteUtilisateur = $bddBellaCiao->prepare($sqlqueryCompteUtilisateur);
                        $queryCompteUtilisateur->execute();
                        $CompteUtilisateur = $queryCompteUtilisateur->fetchAll();
                        $nombreUtilisateur = count($CompteUtilisateur);
                        echo '<p>'.$nombreUtilisateur.'</p>'; 
                    ?>
                </div>
            </div>

        </div>    

    </section>

    <!-- Gestion des Messages -->
    <section id="messages">

        <div class="containerAdmin">

            <header>
                <h2>Messages</h2>
                <hr>
            </header>

            <div class="containerContenu">

                <div class="containerBtns">
                    <a href="gestion/messages/listerMessage.php" class="btn-lister">
                        <img src="../ressources/lister-black.png" alt="lister les messages">
                    <br>Lister</a>

                    <a href="gestion/messages/supprimerMessage.php" class="btn-supprimer">
                        <img src="../ressources/supprimer-black.png" alt="supprimer une message">
                    <br>Supprimer</a>
                </div>

                <hr>

                <div class="containerCompteur">
                    <h3>Nombre de messages</h3>
                    <?php
                        $sqlqueryCompteMessage = "SELECT * FROM `messages`";
                        $queryCompteMessage = $bddBellaCiao->prepare($sqlqueryCompteMessage);
                        $queryCompteMessage->execute();
                        $CompteMessage = $queryCompteMessage->fetchAll();
                        $nombreMessage = count($CompteMessage);
                        echo '<p>'.$nombreMessage.'</p>'; 
                    ?>
                </div>
            </div>

        </div> 

    </section>

<?php else: header("Refresh:0; url=../index.php"); ?>

<?php endif; ?>

<!-- Footer -->
<?php include_once('insertions/footer.php'); ?>