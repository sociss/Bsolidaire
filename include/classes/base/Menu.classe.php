<?php

/*
    *===================================================================================================*
    * Menu
    * Permet de construire le menu de Bsolidaire
    * Author : Bsolidaire
    * Date : 24/05/2010
    * Version : 1.0
    * @En cours de réalisation :
                                - Faire le destructeur
                                - Réaliser les tests
    *===================================================================================================*
*/ 

class Menu{
    private $arrayMenu; 
    private $arrayIcone;
    private $strUrl;
    private $arrayPage;
    
    /**
     * __construct 
     * Constructeur de la class Menu
     * @param array $arrayMenu tableau contenant le menu
     * @param array $arrayIcone tableau contenant le chemin des icones
    */
    public function __construct($arrayMenu,$arrayIcone, $arrayPage){
        $this->arrayMenu=$arrayMenu;
        $this->arrayIcone=$arrayIcone;
        $this->arrayPage=$arrayPage;
        if(isset($_GET['page']) && in_array($_GET['page'], $this->arrayPage)){
            $this->strUrl = $this->secure($_GET['page']);
        }else{
            $this->strUrl='index';
        }
    }
    
    /**
     * getMenu
     * Permet de récuperer la variable $arrayMenu de la classe Menu.
     * @return array 
    */
    public function getMenu(){
        return $this->arrayMenu;
    }
    
    /**
     * getIcone
     * Permet de récuperer la variable $arrayIcone de la classe Menu.
     * @return array 
    */
    public function getIcone(){
        return $this->arrayIcone;
    }
    
    /**
     * setMenu
     * Permet de modifier la variable $arrayMenu de la classe Menu.
     * @param array tableau contenant les nouvelles valeurs.
    */
    public function setMenu($arrayMenu){
        if($this->array_ok($arrayMenu,'Un tableau est attendu en paramétre pour le menu')){
        $this->arrayMenu=$arrayMenu;
        }
    }
    
    /**
     * setIcone
     * Permet de modifier la variable $arrayIcone de la classe Menu.
     * @param array tableau contenant les nouvelles valeurs.
     * @return array $arrayResult
    */
    public function setIcone($arrayIcone){
        if($this->array_ok($arrayIcone,'Un tableau est attendu en paramétre pour les icones')){
         $this->arrayIcone=$arrayIcone;
        }
    }
    
    public function initialisation(){
        $arrayResult=array();
        $arrayResult[0]='';
        foreach($this->arrayMenu as $key=>$value){
            if($key == $this->strUrl){
                $arrayResult[1]='<div id="page_actuel" class="iblock">
                                <div class="menu-link">
                                    <span class="hover">
                                        <span class="icon-container"><span class="icon" style="'.$this->arrayIcone[key($this->arrayIcone)].'"></span></span>
                                        <span class="title">'.key($this->arrayIcone).'</span>
                                    </span>
                                </div>
                            </div>';
            }else{
                $arrayResult[0].=$value;
            }
            next($this->arrayIcone);
        }
        return $arrayResult;
    }
    /**
      * array_ok
      * Permet de vérifier que le paramétre passé à la fonction est bien un tableau.
      * @param array $array tableau que l'on souhaite soumettre au test
      * @param string message que l'on souhaite afficher en cas d'erreur
      * @return bool 
     */
     public function array_ok($array,$strMess){
         if(is_array($array)){
             return true;
         }else{
             $this->erreur($strMess);
             return false;
         }
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
      * secure
      * Permet de sécuriser la donnée passée en paramétre
      * @param string $donnee donnée que l'on souhaite sécuriser
      * @return string
     */
     public function secure($strDonnee){
         return htmlspecialchars(stripcslashes(trim($strDonnee)), ENT_QUOTES);
     }
     
     /**
     *  Déstructeur de la class Menu
    */
    public function __destruct() {
            
    }	
}
