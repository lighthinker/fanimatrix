<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
                ['GET|POST', '/connexion', 'Utilisateur#connexion', 'utilisateur_connexion'],  
                ['GET|POST', '/inscription', 'Utilisateur#inscription', 'utilisateur_inscription'],
                ['GET|POST', '/post-message', 'Message#postMessage', 'message']
	);
