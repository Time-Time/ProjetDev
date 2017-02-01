-- ---------------------------------------------------------------------------- --
--						 CREATION DE L'ENVIRONNEMENT		 	   		 	    --
-- ---------------------------------------------------------------------------- --
--	TABLE UTILISATEUR
	DROP TABLE IF EXISTS utilisateur;
	CREATE TABLE utilisateur (
		ut_id MEDIUMINT NOT NULL AUTO_INCREMENT,
		ut_pseudo CHAR(30) NOT NULL,
		ut_mdp CHAR(30) NOT NULL,
		ut_droit INT NOT NULL,
		PRIMARY KEY (ut_id)
	)
	-- Type du moteur de stockage. Facilement modifiable.
	ENGINE=MyISAM;
	
	INSERT INTO utilisateur (ut_pseudo, ut_mdp, ut_droit) VALUES
		('Tim', '1234', '1'),
		('Sim', '1234', '1');

	SELECT * FROM utilisateur ORDER BY ut_pseudo;
	
--	TABLE objet
	DROP TABLE IF EXISTS objet;
	CREATE TABLE objet (
		obj_id MEDIUMINT NOT NULL AUTO_INCREMENT,
		obj_libelle CHAR(30) NOT NULL,
		--	CHAR a pour taille maximum 255.
		obj_description VARCHAR(2000) NOT NULL,
		PRIMARY KEY (obj_id)
	)
	-- Type du moteur de stockage. Facilement modifiable.
	ENGINE=MyISAM;
	
	INSERT INTO objet (obj_libelle, obj_description) VALUES
		('boule de verre', 'Une boule de verre est un objet sphérique et translucide.'),
		('Rotopitou', 'Personne ne sait ce qu''est un rotopitou');

	SELECT * FROM objet ORDER BY obj_libelle;
	
--	TABLE commentaire
	DROP TABLE IF EXISTS commentaire;
	CREATE TABLE commentaire (
		com_id MEDIUMINT NOT NULL AUTO_INCREMENT,
		com_auteurId CHAR(30) NOT NULL,
		com_objetId CHAR(30) NOT NULL,
		--	CHAR a pour taille maximum 255, d'où l'utilisation du VARCHAR.
		com_description VARCHAR(2000) NOT NULL,
		--	Date de la création du commentaire.
		com_date DATE NOT NULL,
		PRIMARY KEY (com_id)
	)
	-- Type du moteur de stockage. Facilement modifiable.
	ENGINE=MyISAM;

	SELECT * FROM commentaire GROUP BY com_id ORDER BY com_date;
	
-- ---------------------------------------------------------------------------- --
--							   PROCEDURES STOCKEES		 					    --
-- ---------------------------------------------------------------------------- --
	
--	PROCEDURE ps_commentaire_GET_commentaireObjet(idObjet)
	DROP PROCEDURE IF EXISTS ps_commentaire_GET_commentaireObjet;
	CREATE PROCEDURE ps_commentaire_GET_commentaireObjet(
		IN idObjet CHAR(30))
		COMMENT 'Renvoie tous les commentaires associés à un objet, classés par date.' NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
		SELECT * FROM commentaire WHERE com_id = idObjet ORDER BY com_date;
		
--	PROCEDURE ps_commentaire_INSERT_commentaire(idObjet, libelleObjet, descriptionObjet)
	DROP PROCEDURE IF EXISTS ps_commentaire_INSERT_commentaire;
	CREATE PROCEDURE ps_commentaire_INSERT_commentaire(
		IN idObjet CHAR(30),
		IN libelleObjet CHAR(30),
		IN descriptionObjet CHAR(30))
		COMMENT 'Insère un nouveau commentaire dans la table des commentaires.' NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
		INSERT INTO commentaire (com_auteurId, com_objetId, com_description, com_date)
			VALUES(idObjet, libelleObjet, descriptionObjet, CURRENT_DATE());
				
--	PROCEDURE ps_utilisateur_GET_utilisateurListe()
	DROP PROCEDURE IF EXISTS ps_utilisateur_GET_utilisateurListe;
	CREATE PROCEDURE ps_utilisateur_GET_utilisateurListe()
		COMMENT 'Renvoie la liste de tous les utilisateurs inscrit sur le site.' NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
		SELECT ut_id, ut_pseudo FROM utilisateur;
		
