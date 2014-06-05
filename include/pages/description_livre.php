		<?php 
			include"include/classes/base/Bdd.classe.php";
			/*Bdd::initialisation();
			

			require "include/classes/Email.classe.php";
			if ($_GET['rent']=='ok')
					{
						$nom=$_SESSION['user'];
						$sujet="Bsolidaire:emprunt $produittitre";
						$message="Bonjour $proprio,\n 
								L'utilisateur $nom souhaiterait vous emprunter $produittitre.\n 
								Veuillez prendre contact avec lui à:$email.\n 
								Cordialement l'équipe Bsolidaire.";
						$mail = new Email($nom,$email,$message,$sujet);
						$mail->setdestinataire($_session['mail']);
						$mail->sendMail();
					}
			*/
		?>
		
		<!-- Contenu principal -->
		<div id="content">
			<div class="conteneur">
				
				<!-- Contenu -->
				<div class="main-description">
					<section class="feature">
					<div id="produit">
						<span id="cover-container">
							<img class="cover" src="cov.jpg" alt="" />
						</span>
						<div id="titre">
							<h1 class="title">Titre</h1>
							<h2 class="author">Auteur</h2>
							<p class="etat">Etat:Disponible</p>
						</div>
						<div id="emprunt">
							<a href="index.php?page=contact&rent=ok" class="rent">Emprunter</a>
						</div>
					</div>
					<div id="detail">
						<h1 class="title">Description:</h1><br/>
					
							<p class="description">
								Itaque verae amicitiae difficillime reperiuntur in iis qui in honoribus reque publica versantur; ubi enim istum invenias qui honorem amici anteponat suo? Quid? Haec ut omittam, quam graves, quam difficiles plerisque videntur calamitatum societates! Ad quas non est facile inventu qui descendant. Quamquam Ennius recte.
							<p>
					
					</div>
					<div  id="infosup">
						<h1 class="title">Informations complémentaires</h1>
						<article>
							<p>Auteur</p>
							<p>Editeur</p>                                                                                      
						</article>
					</div>
					<div id="suggestion">
						<h1 class="title">Si vous avez aimé $produit,vous aimerez peut être: </h1>
						<?php
							
						?>
					</div>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>