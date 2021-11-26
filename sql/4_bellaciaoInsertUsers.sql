/* Création des utilisateurs de base */
INSERT INTO `representants`
(
    nomRepresentant, 
    prenomRepresentant, 
    mailRepresentant, 
    telephoneRepresentant, 
    mdpRepresentant, 
    autorisationRepresentant, 
    idSociete
)
VALUES 
(
    'Lionte',
    'Stefano',
    'stefanolionte@yahoo.fr',
    '06 31 52 91 76',
    'stefano',
    '1',
    '1'
), 
(
    'Mollet',
    'Rudy',
    'mollet.rudy@gmail.com',
    '06 28 18 86 67',
    'rudy',
    '1',
    '2'
), 
(
    'Lanfort',
    'Maxime',
    'lanfortmaxime@gmail.com',
    '06 70 65 48 41',
    'maxime',
    '1',
    '2'
), 
(
    'Giuffre',
    'Philippe',
    'gpgretaweb@gmail.com',
    '06 61 77 58 89',
    'philippe',
    '1',
    '2'
),  
(
    'Fredouelle',
    'Théo',
    'fredouelletheo@gmail.com',
    '07 84 58 89 30',
    'theo',
    '1',
    '2'
);