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
				Bdd::initilisation();
				try
				{
					$pdo->beginTransaction();
					$row=$pdo->query('Select * from Utilisateur where Pseudo=\''.$this->strPseudo.'\' ');
					if($row==FALSE)
					{
						throw new Exception('Identifiants incorrects');
					}
					else
					{
						if(crypt($this->strMdp,$row['Salt'])!=$row['Mdp'])
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
					 erreur($e->getMessage());
				}
				Bdd::fermerBdd();		
		 }	
		 
		 public function startsession()
		 {
			session_start();
			$S_SESSION['user']=$this->strPseudo;
		 }
		 
		  public static function endsession()
		 {
			session_write_close();
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
