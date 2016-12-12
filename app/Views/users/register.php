<?php function afficherData($champ, $datas) {
    // je vérifie qu'une valeur a bien été postée pour ce nom de champ
    // et si c'est le cas, j'affiche cette valeur
    echo (!empty($datas[$champ]) ? $datas[$champ] : '' ) ;
}

function afficherCheck( $valeurAttendue ,$datas) {
    
    // si on renseigné un sexe en POST et que la valeur entrée en POST est celle
    // qui est attendue par l'input radio, alors on veut cocher cet input
    echo (!empty($datas['sexe']) && $datas['sexe'] == $valeurAttendue) ? 'selected' : '';
} ?>

<?php $this->layout('layoutEmpty', ['title' => 'Inscrivez-vous !']) ?>

<?php $this->start('main_content'); ?>

<h2>Tu as fais le bon choix. Donne nous toutes tes informations te concernant et laisse toi guider dans la matrice.</h2>
<?php $fmsg->display(); ?>
<?php  
$longueurKey = 12;
$key = "";
for($i=1; $i<$longueurKey; $i++){
    $key .= mt_rand(0,9);
}
echo $key;

?>

<form action="<?php $this->url('utilisateur_inscription'); ?>" method="POST" enctype="multipart/form-data">
	<!-- pseudo, email, password, sexe, avatar -->
	<p>
		<label for="pseudo">Pseudo :</label>
		<input type="text" name="pseudo" id="pseudo" value="<?php afficherData('pseudo',$datas); ?>"/>
	</p>
	<p>
		<label for="email">Email :</label>
		<input type="email" name="email" id="email" value="<?php afficherData('email',$datas); ?>"/>
	</p>
	<p>
		<label for="mot_de_passe">Mot de passe :</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="au moins 6 caractères" value="<?php afficherData('mot_de_passe',$datas); ?>" />
        </p>
	<p>
		<label for="sexe">Sexe :</label>
		<select name="sexe">
			<option value="femme" <?php afficherCheck('femme',$datas); ?>>Femme</option>
			<option value="homme" <?php afficherCheck('homme',$datas); ?>>Homme</option>
			<option value="non-défini" <?php afficherCheck('non-défini',$datas); ?>>Non-défini</option>
		</select>
	</p>
	<p>
		<label for="avatar">Avatar :</label>
		<input type="file" name="avatar" id="avatar"/>
		
	</p>
	<p>
		<input type="submit" name="send" value="S'inscrire" />
	</p>
        <p>
                Vous possédez déjà un compte ?
		<a class="button" href="<?php echo $this->url('utilisateur_connexion') ?>" title="Accéder à la page de connexion">
			Identifiez-vous
		</a>   
	</p>
</form>

<?php $this->stop('main_content'); ?>
