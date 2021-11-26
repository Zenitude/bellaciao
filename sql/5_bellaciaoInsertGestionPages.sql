/* Création de la NavHeader */
INSERT INTO `gestionpages`
(
    nomDeLaPage,
    nomPage,
    lienLogo,
    lienMainCss,
    lienMediaCss,
    lienAccueil,
    lienConnection,
    lienInscription,
    lienContact,
    lienDownload,
    lienGestion,
    srcDeconnection,
    activeAccueil,
    activeConnection,
    activeInscription,
    activeContact,
    activeDownload,
    activeGestion,
    scriptFooter
)
VALUES 
(
    'index.php',
    'Accueil',
    'ressources/logo.png',
    'styles/main.css',
    'styles/mediaQueries.css',
    'index.php',
    'pages/connection.php',
    'pages/inscriptionEtape1.php',
    'pages/contact.php',
    'pages/download.php',
    'pages/admin.php',
    'ressources/deconnection.png',
    'active',
    '',
    '',
    '',
    '',
    '',
    'scripts/app.js'
),
(
    'connection.php',
    'Connexion',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    '',
    'contact.php',
    '',
    '',
    '../ressources/deconnection.png',
    '',
    'active',
    '',
    '',
    '',
    '',
    '../scripts/app.js'
),
(
    'inscriptionEtape1.php',
    'Inscription',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    'inscriptionEtape1.php',
    'contact.php',
    'download.php',
    'admin.php',
    '../ressources/deconnection.png',
    '',
    '',
    'active',
    '',
    '',
    '',
    '../scripts/app.js'
),
(
    'inscriptionEtape2.php',
    'Inscription',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    'inscriptionEtape1.php',
    'contact.php',
    'download.php',
    'admin.php',
    '../ressources/deconnection.png',
    '',
    '',
    'active',
    '',
    '',
    '',
    '../scripts/app.js'
),
(
    'inscriptionEtape3.php',
    'Inscription',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    'inscriptionEtape1.php',
    'contact.php',
    'download.php',
    'admin.php',
    '../ressources/deconnection.png',
    '',
    '',
    'active',
    '',
    '',
    '',
    '../scripts/app.js'
),
(
    'inscriptionEtapeFinale.php',
    'Inscription',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    'inscriptionEtape1.php',
    'contact.php',
    'download.php',
    'admin.php',
    '../ressources/deconnection.png',
    '',
    '',
    'active',
    '',
    '',
    '',
    '../scripts/app.js'
),
(
    'contact.php',
    'Contact',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    'inscriptionEtape1.php',
    'contact.php',
    'download.php',
    'admin.php',
    '../ressources/deconnection.png',
    '',
    '',
    '',
    'active',
    '',
    '',
    '../scripts/app.js'
),
(
    'download.php',
    'Téléchargement',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    'inscriptionEtape1.php',
    'contact.php',
    'download.php',
    'admin.php',
    '../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    'active',
    '',
    '../scripts/app.js'
),
(
    'admin.php',
    'Gestion',
    '../ressources/logo.png',
    '../styles/main.css',
    '../styles/mediaQueries.css',
    '../index.php',
    'connection.php',
    'inscriptionEtape1.php',
    'contact.php',
    'download.php',
    'admin.php',
    '../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../scripts/app.js'
),
(
    'ajouterLogiciel.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'ajouterSociete.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'ajouterUtilisateur.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'genererMdpUtilisateur.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'listerLogiciel.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'listerMessage.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'listerSociete.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'listerUtilisateur.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'modifierLogiciel.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'modifierSociete.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'modifierUtilisateur.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'supprimerLogiciel.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'supprimerMessage.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'supprimerSociete.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
),
(
    'supprimerUtilisateur.php',
    'Gestion',
    '../../../ressources/logo.png',
    '../../../styles/main.css',
    '../../../styles/mediaQueries.css',
    '../../../index.php',
    '../../connection.php',
    '../../inscriptionEtape1.php',
    '../../contact.php',
    '../../download.php',
    '../../admin.php',
    '../../../ressources/deconnection.png',
    '',
    '',
    '',
    '',
    '',
    'active',
    '../../../scripts/app.js'
);