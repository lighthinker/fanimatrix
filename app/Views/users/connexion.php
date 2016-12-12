<?php $this->layout('layoutEmpty', ['title' => 'Connectez-vous !']); ?>

<?php $this->start('main_content'); ?>

<h2>Tu dois te logger pour entrer dans la matrice</h2>



<form action="<?php $this->url('utilisateur_connexion') ?>" method="POST">
	<p>
		<label for="pseudo">
			Pseudo :
		</label>
		<input type="text" name="pseudo" id="pseudo" value="<?php echo isset($datas['pseudo']) ? $datas['pseudo'] : '' ?>"/>
	</p>
	<p>
		<label for="mot_de_passe">
			Mot de passe :
		</label>
		<input type="password" name="mot_de_passe" id="mot_de_passe" />
	</p>
	<p>
		<input type="submit" class="button" value="Me connecter"/>
        </p>
        <p>
		<a class="button" href="<?php echo $this->url('utilisateur_inscription') ?>" title="Accéder à la page d'inscription">
			Créer un compte matrixienne 
		</a>
                
	</p>

</form>

<?php $this->stop('main_content'); ?>


