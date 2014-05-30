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
		require "../classes/Login.classe.php";
		if (isset($_POST['Pseudo']))
				{
				$user = new Login($_POST['Pseudo'],$_POST['Mdp'],$_POST['baka']);
				$user->startsession();
				}
		?>
	<div id="Login">
		<header role="banner">
			<div class="conteneur">
				<h1 class="iblock">Log-in </h1>

				<div class="clear"></div>
			</div>
		</header>
		<section>
			<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">
				<h1 style="color:red;font-weight:bold;">Log-In</h1>
					<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">
						<h1 style="color:red;font-weight:bold;">Log-In</h1>
						<form id="inscription_form" onsubmit="return verifsaisieLogin()" action="login.php" method="post">
						<label>Pseudo:</label>
							<input required  id="Pseudo" class="input" type="text" value="" size="60" name="Pseudo">
							<span id="erreurPseudo" style="display:none;color:red">Veillez rentrer un(e) Pseudo</span>
							<br>
							<label>Mot de passe:</label>
							<input required  id="Mdp" class="input" type="password" value="" size="60" name="Mdp">
							<span id="erreurmdp" style="display:none;color:red">Veillez rentrer un(e) Mot de passe</span>
							<br>
							<input type="text" style="display:none" name="baka">
							<input id="btn_send_message" class="button" type="submit" value="Envoie" name="Inscription">
						</form>
					</div>
			</div>
		</section>
	</div>

</body><script src="../js/validationform.js"></script> </html>