
	
	<div id="contact">
		<section>
			<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">
					<?php
		require "include/classes/Email.classe.php";
		if (isset($_POST['Message']))
				{
					$mail = new Email($_POST['Nom'], $_POST['Email'],$_POST['Message'],$_POST['Sujet']);
					$mail->setdestinataire("sociss666@gmail.com");
					$mail->sendMail();
					echo '<p > Votre mail a bien été envoyé.</p>';
				}
		else{
				echo'	<form id="contact_form" onsubmit="return verifsaisieContact()" action="index.php?page=contact" method="post">
					<h1 >Formulaire de contact</h1><br>
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
						<input id="btn_send_message" class="send" type="submit" value="Envoie" name="sendemail">
					</form>';
			}
		?>
				

			</div>
		</section>
	</div>
