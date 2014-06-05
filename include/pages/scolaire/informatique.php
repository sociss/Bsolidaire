<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bsolidaire - Les manuels d'informatique</title>
		<meta name="description" content="Bsolidaire project" />
		<meta name="author" content="Lionel" />
		<link rel="stylesheet" href="../../../styles/bibliotheque.css" />
		<link rel="stylesheet" href="../../../styles/style.css" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" type="text/css" rel="stylesheet">
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="styleie.css" type="text/css" media="screen" />
		<![endif]-->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<?php 
		try
		{
		    $bdd = new PDO('mysql:host=localhost;dbname=bsolidaire', 'root', 'root');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		?>
		
		<!-- Header -->
		<?php include("../../header/header.php"); ?>
		
		<!-- Menu principal -->
		<?php include("../../menu/menu.php"); ?>
		
		<!-- Contenu principal -->
		<div id="content">
			<div class="conteneur cf">
				
				<!-- Contenu -->
				<div class="main">
					<section class="feature">
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Informatique</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM scolaire WHERE type = 'informatique'"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['éditeur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="clear"></div>
						</article>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		
		<!-- Pied de page -->
		<?php include("../../footer/footer.php"); ?>
		
	</body>
</html>