   <?php
   //Class de validation de saisie
    class validator {

		public function valideEmail($value)
		{
			if(!filter_var($value, FILTER_VALIDATE_EMAIL))
			{
			throw new Exception('L\'Email est non valide');
			}
		}
		 public function NonNull($nom,$value)
		  {
			if(empty($value))
			{
			throw new Exception('Champ: '.$nom.' vide.');
			}
		 }
		 
		 public function champsidentiques($champs1,$champs2,$nom)
		  {
			if($champs1!=$champs2)
			{
			throw new Exception('Les champs : '.$nom.' ne sont pas identiques .');
			}
		 }
		 
		 public function lenghtvalidation($champ,$value,$lenght)
		 {
			if(strlen($value)>$lenght)
			throw new Exception($champ,' trop long.Doit être compris entre 1 et',$lenght,'caracteres \n');
		 }
		 
   
    }
	?>