-- Création de la base de données
CREATE DATABASE moteur_recherche CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Utilisation de la base de données
USE moteur_recherche;

-- Table `elements` pour stocker les éléments
CREATE TABLE elements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,       -- Nom de l'élément
    description TEXT NOT NULL,        -- Description de l'élément
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Date de création
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Dernière mise à jour
);

-- Insertion de données initiales
INSERT INTO elements (name, description) VALUES
('Ordinateur', 'Un appareil électronique permettant de traiter des informations.'),
('Téléphone', 'Un appareil de communication portable.'),
('Livre', 'Un ensemble de pages reliées contenant du texte ou des images.'),
('Table', 'Un meuble permettant de poser des objets.'),
('Chaise', 'Un meuble pour s\'asseoir.'),
('Lampe', 'Un appareil pour éclairer une pièce.'),
('Clavier', 'Un périphérique d\'entrée pour ordinateur.'),
('Souris', 'Un périphérique de pointage pour ordinateur.');
