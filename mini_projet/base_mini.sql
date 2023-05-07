create database mini_projet;
	\c mini_projet
CREATE TABLE admin(
	email VARCHAR(20),
	password VARCHAR(255)
);
INSERT INTO admin VALUES('ravaka@gmail.com','ravaka123');

CREATE TABLE utilisateur(
	id_user SERIAL,
	nom VARCHAR(20),
	email VARCHAR(30),
	password VARCHAR(255)
);
INSERT INTO utilisateur (nom,email,password) VALUES ('rakot','rakot@gmail.com','rakot123');
CREATE TABLE domaine(
	id_domaine SERIAL,
	libelle VARCHAR(100)
);
INSERT INTO domaine(libelle) VALUES 
('evolution de la societe'),('marcher de IA'),('Produits commerceaux'),('Recherche');
ALTER TABLE domaine ADD PRIMARY KEY(id_domaine);
CREATE TABLE secteur(
	id_secteur SERIAL,
	libelle VARCHAR(100)
);
ALTER TABLE secteur ADD PRIMARY KEY(id_secteur);
INSERT INTO secteur (libelle) VALUES 
('transport'),('sante et medecine'),('environement'),('education'),('emploi'),('medias'),('vie courants');
CREATE TABLE contenu(
	id_contenu SERIAL,
	titre VARCHAR(200),
	date_sortie DATE DEFAULT NOW(),
	id_domaine INT,
	id_secteur INT,
	description text,
	image VARCHAR(100),
	illustrateur VARCHAR(100)

);
CREATE TABLE contenu_image(
	id_contenu INT,
	image VARCHAR(20)
);

INSERT INTO contenu_image VALUES
(1,'1.jpg'),(1,'2.jpg'),(1,'3.jpg'),
(2,'a.jpg'),(2,'b.jpg'),(2,'c.jpg'),
(3,'4.jpg'),(3,'5.jpg'),(3,'6.jpg'),
(4,'d.jpg'),(4,'e.jpg'),(4,'f.jpg');
CREATE VIEW pub as 
SELECT c.*,s.libelle as secteur,d.libelle as domaine FROM contenu as c 
JOIN secteur as s ON c.id_secteur=s.id_secteur
JOIN domaine as d ON c.id_domaine=d.id_domaine;
ALTER TABLE contenu ADD image VARCHAR(100);
ALTER TABLE contenu ADD PRIMARY KEY (id_contenu);
ALTER TABLE contenu ADD FOREIGN KEY (id_domaine) REFERENCES domaine(id_domaine);
ALTER TABLE contenu ADD FOREIGN KEY (id_secteur) REFERENCES secteur(id_secteur);


