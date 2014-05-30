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
		require "../classes/Email.classe.php";
		if (isset($_POST['Message']))
				{
					$mail = new Email($_POST['Nom'], $_POST['Email'],$_POST['Message'],$_POST['Sujet']);
					$mail->setdestinataire("moi@test.com");
					$mail->sendMail();
				}
	?>
	<div id="contact">
		<header role="banner">
			<div class="conteneur">
				<h1 class="iblock">Contact </h1>

				<div class="clear"></div>
			</div>
		</header>
		<section>
			<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">
				<h1 style="color:red;font-weight:bold;">Formulaire de contact</h1><br>
					<form id="contact_form" onsubmit="return verifsaisieContact()" action="contact.php" method="post">
						<label>Nom:</label>
						<input required id="Nom" class="input" type="text" value="" size="60" name="Nom">
						<span id="erreurNom" style="display:none;color:red">Veillez rentrer un(e) Nom</span>
						<br/>
						<label>Email:</label>
						<input required id="Email" class="input" type="text" value="" size="60" name="Email">
						<span id="erreurEmail" style="display:none;color:red">Veillez rentrer un(e) Email</span>
						<br>
						<label>Sujet:</label>
						<input required id="Sujet" class="input" type="text" value="" size="60" name="Sujet">
						<span id="erreurSujet" style="display:none;color:red">Veillez rentrer un(e) Sujet</span>
						<br>
						<label>Message:</label>
						<br>
						<textarea id="Message" cols="46" rows="15" name="Message"></textarea>
						<span id="erreurMessage" style="display:none;color:red">Veillez rentrer un Message</span>
						<br/>
						<label class="ccLabel" for="contactCC">
						<input id="contactCC" type="checkbox" value="Yes" name="emailCopy">
						Envoyer une copie a soi meme
						</label>
						<br/>
						<input id="btn_send_message" class="button" type="submit" value="Envoie" name="sendemail">
					</form>

			</div>
		</section>
	</div>

</body><script src="../js/validationform.js"></script> </html>