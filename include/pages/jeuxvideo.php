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
								<h1>Arcade</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM jeux_video WHERE type = 'arcade' LIMIT 5"); 
								while ($donnees = $reponse->fetch())
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="jeuxvideo/arcade.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>FPS</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM jeux_video WHERE type = 'fps' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="jeuxvideo/fps.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Stratégie</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM jeux_video WHERE type = 'strategie' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="jeuxvideo/strategie.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Sport</h1>
								<?php
								$reponse = $bdd->query("SELECT * FROM jeux_video WHERE type = 'sport' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode($donnees['description']); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="jeuxvideo/sport.php">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>