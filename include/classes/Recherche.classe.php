<?php
/*
    *===================================================================================================*
    * Recherche
    * Construction du moteur de recherche du site 
    * Author : Bsolidaire
    * Date : 30/05/2014
    * Version : 1.0
    * @En cours de réalisation :
                - affichage des résultats
    *===================================================================================================*
*/ 
include "base/Bdd.classe.php";

class Recherche {
    private $strQuery;
    private $strImage;
    private $strTitre;
    private $strAuteur;
    private $strDescription;


    /**
      * __construct
      * Constructeur de la class Recherche
    */
    public function __construct() {
        $this->strQuery=$strQuery;
        $this->strImage=$strImage;
        $this->strTitre=$strTitre;
        $this->strAuteur=$strAuteur;
        $this->strDescription=$strDescription;
    }


    /**
      * receptionQuery
      * retourne les résultats de la recherche
    */
    public function receptionQuery() {
        Bdd::initilisation();
        try
        {
            $min_length = 3;  // la recherche est limitée a 3 caractères minimums, a définir
            if(strlen($strQuery) >= $min_length) { 
                $raw_results = $bdd->query("SELECT * FROM livres, films, jeuxvideo, jeuxsociete, scolaire WHERE titre LIKE '%$strQuery%' "); 
                $nb_results = $raw_results->rowCount();
                if($nb_results != 0) {
                    while ($results = $raw_results->fetch()) {  
                        //Récupération des données rangées dans un tableau
                        $array=array(
                            $this->strImage=>"Image"
                            $this->strTitre=>"Titre"
                            $this->strAuteur=>"Auteur"
                            $this->strDescription=>"Description"
                        );
                    }
                }
                else { 
                    echo "Aucun résultats, veuillez réessayer";
                }
            }
            else { 
                echo "La recherche nécessite au minimum ".$min_length." caractères";
            }
        }
        catch(Exception $e)
        {       
            erreur($e->getMessage());
        }
        Bdd::fermerBdd();   
    }


    /**
      * erreur
      * Gestion des erreurs soulevés dans une méthode de la class bdd (hors erreur PDO)
      * @param string $strMess message à afficher
    */
    public function erreur($strMess){
        var_dump($strMess);
    die;
    }
     
     
    /**
      * __destruct
      * Destructeur de la class Recherche
    */
    public function __destruct() {
        unset($this);   
    }   
}