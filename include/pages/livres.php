<?php 
$bdd=Bdd::initialisation();
?>

<!-- Contenu principal -->
<div id="content">
	<div class="conteneur cf">
		
		<!-- Contenu -->
		<div class="main">
			<section class="feature">
				
				<!-- Catégorie -->
				<article>
					<div class="feature-high">
						<h1>Bandes dessinées</h1>
						<?php
						$reponse = $bdd->objBdd->query("SELECT * FROM Livres WHERE type = 'bd' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
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
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="index.php?page=bd">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
				
				<!-- Catégorie -->
				<article>
					<div class="feature-high">
						<h1>Mangas</h1>
						<?php
						$reponse = $bdd->objBdd->query("SELECT * FROM Livres WHERE type = 'manga' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
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
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="index.php?page=manga">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
				
				<!-- Catégorie -->
				<article>
					<div class="feature-high">
						<h1>Romans</h1>
						<?php
						$reponse = $bdd->objBdd->query("SELECT * FROM Livres WHERE type = 'roman' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
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
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="index.php?page=romans">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
				
				<!-- Catégorie -->
				<article>
					<div class="feature-high">
						<h1>Poèmes</h1>
						<?php
						$reponse = $bdd->objBdd->query("SELECT * FROM Livres WHERE type = 'poeme' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
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
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="index.php?page=poemes">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
			</section>
			<div class="clear"></div>
		</div>
	</div>
</div>