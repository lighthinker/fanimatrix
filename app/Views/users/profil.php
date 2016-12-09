       
<?php $this->layout('layout', ['title' => 'Inscrivez-vous !']) ?>

<?php $this->start('main_content'); ?>

<h2>Pages profil</h2>

<h3> Bienvenue <?php $w_user ?></h3>
<img>Avatar</img>
      <p>
		<label for="mot_de_passe">
			Changer Mot de passe :
		</label>
		<input type="password" name="mot_de_passe" id="mot_de_passe" />
       </p>

       <p>
		<label for="mot_de_passe">
			confirmer changement Mot de passe :
		</label>
		<input type="password" name="mot_de_passe_confirm" id="mot_de_passe" />
      </p>
       <p>
		<input type="submit" class="button" value="Valider"/>
		<a class="button" href="#" title="Con">
			Pas encore inscrit ?
		</a>
	</p>
        
<?php $this->stop('main_content'); ?>