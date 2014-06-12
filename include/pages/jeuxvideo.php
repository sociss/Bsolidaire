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
								<h1>Arcade</h1>
								<?php
								$reponse = $bdd->objBdd->query("SELECT * FROM JeuxVideo WHERE type = 'arcade' LIMIT 5"); 
								while ($donnees = $reponse->fetch())
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode(substr($donnees['description'], 0, 100)); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="index.php?page=arcade">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>FPS</h1>
								<?php
								$reponse = $bdd->objBdd->query("SELECT * FROM JeuxVideo WHERE type = 'fps' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode(substr($donnees['description'], 0, 100)); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="index.php?page=fps">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Stratégie</h1>
								<?php
								$reponse = $bdd->objBdd->query("SELECT * FROM JeuxVideo WHERE type = 'strategie' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode(substr($donnees['description'], 0, 100)); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="index.php?page=strategie">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
						
						<!-- Catégorie -->
						<article>
							<div class="feature-high">
								<h1>Sport</h1>
								<?php
								$reponse = $bdd->objBdd->query("SELECT * FROM JeuxVideo WHERE type = 'sport' LIMIT 5"); 
								while ($donnees = $reponse->fetch()) 
								{   
								?>
								<div class="cover iblock">
									<img src="<?php echo html_entity_decode($donnees['image']); ?>" />
									<h2><?php echo html_entity_decode($donnees['titre']); ?></h2>
									<h3><?php echo html_entity_decode($donnees['developpeur']); ?></h3>
									<p><?php echo html_entity_decode(substr($donnees['description'], 0, 100)); ?></p>
								</div>
								<?php 
								}
								$reponse->closeCursor(); // Termine le traitement de la requête
								?>
							</div>
							<div class="feature-down">
								<div class="more">
									<a href="index.php?page=sport">PLUS</a>
								</div>
							</div>
							<div class="clear"></div>
						</article>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>