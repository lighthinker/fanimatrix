<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/my_style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>MATRIX :: <?= $this->e($title) ?></h1>
		</header>
            
            <div><?php echo 'Pseudo : '.$w_user['pseudo']?></div>
            <div><?php echo 'role : '.$role['role']?></div>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>