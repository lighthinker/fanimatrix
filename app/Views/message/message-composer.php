<?php $this->layout('layout', ['title' => 'Redigez un message']); ?>

<?php $this->start('main_content'); ?>

<h2>Message Privé</h2>


<form action="<?php $this->url('default_home') ?>" method="POST">

	
        <textarea class="form-control" rows="5" id="msg"></textarea>

	<p>
		<input type="submit" class="button" value="Envoyer"/>
                <a class="button" href="#" title="envoyer votre message">
		</a>
	</p>

</form>

<?php $this->stop('main_content'); ?>