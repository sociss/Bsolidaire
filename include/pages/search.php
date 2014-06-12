<?php
$bdd=Bdd::initialisation();
?>

<!-- Contenu principal -->
<div id="content">
	<div class="conteneur cf">
		
		<!-- Contenu -->
		<div class="main">
			<section class="feature">
				
				<!-- Résultats -->
				<article>
					<div class="feature-high">
						<h1>Résultats de la recherche</h1>
						<?php
						$query = $_GET['query'];
						$reponse = $bdd->objBdd->query("SELECT * FROM Livres, Films, JeuxVideo, JeuxSociete, Manuels WHERE 'titre' LIKE '%".$query."%'"); 
						$nb = $reponse->rowCount();
						if ($nb != 0) { ?>
						<h6><?php echo 'Il y a '.$nb.' résultat(s) :'; ?></h6></br>
						<?php 
						while ($donnees = $reponse->fetch()) {   
						?>
						<div class="cover iblock">
							<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
							<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
							<h3><?php echo html_entity_decode($donnees['auteur']); ?></h3>
							<p><?php echo html_entity_decode(substr($donnees['description'], 0, 100)); ?></p>
						</div>
						<?php 
							}
							$reponse->closeCursor(); // Termine le traitement de la requête
						}
						else echo "Il n'y a aucun résultats, veuillez réessayer avec d'autres mots-clefs";
						?>		
					</div>
					<div class="clear"></div>
				</article>
			</section>
			<div class="clear"></div>
		</div>
	</div>
</div>