--	PROCEDURE ps_utilisateur_INSERT_utilisateur(pseudoUtilisateur, motDePassseUtilisateur, dateUtilisateur)
--	DROP PROCEDURE IF EXISTS ps_utilisateur_INSERT_utilisateur;
--	CREATE PROCEDURE `ps_utilisateur_INSERT_utilisateur`(
--		IN `pseudoUtilisateur` CHAR(30),
--		IN `motDePassseUtilisateur` CHAR(30),
--		IN `droitUtilisateur` INT,
--		OUT `retour` INT)
--		COMMENT 'Insère un nouvel utilisateur dans la base si le pseudo fourni est disponible.'
--		NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
--        IF (1 > 0) THEN
--            SET @retour = 1;
--        ELSE
--            SET @retour = 2;
--        END IF
--        SELECT @retour;
--        
--		
--		
--		
--		
--		IF (SELECT COUNT(*) FROM utilisateur WHERE ut_pseudo = pseudoUtilisateur < 1) THEN
--			INSERT INTO utilisateur (ut_pseudo, ut_mdp, ut_droit)
--				VALUES(pseudoUtilisateur, motDePassseUtilisateur, droitUtilisateur)
--			SET retour = 'L utilisateur a ete cree.';
--	
--		ELSE
--			SET retour = 'Ce pseudo existe déjà.';
--		END IF;
--		-- PROCEDURE POUR TESTS --
--		DROP PROCEDURE IF EXISTS ps_test;
--		CREATE PROCEDURE `ps_test`(OUT `retour` INT)
--			IF (1 > 0) THEN
--				SET @retour = 1;
--			ELSE
--				SET @retour = 2;
--			END IF
--			SET @retour = 1;
--			SELECT @retour;
        


			
			
--	PROCEDURE ps_utilisateur_DELETE_utilisateur(idUtilisateur)
	DROP PROCEDURE IF EXISTS ps_utilisateur_DELETE_utilisateur;
	CREATE PROCEDURE ps_utilisateur_DELETE_utilisateur(
		IN idUtilisateur MEDIUMINT(30))
		COMMENT 'Supprime un utilisateur de la base.' NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
		DELETE FROM utilisateur WHERE ut_id = idUtilisateur;

--	PROCEDURE ps_objet_GET_objetListe()
	DROP PROCEDURE IF EXISTS ps_objet_GET_objetListe;
	CREATE PROCEDURE ps_objet_GET_objetListe()
		COMMENT 'Renvoie la liste de tous les objets.' NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
		SELECT obj_id, obj_libelle FROM objet;
		
--	PROCEDURE ps_objet_INSERT_objet(libelleObjet, descriptionObjet)
	DROP PROCEDURE IF EXISTS ps_objet_INSERT_objet;
	CREATE PROCEDURE ps_objet_INSERT_objet(
		IN libelleObjet CHAR(30),
		IN descriptionObjet VARCHAR(2000))
		COMMENT 'Insère un nouvel objet.' NOT DETERMINISTIC MODIFIES SQL DATA SQL SECURITY DEFINER
		INSERT INTO objet (obj_libelle, obj_description)
			VALUES(libelleObjet, descriptionObjet);
		
--	PROCEDURE ps_utilisateur_connexion(pseudoUtilisateur, mdpUtilisateur)
--	DROP PROCEDURE IF EXISTS ps_utilisateur_connexion;
--	CREATE PROCEDURE ps_utilisateur_connexion(
--		IN pseudoUtilisateur CHAR(30),
--		IN mdpUtilisateur CHAR(30))
--		COMMENT 'Insère un nouvel objet.' NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
		--	VARIABLES
--		DECLARE existenceUtilisateur INTEGER;
--		SET existenceUtilisateur = 1;
--		SELECT * FROM utilisateur;
		-- SET existenceUtilisateur = SELECT COUNT(*) FROM utilisateur WHERE mdpUtilisateur = mdpUtilisateur;
		-- BEGIN
			-- IF (existenceUtilisateur > 0)
				-- RETURN 1;
			-- ELSE
				-- RETURN 0;
		-- END;
	
	
	
	--	Savoir déclarer des variables dans les procédures stockées MySQL;