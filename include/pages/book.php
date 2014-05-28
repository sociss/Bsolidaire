		<?php 
		try
		{
		    // On se connecte à MySQL
		    $bdd = new PDO('mysql:host=localhost;dbname=test_bsolidaire', 'root', 'root');
		}
		catch(Exception $e)
		{
		    // En cas d'erreur, on affiche un message et on arrête tout
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
								$reponse = $bdd->query('SELECT TOP 5* FROM livres WHERE etat = bd'); 
								while ($donnees = $reponse->fetch()) // On parcourt la table et on affiche tous les résultats
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
									<a href="bd.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Mangas</h1>
								<?php
								$reponse = $bdd->query('SELECT TOP 5* FROM livres WHERE etat = mangas'); 
								while ($donnees = $reponse->fetch()) // On parcourt la table et on affiche tous les résultats
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
									<a href="manga.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Romans</h1>
								<?php
								$reponse = $bdd->query('SELECT TOP 5* FROM livres WHERE etat = romans'); 
								while ($donnees = $reponse->fetch()) // On parcourt la table et on affiche tous les résultats
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
									<a href="romans.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Poèmes</h1>
								<?php
								$reponse = $bdd->query('SELECT TOP 5* FROM livres WHERE etat = poemes'); 
								while ($donnees = $reponse->fetch()) // On parcourt la table et on affiche tous les résultats
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
									<a href="poemes">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		