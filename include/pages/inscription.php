
	<?php
		require "include/classes/NewUser.classe.php";
		if (isset($_POST['Pseudo']))
				{
				$user = new newUser($_POST['Pseudo'],$_POST['Nom'],
									$_POST['Prenom'],$_POST['Email'],
									$_POST['Adresse'],$_POST['Mdp'],$_POST['Mdp']);
				$user->sendQuery();
				$user->sendinfo();
				}
	?>
	<div id="inscription">
		<section>
			<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">
				<form id="inscription_form" onsubmit="return verifsaisieInscri()" action="index.php?page=inscription" method="post">
					<h1 >Formulaire d'inscription</h1><br/>
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
					<input id="btn_send_message" class="send" type="submit" value="Envoie" name="Inscription">
				</form>
			</div>
		</section>
	</div>


