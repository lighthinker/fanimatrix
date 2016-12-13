<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
                ['GET|POST', '/connexion', 'Utilisateur#login', 'utilisateur_connexion'],  
                ['GET|POST', '/inscription', 'Utilisateur#register', 'utilisateur_inscription'],
                ['GET|POST', '/post-message', 'Message#postMessage', 'message'],
                ['GET|POST', '/maMatrice', 'Utilisateur#actionProfil', 'profil'],
                ['GET|POST', '/home', 'Home#home', 'home'],
                ['GET|POST', '/article', 'Article#ajoutArticle', 'add_article'] 
	);