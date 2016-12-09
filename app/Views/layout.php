<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->assetUrl('css/menu_style.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->assetUrl('css/my_style.css') ?>">
	</head>

	<body>
		
		<video autoplay loop poster="backvid.jpg" id="vid">
  		<source src="backvid.webm" type="video/webm">
  		<source src="backvid.mp4" type="video/mp4">
		</video>
		
		<div class="colorAll">
		
			<header class="black_background">

				<h1>CHOOSE YOUR PILL</h1>
		</div>
				
		<div id="navigation" class="colorAll">
				
				<nav>
					<div class="menu-container">
						<ul class="menu">
							<li><a href="">LA TRILOGIE</a></li>
								<ul>
									<li><a href="">Matrix 1</li>
									<li><a href="">Matrix 2</li>
									<li><a href="">Matrix 3</li>
								</ul>
							<li><a href="">LES PERSONNAGES</a></li>
								<ul>
									<li><a href="">Principaux</li>
									<li><a href="">Secondaires</li>
								</ul>
							<li><a href="">LES SYMBOLIQUES</a></li>
							<li><a href="">FAN MADE</a></li>
                                                        <li><a href="<?php echo $this->url('profil') ?>">MA MATRICE</a></li>
                                                       
						</ul>

					<ul>
						
						<li><a href=""><i class="fa fa-sign-out" id="deconIcon" aria-hidden="true"></i></a>
						</li>
                                                <li>Utilisateurs : <?php echo $w_user ?></li>
					</ul>
			
				</nav>
		
			</header>
 
                    <main><?= $this->section('main_content') ?></main>
            
            <?php if($w_current_route !='profil'):?>       
            <div id="rigthCol">

		<div class="colorAll">		
									
                                        <section class="black_background" id="bestart">
							
                                                <h2>Articles les plus recherchés</h2>

                                                 <?php foreach ($liste_article as $articles) : ?>
                                                <p class="articles"><a href=""><?php echo $articles['titre'] ?></a></p>
                                                <?php endforeach; ?>

					</section>

					<section class="black_background" id="comment">
						
                                             
						<h2>Commentaires les plus récents</h2>
                                             
                                            <?php foreach ($comments as $comment) : ?>
						<p><a href=""><?php echo $comment['contenu'] ?></a></p>
                                            <?php endforeach; ?>
					
					</section>
                    </div>		
            </div>
             <?php endif;?>     

			</main>

		</div>

		<footer class="black_background">
			
			<aside><a href="">C'est quoi CHOOSE YOUR PILL.net ?</a></aside>
			<aside>©2016</aside>
			
		</footer>

		<!-- [if lt IE 9] -->
		<script>
		document.createElement('video');
		</script>
		<!-- [endif] -->

		<script>
			$(document).ready(function(){

			$("ul.menu li:has(ul)").hover(function(){
  			$(this).find("ul").slideDown("fast");
  			},function(){
    			$(this).find("ul").slideUp("fast");
  			}
			)
 
			$("ul.menu > li").hover(function(){
  			$(this).addClass('current');
			},function(){
  			$(this).removeClass('current');
			});
 
			$("ul.menu li a:has(ul)").addClass('with-child');

			});

		</script>

		<script
  		src="https://code.jquery.com/jquery-2.2.4.min.js"
  		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  		crossorigin="anonymous"></script>

		<script src="//code.jquery.com/jquery.min.js"></script>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	

	</body>

</html>
