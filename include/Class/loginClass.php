

    <?php
	
	include "Formclass.php";
	include "Validclass.php";
	
    class run {
	
    public static function init(){
		try {
			if (!isset($_POST['formPseudo'])){ throw new Exception('Formulaire non poste'); }
			try {
				$user = new veriflogin($_POST['formPseudo'],$_POST['formmdp'],$_POST['baka']);
				$user->startsession();
			} catch (Exception $e) {
				echo $e->getMessage(), "\n";
			}
		} catch (Exception $e) {
			self::form();
		}
    }
    // Affichage du formulaire
    public static function form(){
		$form = new loginForm("Pseudo","Mot de passe");
		echo $form->build("../Class/loginClass.php","verifsaisieLogin()");
    }
    }
     
	
	
	//Class de verification des identifiants 
	class veriflogin{
		private $pseudo,$mdp,$dummy,$validator,$salt;
		
		public function __construct($pseudo,$mdp,$dummy)
		{	
			//Definitions des variables privés
			$this->pseudo=$pseudo;
			$this->pseudo=$dummy;
			$this->mdp=$mdp;
			$this->validator = new validator();
			$this->validate();
		}
		    private function validate() {
				try {
					$this->validator->NonNull("pseudo",$this->pseudo);
					$this->validator->notBot($this->dummy);
					$this->validator->NonNull("mot de passe",$this->mdp);
					
				} catch (Exception $e) {
					echo ' Erreur: ', $e->getMessage(), "\n";
					throw new Exception('Vous n\'êtes pas log.  ');
				}
			}
		//Verification du mdp et du pseudo dans la BDD 
		public function  databasecheck()
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
					$hash=md5($this->salt+$this->mdp);
					$row=$pdo->query('Select * from Utilisateur where Pseudo=\''.$pseudo.'\' ');
					if($row==FALSE)
					{
						throw new Exception('Identifiants incorrects');
					}
					else
					{
						if(md5($row['Salt']+$this->mdp)!=$row['Mdp'])
						{
							throw new Exception('Identifiants incorrects');
						}
						else
						{
							echo 'Vous êtes maintenant log.';
						}
					}
					
				}
				catch(Exception $e)
				{		
					    throw new Exception( 'Erreur : '.$e->getMessage().'<br />');
				}
						
		 }
		 
		 public function startsession()
		 {
			session_start();
			$S_SESSION['user']=$this->pseudo;
		 }
	}

     
	
        
	//Class Formulaire de login
	class loginForm{
		private $pseudo,$mdp,$dummy;
		
		public function __construct($pseudo,$mdp)
		{	
			$this->pseudo=new textfield($pseudo);
			$this->mdp=new mdplogin($mdp);
			$this->dummy=new DummyField();
		}
		
		public function build($page,$validjs)
		{
			$form= '<form method="post" action="'.$page.'"  onsubmit="return '.$validjs.'" id="inscription_form">';
			$form=$form.$this->pseudo->build();
			$form=$form.$this->mdp->build();
			$form=$form.$this->dummy->build();
			$form=$form.'<input type="submit" id="btn_send_message" class="button" name="Inscription" value="Envoie" />
			</form>';
			return $form;
		}
	}
    //execution du script
    run::init();
  ?>

