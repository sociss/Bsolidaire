<?php
/*
*===================================================================================================*
* Creation d'un nouvel utilisateur
* Sécurise les données reçu, envoi les données à la BDD et les info de connection au nouvel inscrit .
* Author : Bsolidaire
* Date : 24/05/2010
* Version : 1.0
* @En cours de réalisation :
*
*===================================================================================================*
*/
include "Valid.classe.php";
include "base/Bdd.classe.php";
class modifUser{

    private $strPseudo;
	private $strName;
	private $strPrenom;
	private $strEmail;
	private $strAdresse;
	private $Validation;
	

	/**
	* __construct
	* Constructeur de la class NewUser
	*/
	public function __construct($pseudo,$nom,$prenom,$email,$adresse)
		{	
			//Definitions des variables privés
			$this->strPseudo=$pseudo;
			$this->strName=$nom;
			$this->strPrenom=$prenom;
			$this->strEmail=$email;
			$this->strAdresse=$adresse;
			//Creation de l'objet de validation
			$this->Validation = new validator();
			$this->validate();
	}
    
   
   //creation des validations
    private function validate() {
				try {
					$this->Validation->NonNull("pseudo",$this->strPseudo);
					$this->Validation->valideEmail($this->strEmail);
					$this->Validation->champsidentiques($this->strMdp,$this->strConfMdp,"mot de passe");
				} catch (Exception $e) {
					$this->erreur($e->getMessage());
				}
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
	
//modification dans la base de donnée (en attente de modification par utlisation de l'objet connection)
		public function  sendQuery()
		 {		
					
					//Creation du tableau des variables à envoyer
					$array=array(
						"Pseudo"=>$this->strPseudo,
						"Nom"=>$this->strName,
						"Prenom"=>$this->strPrenom,
						"Email"=>$this->strEmail,
						"Adresse"=>$this->strAdresse,
					);
					Bdd::initilisation();
					Bdd::updateUser($_SESSION['user'],$array);
					Bdd::fermerBdd();
		 }

} 