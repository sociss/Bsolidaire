
	<div id="Login">
		<section>
			<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">
					<div id="form" style="background-color:white;height:100%;padding-left:10%;padding-top:10%;padding-bottom:10%;">				
						<form id="inscription_form" onsubmit="return verifsaisieLogin()" action="index.php?login" method="post">
						<h1 >Log-In</h1>
						<label>Pseudo:</label>
							<input required  id="Pseudo" class="input" type="text" value="" size="60" name="Pseudo">
							<span id="erreurPseudo" style="display:none;color:red">Veillez rentrer un(e) Pseudo</span>
							<br>
							<label>Mot de passe:</label>
							<input required  id="Mdp" class="input" type="password" value="" size="60" name="Mdp">
							<span id="erreurmdp" style="display:none;color:red">Veillez rentrer un(e) Mot de passe</span>
							<br>
							<input type="text" style="display:none" name="baka">
							<input id="btn_send_message" class="send" type="submit" value="Envoie" name="Inscription">
						</form>
					</div>
			</div>
		</section>
	</div>

