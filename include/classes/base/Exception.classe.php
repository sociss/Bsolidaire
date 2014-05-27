<?php
/*
    *===================================================================================================*
    * Exception
    * Gestion et enregistrement des erreurs produite lors de l'utilisation du site 
    * Author : Bsolidaire
    * Date : 24/05/2010
    * Version : 1.0
    * @En cours de réalisation :
                                - Méthode enregistreException : enregistrer les erreurs dans la bdd
                                - Réaliser les tests pour vérifier le bon fonctionnement de la classe
    *===================================================================================================*
*/ 

class Exception {

    public $e = NULL;
    public $strMess = '';
    public $objBdd;

    /**
     * __construct 
     * constructeur de la class Exception
     * @param object $e : Exception émis par PDO
     * @param string $strMess : Message d'erreur à afficher
    */
    public function __construct($e,$strMess='') {
        Bdd::initialisation();
        $this->e = $e;
        $this->strMess = $strMess;
    }
   
    /**
     * enregistreException
     * Enregistre l'exeption dans la table exception de la base de donnée et redirige vers la page adéquate
    */
    public  function enregistreException() {
        $e=$this->e;
        if($e){
            // Requete sql à faire et redirection          
             $e = NULL;
             unset($e);
        }
        exit;
    }          
    
    /**
     * aff_Exception
     * Affiche le contenu de l'exception et arrête l'execution du script
    */
    public  function aff_Exception() {
        var_dump($this->e);die; 
    }           
}   
