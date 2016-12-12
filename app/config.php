<?php 

$w_config = [
   	//information de connexion à la bdd
	'db_host' => 'localhost',						//hôte (ip, domaine) de la bdd
    'db_user' => 'root',							//nom d'utilisateur pour la bdd
    'db_pass' => '',								//mot de passe de la bdd
    'db_name' => 'matrix',								//nom de la bdd
    'db_table_prefix' => '',						//préfixe ajouté aux noms de table

	//authentification, autorisation
	'security_utilisateur_table' => 'utilisateur',				//nom de la table contenant les infos des utilisateurs
	'security_id_property' => 'id',					//nom de la colonne pour la clef primaire
	'security_pseudo_property' => 'pseudo',		//nom de la colonne pour le "pseudo"
	'security_email_property' => 'email',			//nom de la colonne pour l'"email"
	'security_mdp_property' => 'mdp',		//nom de la colonne pour le "mot de passe"
	'security_statut_property' => 'statut',			//nom de la colonne pour le "role"
	'security_sexe_property' => 'sexe',
        'security_presentation_property' => 'presentation',
        'security_ville_property' => 'ville',
        'security_age_property' => 'age',

	'security_login_route_name' => 'utilisateur_connexion',			//nom de la route affichant le formulaire de connexion

	// configuration globale
	'site_name'	=> 'chooseyourpill', 								// contiendra le nom du site
];

require('routes.php');

