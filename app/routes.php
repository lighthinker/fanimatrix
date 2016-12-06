<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
                ['GET|POST', '/login', 'User#login', 'login'],  
                ['GET|POST', '/register', 'User#register', 'register'],
                ['GET|POST', '/post-message', 'Message#postMessage', 'message']
	);