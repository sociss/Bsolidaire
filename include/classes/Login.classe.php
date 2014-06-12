<?php
/*
*===================================================================================================*
* login
* Sécurise les données reçu, login .
* Author : Bsolidaire
* Date : 24/05/2010
* Version : 1.0
* @En cours de réalisation :
*
*===================================================================================================*
*/
include "Valid.classe.php";
include "base/Bdd.classe.php";
class Login{
	
    private $strPseudo;
	private $strDummy;
	private $strMdp;
	private $Validation;
	

	/**
	* __construct
	* Constructeur de la class Login
	*/
	public function __construct($pseudo,$mdp,$dummy)
		{	
			//Definitions des variables privés
			$this->strPseudo=$pseudo;
			$this->strDummy=$dummy;
			$this->strMdp=$mdp;
			$this->Validation = new validator();
			$this->validate();
		}
	private function validate() {
				try {
					$this->Validation->NonNull("pseudo",$this->strPseudo);
					$this->Validation->notBot($this->strDummy);
					$this->Validation->NonNull("mot de passe",$this->strMdp);
					
				} catch (Exception $e) {
					erreur($e->getMessage());
				}
		}
		
		//Verification du mdp et du pseudo dans la BDD (en attente de modification par utlisation de l'objet connection)
		public function  databasecheck()
		 {		
				$bdd=Bdd::initialisation();
				try
				{
					$reponse=$bdd->objBdd->query('Select * from Utilisateur where Pseudo=\''.$this->strPseudo.'\' ');
					$nb = $reponse->rowCount();
					if($nb==0)
					{
						throw new Exception('Pseudo incorrect');
					}
					else
					{
						$donnees = $reponse->fetch();
						if(crypt($donnees["Salt"],$this->strMdp)!=$donnees['Mdp'])
						{
							throw new Exception('Mot de passe incorrect');
						}
					}
					
				}
				catch(Exception $e)
				{	
					 Bdd::fermerBdd();
					 throw new Exception($e->getMessage());
				}
				Bdd::fermerBdd();
				return $donnees["id"];
		 }	
		 
		 public function startsession($id)
		 {
			define("_PATH_TMP", "sessions");
			ini_set('session.save_path', _PATH_TMP);
			session_start();
			$_SESSION['user']=$id;
		 }
		 
		  public static function endsession()
		 {
			$_SESSION = array(); 
			session_destroy(); 
		 }
	
/**
* erreur
* Gestion des erreurs soulevés dans une méthode de la class 
* @param string $strMess message à afficher
*/
     public function erreur($strMess){
         var_dump($strMess);
         die;
     }
    /**
	

* Destructeur de la class 
*/
    public function __destruct() {
            unset($this);
    }	
}
