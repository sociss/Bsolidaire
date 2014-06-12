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
class NewUser{

    private $strPseudo;
	private $strName;
	private $strPrenom;
	private $strEmail;
	private $strMdp;
	private $strConfMdp;
	private $strVille;
	private $strAdresse;
	private $strSalt;
	private $Validation;
	

	/**
	* __construct
	* Constructeur de la class NewUser
	*/
	public function __construct($pseudo,$nom,$prenom,$email,$ville,$adresse,$mdp1,$mdp2)
		{	
			//Definitions des variables privés
			$this->strPseudo=$pseudo.'.';
			$this->strName=$nom;
			$this->strPrenom=$prenom;
			$this->strEmail=$email;
			$this->strMdp=$mdp1;
			$this->strConfMdp=$mdp2;
			$this->strAdresse=$adresse;
			$this->strVille=$ville;
			//Generation de la cle unique pour cryptage du mot de passe
			$this->strSalt=strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
			$this->strSalt='$5$rounds=5000$'.$this->strSalt.'$';
			//Creation de l'objet de validation
			$this->Validation = new validator();
			$this->validate();
	}
    
   
   //creation des validations
    private function validate() {
				try {
					$this->Validation->NonNull("pseudo",$this->strPseudo);
					$this->Validation->valideEmail($this->strEmail);
					$this->Validation->NonNull("mot de passe",$this->strMdp);
					$this->Validation->NonNull("Confirmation mot de passe",$this->strConfMdp);
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
	
//Envoi dans la base de donnée (en attente de modification par utlisation de l'objet connection)
		public function  sendQuery()
		 {		
					//Cryptage du mot de passe avant envoie dans la BDD
					$hash=crypt($this->strSalt,$this->strMdp);
					$bdd=Bdd::initialisation();
					$bdd->objBdd->query("Insert Into Utilisateur (nom,prenom,email,Salt,Mdp,ville,adresse) VALUES ('$this->strName','$this->strPrenom','$this->strEmail','$this->strSalt','$hash','$this->strVille','$this->strAdresse');
					SET @last_id = LAST_INSERT_ID();
					UPDATE Utilisateur set Pseudo=concat('$this->strPseudo',@last_id) where id=@last_id ;
					");
					$id=$bdd->objBdd->query("SELECT LAST_INSERT_ID() as ID");
					$donnees = $id->fetch();
					$this->strPseudo=$this->strPseudo.$donnees['ID'];
					Bdd::fermerBdd();
		 }
		public function sendinfo()
		{
			$message="Voici vos identifiants Bsolidaire :\n Pseudo :".$this->strPseudo."\n Mot de passe:".$this->strMdp."\n";
			$sendmail = mail($this->strEmail,"Inscription Bsolidaire", $message);
			if (!$sendmail) {
				erreur('Mail non envoye');		
			}
			return "Mail envoye";
		}

} 