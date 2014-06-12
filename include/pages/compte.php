
<?php 
if(isset($_SESSION['user'])&& $_SESSION['user']=! NULL)
{
$user = (int) $_SESSION['user'];
$user = 1;
if($_GET['modif']==ok) // Modification des information utilisateur sur la base de donnée
{

	
	/*$modifUser = new modifUser($_POST['nom'], $_POST['prenom'],$_POST['pseudo'], $_POST['mail']);
	$modifUser->sendQuery();*/
	$init->setChemin('include/classes/');
	$compte2 = new Compte();
	$compte2->modificationUtilisateur($_POST['nom'], $_POST['prenom'],$_POST['pseudo'], $_POST['mail'], $_POST['ville'], $_POST['adresse'],$user);

}



?>
<?php
$user = (int) $_SESSION['user'];
$user = 1;
$bdd=Bdd::initialisation();
$reponse =$bdd->objBdd->query('Select *from Utilisateur where id ='.$user);
$ligne = $reponse->fetch();

	$nom=$ligne['nom'];
	$prenom=$ligne['prenom'];
	$mail=$ligne['email'];
	$pseudo=$ligne['pseudo'];
	$ville=$ligne['ville'];
	$adresse=$ligne['adresse'];
	$date=$ligne['dateNaissance'];
?> 

	<div id="content" class="myaccount">
		<div id="col_gauche">
					<div id="monCompte">

		    <h2 class="h2MyAccount arrow_Bgrey_box"><a href="">Mon compte</a></h2>

		    <dl>

		        
		        <dt class="opened">Mes commandes</dt>
		        <dd class="mes-commandes listToOpen opened" >
		            <ul>
		                <li><a href=""><span class="pictBase"></span>Mes Livres</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes DVD</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes Jeux video</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes Jeux de societe</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes Manuels</a></li>
		            </ul>
		        </dd>
		        <dt class="opened">Mes Livraisons</dt>
		        <dd class="mes-commandes listToOpen opened" >
		            <ul>
		                <li><a href=""><span class="pictBase"></span>Mes Livres</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes DVD</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes Jeux video</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes Jeux de societe</a></li>
		                <li><a href=""><span class="pictBase"></span>Mes Manuels</a></li>
		            </ul>
		        </dd>
    
		        <dt><a href="">Mes commentaires</a></dt>
		        <dt><a href="">Mes messages</a></dt>
		        <dt><a href="">Mes infos personnelles</a></dt>
		        <dt><a href="">Mes donations</a></dt>
		        
		    </dl>

		</div>
		</div>
		<div id="col_centre">
			<div class="sedeconnecter">
				<h2 class="bienvenu">
			        Bienvenue <?php echo $pseudo ?>
				</h2>
				

			</div>
			<div class="titreblock">
			 <h2 class="">Mes infos personnelles</h2>
			</div>
			<div class="infoperso" class="infoutilisateur">
				   
				       
				        <div class="">  
			    			<form method="post" action="index.php?page=compte&modif=ok">
			    				<div class="deco" >
							<input  type="submit" value="Modifier" id="envoiInfo"/>
							<span class="icon-pencil"> </span>
								</div>
			    			<label>Nom :</label><input type="text" name="nom" value="<?php echo $nom; ?>"/><br />
							<label>Prenom :</label><input type="text" name="prenom" value="<?php echo $prenom; ?>"/><br />
							<label>Pseudo :</label><input type="text" name="pseudo" value="<?php echo $pseudo; ?>"/><br />
							<label>Adresse Email :</label><input type="text" name="mail" value="<?php echo $mail; ?>"/><br />
							<label>Ville :</label><input type="text" name="ville" value="<?php echo $ville; ?>"/><br />
							<label>Adresse :</label><input type="text" name="adresse" value="<?php echo $adresse; ?>"/><br />
							</form>
						</div>
				   
			</div>
			<div class="titreblock">
			 <h2 class="">Mes commandes</h2>
			</div>
			<div class="infoperso">

				<table>
					<colgroup>
					<col width="5%">
					<col width="25%">
					<col width="25%">
					<col width="25%">
					
					</colgroup>
					<tbody valign="top">
					<tr><th>Id</th>
					<th>Produit</th>
					<th>Date</th>
					<th>Etat</th>
					<th></th>
					</tr>
					<?php
						$init->setChemin('include/classes/');
						$compte = new Compte();
						$compte->getCommandes($user);
					?>
					</tbody>
				</table>
			</div>

			<div class="titreblock">
			 <h2 class="">Mes Livraisons</h2>
			</div>
			<div class="infoperso">

				<table>
					<colgroup>
					<col width="5%">
					<col width="5%">
					<col width="20%">
					<col width="35%">
					<col width="10%">

					</colgroup>
					<tbody valign="top">
					<tr><th>Id</th>
					<th>Produit</th>
					<th>Date</th>
					<th>Adresse Client</th>
					<th>Etat</th>
					<th></th>
					</tr>
					
					<?php
						$compte->getLivraisons($user);
					?>
					
					</tbody>

				</table>
				   		   
			</div>

		</div>
	</div>	
	<?php
	}
	else  {
	 	echo 'Vous n etes pas connecte';
	 } 
	?>