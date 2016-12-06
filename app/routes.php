<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
                ['GET|POST', '/login', 'User#login', 'login'],                
	);