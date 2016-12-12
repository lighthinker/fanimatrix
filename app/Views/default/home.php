<?php $this->layout('layoutEmpty', ['title' => 'Premiere Page']) ?>

<?php $this->start('main_content') ?>

<a href="<?php echo $this->url('utilisateur_connexion')?>" >connexion</a> 
<a href="<?php echo $this->url('utilisateur_inscription')?>" >inscription</a> 

<?php $this->stop('main_content') ?>
