<?php

/* 
    *====================================================================================================*
 
       * Annexe pour aider à comprendre le code et apporter des précisions sur les classes du framework
 
    *====================================================================================================*
 
    * Convention de nommage : https://oncletom.io/2008/conventions-de-programmation-necessaire-maturite/
    *                         http://jcrozier.developpez.com/tutoriels/web/php/conventions-nommage/
 
    * Utilisation de phpdocumentor : http://www.phpdoc.org/ 
    *                                http://chez-syl.fr/2012/11/documentation-php-automatique-avec-phpdocumentor-sous-windows/
    *                                http://devandco.wordpress.com/2010/04/15/documenter-code-phpdocumentor/
    *                                http://manual.phpdoc.org/HTMLSmartyConverter/PHP/phpDocumentor/tutorial_tags.pkg.html
    
    * Utilisation de $_SERVER['DOCUMENT_ROOT'] pour les chemin vers les fichiers : http://www.php.net/manual/en/reserved.variables.server.php
  
    * Synopsis de la classe PDO : http://www.php.net/manual/fr/class.pdo.php
      PDO {
        public __construct ( string $dsn [, string $username [, string $password [, array $driver_options ]]] )
        public bool beginTransaction ( void )
        public bool commit ( void )
        public mixed errorCode ( void )
        public array errorInfo ( void )
        public int exec ( string $statement )
        public mixed getAttribute ( int $attribute )
        public static array getAvailableDrivers ( void )
        public bool inTransaction ( void )
        public string lastInsertId ([ string $name = NULL ] )
        public PDOStatement prepare ( string $statement [, array $driver_options = array() ] )
        public PDOStatement query ( string $statement )
        public string quote ( string $string [, int $parameter_type = PDO::PARAM_STR ] )
        public bool rollBack ( void )
        public bool setAttribute ( int $attribute , mixed $value )
      }
   * 
   *
   * PDO::setAttribute : http://www.php.net/manual/fr/pdo.setattribute.php 
   * 
   * Design pattern : un Singleton PHP : http://www.journaldunet.com/developpeur/php/design-pattern-un-singleton-php.shtml
*/

/* 
    *====================================================================================================*
 
       * Page index.php
 
    *====================================================================================================*
 
 * spl_autoload_register : http://fr2.php.net/manual/fr/function.spl-autoload-register.php
 *                         http://julien-pauli.developpez.com/tutoriels/php/autoload/
 */