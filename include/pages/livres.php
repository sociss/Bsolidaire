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
						$reponse = $bdd->query("SELECT * FROM livres WHERE type = 'bd' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
						?>
						<div class="cover iblock">
							<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
							<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
							<h3><?php echo html_entity_decode($donnees['auteur']); ?></h3>
							<p><?php echo html_entity_decode($donnees['description']); ?></p>
						</div>
						<?php 
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="livres/bd.php">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
				
				<!-- Catégorie -->
				<article>
					<div class="feature-high">
						<h1>Mangas</h1>
						<?php
						$reponse = $bdd->query("SELECT * FROM livres WHERE type = 'mangas' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
						?>
						<div class="cover iblock">
							<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
							<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
							<h3><?php echo html_entity_decode($donnees['auteur']); ?></h3>
							<p><?php echo html_entity_decode($donnees['description']); ?></p>
						</div>
						<?php 
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="livres/manga.php">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
				
				<!-- Catégorie -->
				<article>
					<div class="feature-high">
						<h1>Romans</h1>
						<?php
						$reponse = $bdd->query("SELECT * FROM livres WHERE type = 'romans' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
						?>
						<div class="cover iblock">
							<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
							<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
							<h3><?php echo html_entity_decode($donnees['auteur']); ?></h3>
							<p><?php echo html_entity_decode($donnees['description']); ?></p>
						</div>
						<?php 
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="livres/romans.php">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
				
				<!-- Catégorie -->
				<article>
					<div class="feature-high">
						<h1>Poèmes</h1>
						<?php
						$reponse = $bdd->query("SELECT * FROM livres WHERE type = 'poemes' LIMIT 5"); 
						while ($donnees = $reponse->fetch())
						{   
						?>
						<div class="cover iblock">
							<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
							<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
							<h3><?php echo html_entity_decode($donnees['auteur']); ?></h3>
							<p><?php echo html_entity_decode($donnees['description']); ?></p>
						</div>
						<?php 
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
						?>
					</div>
					<div class="feature-down">
						<div class="more">
							<a href="livres/poemes.php">PLUS</a>
						</div>
					</div>
					<div class="clear"></div>
				</article>
			</section>
			<div class="clear"></div>
		</div>
	</div>
</div>