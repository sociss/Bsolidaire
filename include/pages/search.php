<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bsolidaire - Résultats de recherche</title>
		<meta name="description" content="Bsolidaire project" />
		<meta name="author" content="Lionel" />
		<link rel="stylesheet" href="../../styles/bibliotheque.css" />
		<link rel="stylesheet" href="../../styles/style.css" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" type="text/css" rel="stylesheet">
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="styleie.css" type="text/css" media="screen" />
		<![endif]-->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<!-- Appel du moteur de recherche -->
		<?php include("../classes/Recherche.classe.php"); ?>
		
		<!-- Header -->
		<?php include("../header/header.php"); ?>
		
		<!-- Menu principal -->
		<?php include("../menu/menu.php"); ?>
		
		<!-- Contenu principal -->
		<div id="content">
			<div class="conteneur cf">
				
				<!-- Contenu -->
				<div class="main">
					<section class="feature">
						
						<!-- Résultats -->
						<article>
							<div class="feature-high">
								<h1>Résultats de votre recherche :</h1>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($image); ?>" />
									<h2><?php echo html_entity_decode($titre); ?></h2>
									<h3><?php echo html_entity_decode($auteur); ?></h3>
									<p><?php echo html_entity_decode($description); ?></p>
								</div>		
							</div>
							<div class="clear"></div>
						</article>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		
		<!-- Pied de page -->
		<?php include("../footer/footer.php"); ?>
		
	</body>
</html>