<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <h2>Page accueil</h2>
    <a href='<?php echo $this->url('utilisateur_connexion'); ?>'>Connexion</a>
    <a href='<?php echo $this->url('utilisateur_inscription'); ?>'>Inscription</a>
<?php $this->stop('main_content') ?>

