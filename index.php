<?php
session_start();
if (isset($_GET['login']))
{
	require "include/classes/Login.classe.php";
	try
	{	
		$user = new Login($_POST['Pseudo'],$_POST['Mdp'],$_POST['baka']);
		$user->databasecheck();
		$user->startsession();
		echo($_SESSION['user']);
	}
	catch(Exception $e)
	{		
			$error=($e->getMessage());
	}
}

require_once 'include/classes/base/Autoload.classe.php';
$init = new Autoload();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bsolidaire</title>
		<meta name="description" content="Bsolidaire project" />
		<meta name="author" content="Bsolidaire" />
		<link rel="stylesheet" href="styles/bibliotheque.css" />
		<link rel="stylesheet" href="styles/style.css" />
		<link rel="stylesheet" href="styles/enzo_style.css">
		<link rel="stylesheet" href="styles/accueil.css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" type="text/css" rel="stylesheet">
		<link href="styles/compte.css" rel="stylesheet">
    	<link href="styles/fontello/fontello.css" rel="stylesheet">
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="styleie.css" type="text/css" media="screen" />
		<![endif]-->
		<!-- Bibliothéque modernizr + htmlshiv -->
                <script src="javascript/modernizr.js"></script>
	</head>
	<body role="document" itemscope="itemscope" itemtype="http://schema.org/WebPage">
		<!-- Header -->
		<?php require("include/header/header.php"); ?>
		
		<!-- Menu principal -->
		<?php require("include/menu/menu.php"); ?>
		
		<!-- Contenu principal -->
		<section role="main" itemprop="mainContentOfPage" id="section_principal" class="iblock">
		
		<?php
		if(isset($_GET['page'])) {
			if($_GET['page']=='index') {
				require("include/pages/index.php");
			}
			else if($_GET['page']=='recherche') {
				require("include/pages/search.php");
			}
			else if($_GET['page']=='livres') {
				require("include/pages/livres.php");
			}
			else if($_GET['page']=='bd') {
				require("include/pages/livres/bd.php");
			}
			else if($_GET['page']=='manga') {
				require("include/pages/livres/manga.php");
			}
			else if($_GET['page']=='films') {
				require("include/pages/films.php");
			}
			else if($_GET['page']=='jeuxVideos') {
				require("include/pages/jeuxvideo.php");
			}
			else if($_GET['page']=='jeuxSociete') {
				require("include/pages/jeuxsociete.php");
			}
			else if($_GET['page']=='scolaire') {
				require("include/pages/scolaire.php");
			}
			else if($_GET['page']=='contact') {
				require("include/pages/contact.php");
			}
			else if($_GET['page']=='inscription') {
				require("include/pages/inscription.php");
			}
			else if($_GET['page']=='login') {
				require("include/pages/login.php");
			}
			else if($_GET['page']=='descr_livre') {
				require("include/pages/description_livre.php");
			}
			else if($_GET['page']=='mentions_legales') {
				require("include/pages/mentionslegales.html");
			}
			else if($_GET['page']=='compte') {
				require("include/pages/compte.php");
			}
			else if($_GET['page']=='deco') {
				require("include/pages/deco.php");
			}else{
				require("include/pages/index.php");
			}
		}else{
			require("include/pages/index.php");
		}
		?>
		</section>
		
		<!-- Pied de page -->
		<?php require("include/footer/footer.php"); ?>
		
		<script src="javascript/bsolidaire.js"></script>
		<script src="javascript/index.js"></script>
	</body>
</html>