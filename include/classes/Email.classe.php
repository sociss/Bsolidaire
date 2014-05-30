<?php
/*
*===================================================================================================*
* Email
* Sécurise les données reçu et envoi l'email au destinataire.
* Author : Bsolidaire
* Date : 24/05/2010
* Version : 1.0
* @En cours de réalisation :
*
*===================================================================================================*
*/
include "Valid.classe.php";
class Email{

    private $strDestinataire;
	private $strName;
	private $strEmail;
	private $strMessage;
	private $strSujet;
	private $validation;
	

/**
* __construct
* Constructeur de la class Bdd
* Private pour éviter que l'on puisse instancier plusiseurs fois la classe.
*/
    public function __construct($strName,$strEmail,$strMessage,$strSujet){
       	//DeFinitions des variables privés
		$this->strName = $strName;
		$this->strEmail = $strEmail;
		$this->strMessage = $strMessage;
		$this->strSujet = $strSujet;
		//Creation de l'objet de validation
		$this->validation = new validator();
		$this->validate();				
	   
    }
    
	//definition du destinataire
    public function setdestinataire( $mail ){
		if (is_null( $mail )) {
			erreur('Pas de destinataire');
		}
		$this->strDestinataire = $mail;
    }
   
   //creation des validations
    private function validate() {
		try {
			$this->validation->NonNull("nom",$this->strName);
			$this->validation->valideEmail($this->strEmail);
			$this->validation->NonNull("sujet",$this->strSujet);
		} catch (Exception $e) {
			$this->erreur($e->getMessage());
		}
    }
/**
* erreur
* Gestion des erreurs soulevés dans une méthode
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
	
	//Envoie du mail
    function sendMail() {
		try {
				$sendmail = mail($this->strDestinataire, $this->strSujet, $this->strMessage, "From: " . $this->strName . "<" . $this->strEmail . ">");
				if (!$sendmail) {
					throw new Exception;
				}
			}
		 catch (Exception $e) {
					$this->erreur('Mail non envoye');
				}
		return "Mail envoye";
	}

} 