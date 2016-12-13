<!DOCTYPE html>

<html lang="fr">
    <head>
        <title><?php echo $this->e($title); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- $this->assetUrl('css/style.css') vaudra 'assets/css/style.css' -->
        <link rel="stylesheet" href="<?php echo $this->assetUrl('css/reset.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->assetUrl('css/style.css'); ?>" type="text/css" />
    </head>
    <body>

		<header>
			<h1><?php echo $this->e($title); ?></h1>
		</header>
		<main>

			<section>
                            
				<?= $this->section('main_content') ?>
			</section>
		</main>
		<footer>
		</footer>
		<script
			src="https://code.jquery.com/jquery-2.2.4.js"
			integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
		crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo $this->assetUrl('js/adjust-style.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->assetUrl('js/close-flash-messages.js') ?>"></script>
		<?php $sectionJavascripts = $this->section('javascripts');
			if( ! empty($sectionJavascripts)) {
				echo $sectionJavascripts;
			}
		?>
 	</body>

</html>

