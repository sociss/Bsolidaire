	<?php
	//Class champs texte
	class textfield{
		private $nom;
		function __construct($nom)
		{
			$this->nom=$nom;
		}
		public function build()
		{
			$champs='<label>'.$this->nom.':</label><input type="text" name="form'.$this->nom.'" size="60" id="Form'.$this->nom.'" class="input" value="" />
			<span id="erreur'.$this->nom.'" style="display:none;color:red">Veillez rentrer un(e) '.$this->nom.'</span><br />';
			return $champs;
		}
	}
	
		//Class champs mdp
	class mdpfield{
		private $nom;
		function __construct($nom)
		{
			$this->nom=$nom;
		}
		public function build()
		{
			$champs='<label>'.$this->nom.':</label><input type="password" name="formmdp" size="60" id="Formmdp" class="input" value="" />
			<span id="erreurmdp" style="display:none;color:red">Veillez rentrer un(e) '.$this->nom.'</span><br />
			<label>Confirmation du mot de passe</label><input type="password" name="formConfmdp" size="60" id="FormConfmdp" class="input" value="" />
			<span id="erreurConfmdp" style="display:none;color:red">Veillez rentrer un(e) '.$this->nom.'</span><br />';
			return $champs;
		}
	}
	
	//Class zone texte
	class textarea{
		private $nom;
		function __construct($nom)
		{
			$this->nom=$nom;
		}
		public function build()
		{
			$champs='<label>'.$this->nom.':</label><br /> <textarea name="form'.$this->nom.'" rows="15" cols="46" id="Form'.$this->nom.'"></textarea>
			<span id="erreur'.$this->nom.'" style="display:none;color:red">Veillez rentrer un '.$this->nom.'</span><br/>';
			return $champs;
		}
	}
	?>