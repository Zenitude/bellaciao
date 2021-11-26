/* Création de la table des Sociétés */

CREATE TABLE `bellaciao`.`societes` 
(

    `idSociete` INT NOT NULL AUTO_INCREMENT,
    `raisonSociale` TEXT NOT NULL,
    `adresseSociete` VARCHAR(255) DEFAULT '',
    `cpSociete` INT(11) DEFAULT 0,
    `villeSociete` VARCHAR(255) DEFAULT '',
    `telephoneSociete` VARCHAR(20) DEFAULT '',
    `mailSociete` VARCHAR(255) DEFAULT '',
    PRIMARY KEY (`idSociete`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Création de la table des Représentants */

CREATE TABLE `bellaciao`.`representants` 
(

    `idRepresentant` INT NOT NULL AUTO_INCREMENT, 
    `nomRepresentant` VARCHAR(255) DEFAULT '', 
    `prenomRepresentant` VARCHAR(255) DEFAULT '', 
    `mailRepresentant` VARCHAR(255) DEFAULT '',
    `telephoneRepresentant` VARCHAR(20) DEFAULT '', 
    `mdpRepresentant` VARCHAR(255) DEFAULT '', 
    `autorisationRepresentant` BOOLEAN DEFAULT false,
    `idSociete` INT DEFAULT 0, 
    CONSTRAINT societe FOREIGN KEY (idSociete) REFERENCES societes(idSociete),
    PRIMARY KEY (`idRepresentant`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Création de la Table des Messages */

CREATE TABLE `bellaciao`.`messages` 
(

    `idMessage` INT NOT NULL AUTO_INCREMENT,
    `dateMessage` DATE NOT NULL,
    `contenuMessage` TEXT  NOT NULL, 
    `idRepresentant` INT NOT NULL,
    CONSTRAINT representant FOREIGN KEY (idRepresentant) REFERENCES representants(idRepresentant),
    PRIMARY KEY (`idMessage`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Création de la table des Versions du Logiciel */
CREATE TABLE `bellaciao`.`logiciels` 
(

    `idLogiciel` INT NOT NULL AUTO_INCREMENT, 
    `numeroVersion` VARCHAR(255) DEFAULT '', 
    `dateVersion` DATE NOT NULL,
    `emplacementLogiciel` VARCHAR(255) DEFAULT '', 
    PRIMARY KEY (`idLogiciel`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Création de la table contenant les informations de la Navbar principale */

CREATE TABLE `bellaciao`.`gestionpages` 
(
    `idMenu` INT NOT NULL AUTO_INCREMENT, 
    `nomDeLaPage` TEXT NOT NULL, 
    `nomPage` TEXT NOT NULL, 
    `lienLogo` TEXT NOT NULL,
    `lienMainCss` TEXT NOT NULL,
    `lienMediaCss` TEXT NOT NULL,
    `lienAccueil` TEXT NOT NULL,
    `lienConnection` TEXT NOT NULL,
    `lienInscription` TEXT NOT NULL,
    `lienContact` TEXT NOT NULL,
    `lienDownload` TEXT NOT NULL,
    `lienGestion` TEXT NOT NULL,
    `srcDeconnection` TEXT NOT NULL,
    `activeAccueil` TEXT NOT NULL,
    `activeConnection` TEXT NOT NULL,
    `activeInscription` TEXT NOT NULL,
    `activeContact` TEXT NOT NULL,
    `activeDownload` TEXT NOT NULL,
    `activeGestion` TEXT NOT NULL,
    `scriptFooter` TEXT NOT NULL,
    PRIMARY KEY (`idMenu`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
