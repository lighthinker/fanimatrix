<?php
	
	$w_routes = array(
		
                ['GET|POST', '/connexion', 'Utilisateur#connexion', 'utilisateur_connexion'],  
                ['GET|POST', '/inscription', 'Utilisateur#inscription', 'utilisateur_inscription'],
                ['GET|POST', '/post-message', 'Message#postMessage', 'message'],
                ['GET|POST', '/maMatrice', 'Utilisateur#actionProfil', 'profil'],
                ['GET|POST', '/home', 'Home#home', 'home']                
	);