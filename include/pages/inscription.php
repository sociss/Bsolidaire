<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
        <meta charset="utf-8">
        <title>Bsolidaire</title>
		<meta name="description" content="">
		<meta name="author" content="Enzo">
		<link rel="stylesheet" href="../../styles/enzo_style.css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" type="text/css" rel="stylesheet">
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="styleie.css" type="text/css" media="screen" />
		<![endif]-->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
   </head>
    <body>
	<?php
		require "../classes/NewUser.classe.php";
		if (isset($_POST['Pseudo']))
				{
				$user = new newUser($_POST['Pseudo'],$_POST['Nom'],
									$_POST['Prenom'],$_POST['Email'],
									$_POST['Adresse'],$_POST['formmdp'],$_POST['formConfmdp']);
				$user->sendQuery();
				$user->sendinfo();
				}
	?>
	<div id="inscription">
		<header role="banner">
			<div class="conteneur">
				<h1 class="iblock">Contact </h1>

				<div class="clear"></div>
			</div>
		</header>
		<section>
			<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">
				<h1 style="color:red;font-weight:bold;">Formulaire d'inscription</h1><br/>
				<form id="inscription_form" onsubmit="return verifsaisieInscri()" action="inscription.php" method="post">
					<label>Pseudo:</label>
					<input required id="Pseudo" class="input" type="text" value="" size="60" name="Pseudo">
					<span id="erreurPseudo" style="display:none;color:red">Veillez rentrer un(e) Pseudo</span>
					<br>
					<label>Nom:</label>
					<input id="mNom" class="input" type="text" value="" size="60" name="Nom">
					<span id="erreurNom" style="display:none;color:red">Veillez rentrer un(e) Nom</span>
					<br>
					<label>Prenom:</label>
					<input id="Prenom" class="input" type="text" value="" size="60" name="Prenom">
					<span id="erreurPrenom" style="display:none;color:red">Veillez rentrer un(e) Prenom</span>
					<br>
					<label>Email:</label>
					<input required id="Email" class="input" type="text" value="" size="60" name="Email">
					<span id="erreurEmail" style="display:none;color:red">Veillez rentrer un(e) Email</span>
					<br>
					<label>Mot de passe:</label>
					<input required id="Mdp" class="input" type="password" value="" size="60" name="Mdp">
					<span id="erreurmdp" style="display:none;color:red">Veillez rentrer un(e) Mot de passe</span>
					<br>
					<label>Confirmation du mot de passe</label>
					<input required id="Confmdp" class="input" type="password" value="" size="60" name="Confmdp">
					<span id="erreurConfmdp" style="display:none;color:red">Veillez rentrer un(e) Mot de passe</span>
					<br>
					<label>Adresse:</label>
					<input id="Adresse" class="input" type="text" value="" size="60" name="Adresse">
					<span id="erreurAdresse" style="display:none;color:red">Veillez rentrer un(e) Adresse</span>
					<br>
					<input id="btn_send_message" class="button" type="submit" value="Envoie" name="Inscription">
				</form>
			</div>
		</section>
	</div>

</body><script src="../js/validationform.js"></script> </html>

