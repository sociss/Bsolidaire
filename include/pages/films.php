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
								<h1>Animation</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM films WHERE type = 'animation' LIMIT 5); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['realisateur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="films/animation.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Comédie</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM films WHERE type = 'comedie' LIMIT 5); 
								while ($donnees = $reponse->fetch())
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['realisateur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="films/comedie.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Horreur</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM films WHERE type = 'horreur' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['realisateur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="films/horreur.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Science-fiction</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM films WHERE type = 'sf' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['realisateur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="films/sf.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>