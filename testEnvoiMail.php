

<?php
/*
*télécharger sendmail puis mettre dans dossier sendmail à la racine de wamp/xamp
*modifier fichier php.ini dans wamp/xamp concernant "sendmail" : smtp:smtp.gmail.com, port : 587,
*sendmail_from : "mail de l'expéditeur en gmail", sendmail_path:  C:\wamp64\sendmail\sendmail.exe.
*modifier fichier sendmail.ini : serveur, port, default_domain=gmail.com, auth_username + password de l'expediteur
*autoriser applications sécurisées dans gmail, hotmail...
* 
*Ce code est un test pour envoyer un mail en php !
*/




if(isset($_POST['mailform'])){

$header="MIME-Version: 1.0\n";
$header.='From:"Matrix"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<br />
			J\'ai envoyé ce mail avec PHP !
			<br />
		</div>
	</body>
</html>
';

mail("eng.roland94@gmail.com", "Salut tout le monde !", $message, $header);
}
?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>