<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<?= $this->section('link_href')?>
</head>
<body>
	<div class="container">
		<header>
			<h1>MATRIX :: <?= $this->e($title) ?></h1>
		</header>
            
            <div><?php echo 'Pseudo : '.$w_user['pseudo']?></div>
            <div><?php echo 'Rôle : '.$role['role']?></div>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer class="black_background">
			
			<aside><a href="">C'est quoi CHOOSE YOUR PILL.net ?</a></aside>
			<aside>©2016</aside>
			
		</footer>
	</div>
</body>

		<!-- </div> -->

	
		<!-- [if lt IE 9] -->
		 <!--Place du script video-->
                 <?php if ($w_current_route== 'add_article'):?>
                           <?= $this->section('script') ?>         
                 <?php endif; ?>
		<!-- [endif] -->

		<script
  		src="https://code.jquery.com/jquery-2.2.4.min.js"
  		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  		crossorigin="anonymous"></script>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	

</html>