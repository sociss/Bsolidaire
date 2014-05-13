<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bsolidaire - Résultats de recherche</title>
		<meta name="description" content="Bsolidaire project" />
		<meta name="author" content="Lionel" />
		<link rel="stylesheet" href="../../styles/style.css" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" type="text/css" rel="stylesheet">
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="styleie.css" type="text/css" media="screen" />
		<![endif]-->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<!-- Header -->
		<?php include("../header/header.php"); ?>
		
		<!-- Menu principal -->
		<?php include("../menu/menu.php"); ?>
		
		<!-- Contenu principal -->
		<div id="content">
			<div class="conteneur cf">
				<div class="main">
					<section class="feature">
						<?php
		    			$query = $_GET['query']; 
						$min_length = 3;  // la recherche est limitée a 3 caractères minimums, a définir
		    			if(strlen($query) >= $min_length) { 
		        			$query = htmlspecialchars($query); 
		        			$query = mysql_real_escape_string($query); // pour eviter les injections SQL
		        			$raw_results = mysql_query("SELECT * FROM table WHERE `titre` LIKE '%".$query."%'") or die(mysql_error());
		        			if(mysql_num_rows($raw_results) > 0) {
		            			while($results = mysql_fetch_array($raw_results)) {
		                			echo "<p><h3>".$results['titre']."</h3></p>";
		         				}
		        			}
		        			else { 
		            			echo "Aucun résultats, veuillez réessayer";
		        			}
		    			}
		    			else { 
		        			echo "La recherche nécessite au minimum ".$min_length." caractères";
		    			}
						?>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- Pied de page -->
		<?php include("../footer/footer.php"); ?>
		
	</body>
</html>