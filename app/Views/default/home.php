<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <h2>Page Home</h2>
    <a href='<?php echo $this->url('login'); ?>'>Connexion</a>
	
<?php $this->stop('main_content') ?>
