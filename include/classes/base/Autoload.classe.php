<?php

/*
   *===================================================================================================*
   * Autoload
   * Permet de charger les class dont l'appel n'a pas été éffectué
   * Author : Bsolidaire
   * Date : 24/05/2010
   * Version : 1.0
   *===================================================================================================*
*/   

class Autoload{
    
    private $chemin;
    
    /**
     * __construct 
     * Constructeur de la class Autoload
    */
    public function __construct($chemin='include/classes/base/'){
        $this->chemin=$chemin;
        spl_autoload_register(array($this, 'load'));
    }
    
    /**
     * getChemin
     * Permet de récuperer la variable $chemin de la classe Autoload.
     * @return array 
    */
    public function getChemin(){
        return $this->chemin;
    }
    
    /**
     * setChemin
     * Permet de modifier la variable $chemin de la classe Autoload.
     * @param string $strChemin nouveau chemin.
    */
    public function setChemin($strChemin){
        if(is_string($strChemin)){
           $this->chemin= $strChemin;
        }
    }
    /**
     *  spl_autoload_register => fonction anonyme à partir de PHP 5.3.0
     *  Enregistre une fonction/classe dans la pile __autoload() fournie. Si la pile n'est pas encore active, elle est activée. 	 
     *  @param string $class nom de la class à ajouter
     */ 
    private function load($class){
            include  $this->chemin.$class.'.classe.php';
    }
    
    /**
     *  Déstructeur de la class Autoload
    */
    public function __destruct() {
            
    }
}
