<?php $this->layout('layout', ['title' => 'Redigez un message']); ?>

<?php $this->start('main_content'); ?>

<h2>Connectez-vous à T'Chat</h2>


<form action="<?php $this->url('default_home') ?>" method="POST">

		<input type="text-area" 
			   name="texte" 
			   id="texte" 
			   value=""/>

	<p>
		<input type="submit" class="button" value="Me connecter"/>
		<a class="button" href="#" title="envoyer votre message">
			Pas encore inscrit ?
		</a>
	</p>

</form>

<?php $this->stop('main_content'); ?>