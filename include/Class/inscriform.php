

    <?php
	
	include "Formclass.php";
	include "Validclass.php";
	
    class run {
	
    public static function init(){
		try {
			if (!isset($_POST['formNom'])){ throw new Exception('Formulaire non poste'); }
			try {
				$user = new newUser(mysql_real_escape_string($_POST['formPseudo']),mysql_real_escape_string($_POST['formNom']),
									mysql_real_escape_string($_POST['formPrenom']),mysql_real_escape_string($_POST['formEmail']),
									mysql_real_escape_string($_POST['formAdresse']),mysql_real_escape_string($_POST['formmdp'],$_POST['formConfmdp']));
				$user->sendQuery();
			} catch (Exception $e) {
				echo $e->getMessage(), "\n";
			}
		} catch (Exception $e) {
			self::form();
		}
    }
    // Affichage du formulaire
    public static function form(){
		$form = new FormInscription("Pseudo","Nom","Prenom","Email","Adresse","Mot de passe");
		echo $form->build("../Class/inscriform.php","verifsaisieInscri()");
    }
    }
     
	
	
	//Class newUser
	class newUser{
		private $pseudo,$nom,$prenom,$email,$adresse,$mdp1,$mdp2,$validator,$salt;
		
		public function __construct($pseudo,$nom,$prenom,$email,$adresse,$mdp1,$mdp2)
		{	
			//Definitions des variables privés
			$this->pseudo=$pseudo;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->mdp1=$mdp1;
			$this->mdp2=$mdp2;
			$this->adresse=$adresse;
			//Generation de la cle unique pour cryptage du mot de passe
			$this->salt=strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
			$this->salt='$5$rounds=5000$'.$this->salt.'$';
			//Creation de l'objet de validation
			$this->validator = new validator();
			$this->validate();
		}
		    private function validate() {
				try {
					$this->validator->NonNull("pseudo",$this->pseudo);
					$this->validator->valideEmail($this->email);
					$this->validator->NonNull("mot de passe",$this->mdp1);
					$this->validator->NonNull("Confirmation mot de passe",$this->mdp2);
					$this->validator->champsidentiques($this->mdp1,$this->mdp2,"mot de passe");
				} catch (Exception $e) {
				echo ' Erreur: ', $e->getMessage(), "\n";
					throw new Exception('Utilisateur non inscrit ');
				}
			}
		//Envoi dans la base de donnée 
		public function  sendQuery()
		 {		try
				{
					$pdo = new PDO('mysql:host=localhost;dbname=bsolidaire', 'root', 'test');
				}catch(Exception $e)
				{		
					    throw new Exception( 'Erreur : '.$e->getMessage().'<br />N° : '.$e->getCode().'<br />');
				}
				try
				{
					$pdo->beginTransaction();
					//Cryptage du mot de passe avant envoie dans la BDD
					$hash=crypt($this->salt,$this->mdp1);
					$pdo->query('INSERT INTO Utilisateur SET Pseudo =\''.$this->pseudo.'\', Nom = \''.$this->nom.'\',Prenom=\''.$this->prenom.'\',Email=\''.$this->email.'\',Mdp=\''.$hash.'\',Salt=\''.$this->salt.'\',Adresse=\''.$this->adresse.'\' ');
					$pdo->commit();
					echo 'Vous êtes maintenant inscrit.';
				}
				catch(Exception $e)
				{		
						$pdo->rollback();
					    throw new Exception( 'Erreur : '.$e->getMessage().'<br />N° : '.$e->getCode().'<br />');
				}
						
		 }
	}

     
	
        
	//Class FormInscription
	class FormInscription{
		private $pseudo,$nom,$prenom,$email,$adresse,$mdp;
		
		public function __construct($pseudo,$nom,$prenom,$email,$adresse,$mdp)
		{	
			$this->pseudo=new textfield($pseudo);
			$this->nom=new textfield($nom);
			$this->prenom=new textfield($prenom);
			$this->email=new textfield($email);
			$this->mdp=new mdpfield($mdp);
			$this->adresse=new textfield($adresse);
		}
		
		public function build($page,$validjs)
		{
			$form= '<form method="post" action="'.$page.'"  onsubmit="return '.$validjs.'" id="inscription_form">';
			$form=$form.$this->pseudo->build();
			$form=$form.$this->nom->build();
			$form=$form.$this->prenom->build();
			$form=$form.$this->email->build();
			$form=$form.$this->mdp->build();
			$form=$form.$this->adresse->build();
			$form=$form.'<input type="submit" id="btn_send_message" class="button" name="Inscription" value="Envoie" />
			</form>';
			return $form;
		}
	}
    //execution du script
    run::init();
  ?>

