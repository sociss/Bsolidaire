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
		<?php 
		try
		{
		    // On se connecte à MySQL
		    $bdd = new PDO('mysql:host=localhost;dbname=bsolidaire', 'root', 'root');
		}
		catch(Exception $e)
		{
		    // En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}
		?>
		
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
								<?php
				    			$query = $_GET['query']; 
								$min_length = 3;  // la recherche est limitée a 3 caractères minimums, a définir
				    			if(strlen($query) >= $min_length) { 
				        			$query = htmlspecialchars($query); 
				        			$query = mysql_real_escape_string($query); // pour eviter les injections SQL, a convertir en PDO (voir la méthode quote())
									$raw_results = $bdd->query("SELECT * FROM livres WHERE titre LIKE '%$query%' "); 
									$nb_results = $raw_results->rowCount();
									if($nb_results != 0) {
										while ($results = $raw_results->fetch()) // On parcourt la table et on affiche les résultats
										{   
										?>
										<div class="cover iblock">
											<img src="<?php echo html_entity_decode($results['image']); ?>" />
											<h2><?php echo html_entity_decode($results['titre']); ?></h2>
											<h3><?php echo html_entity_decode($results['auteur']); ?></h3>
											<p><?php echo html_entity_decode($results['description']); ?></p>
										</div>
										<?php
			         					}
									}
			        				else { 
			            				echo "Aucun résultats, veuillez réessayer";
									}
			    				}
			    				else { 
			        				echo "La recherche nécessite au minimum ".$min_length." caractères";
			    				}
								$raw_results->closeCursor(); // Termine le traitement de la requête
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
		<?php include("../footer/footer.php"); ?>
		
	</body>
</html>