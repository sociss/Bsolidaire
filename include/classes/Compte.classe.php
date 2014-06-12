<?php


class Compte
{
	private $_nbCommandeLivre;
	private $_nbCommandeJeu;
	private $_nbCommandeDvd;

	private $_nbLivraisonLivre;
	private $_nbLivraisonJeu;
	private $_nbLivraisonDvd;
													

	/*--------------CONSTRUCTEUR------------*/
	public function __construct()
	{
		
		//$request = $db->query('SELECT nbCommandeDvd, nbCommandeLivre, nbCommandeJeu, nbLivraisonLivre, nbLivraisonDvd, nbLivraisonJeu FROM Utilisateur WHERE id');
	}

	/*--------------GETTER------------*/
	public function nbCommandeDvd()
	{
		return $this->nbCommandeDvd;
	}
	public function nbCommandeLivre()
	{
		return $this->nbCommandeLivre;
	}
	public function nbCommandeJeu()
	{
		return $this->nbCommandeJeu;
	}
	public function nbLivraisonLivre()
	{
		return $this->nbLivraisonLivre;
	}
	public function nbLivraisonDvd()
	{
		return $this->nbLivraisonDvd;
	}
	public function nbLivraisonJeu()
	{
		return $this->nbLivraisonJeu;
	}

	/*--------------SETTER------------*/
	public function setNbCommandeDvd($nbCommandeDvd)
	{
		$nbCommandeDvd = (int) $nbCommandeDvd;
		$this->_nbCommandeDvd = $nbCommandeDvd;
	}
	public function setNbCommandeLivre($nbCommandeLivre)
	{
		$nbCommandeLivre = (int) $nbCommandeLivre;
		$this->_nbCommandeLivre = $nbCommandeLivre;
	}
	public function setNbCommandeJeu($nbCommandeJeu)
	{
		$nbCommandeJeu = (int) $nbCommandeJeu;
		$this->_nbCommandeJeu = $nbCommandeJeu;
	}
	public function setNbLivraisonLivre($nbLivraisonLivre)
	{
		$nbLivraisonLivre = (int) $nbLivraisonLivre;
		$this->_nbLivraisonLivre = $nbLivraisonLivre;
	}
	public function setLivraisonDvd($nbLivraisonDvd)
	{
		$nbLivraisonDvd = (int) $nbLivraisonDvd;
		$this->_nbLivraisonDvd = $nbLivraisonDvd;
	}
	public function setNbLivraisonJeu($nbLivraisonJeu)
	{
		$nbLivraisonJeu = (int) $nbLivraisonJeu;
		$this->_nbLivraisonJeu = $nbLivraisonJeu;
	}


	/*--------------FONCTION RECUPERATION COMMANDES------------*/
	public function getCommandes($user)
	{
$bdd=Bdd::initialisation();
$reponse =$bdd->objBdd->query('Select * from Commandes where idUtilisateur ='.$user);
while($ligne = $reponse->fetch())
{
	//variables pour récupérer les données de la requête
	$idCommande=$ligne['id'];
	$date=$ligne['date'];
	$etat=$ligne['etat'];
	$produit=$ligne['idProduit'];

	//on génére le html
	echo('<tr><td>'.$idCommande.'</td>');
	echo('<td>'.$produit.'</td>');
	echo('<td>'.$date.'</td>');
	if($etat == wait)
	{
	echo('<td><a href="" class="etat">');
	echo('<span class="icon-hourglass"> </span>');
	echo('</a></td>');
	}
	elseif($etat == valide)
	{
	echo('<td><a href="" class="etat">');
	echo('<span class="icon-check"> </span>');
	echo('</a></td>');
	}
	elseif($etat == annule)
	{
	echo('<td><a href="" class="etat">');
	echo('<span class="icon-block"> </span>');
	echo('</a></td>');
	}
	else
	{
		echo('<td>'.$etat.'</td>');
	}
	echo('<td><a href="" class="deco">');
	echo('<span class="icon-cancel"> </span>');
	echo('</a></td>');
	echo('</tr>');
							
}							
	}
	/*--------------FONCTION RECUPERATION LIVRAISONS------------*/
	public function getLivraisons($user)
	{
$bdd=Bdd::initialisation();
$reponse =$bdd->objBdd->query('Select * from Livraison where idLivreur ='.$user);

while($ligne = $reponse->fetch())
{
	//variables pour récupérer les données de la requête
	$id=$ligne['id'];
	$produit=$ligne['idProduit'];
	$date=$ligne['date'];
	$etat=$ligne['etat'];
	$idClient=$ligne['idClient'];
	$reponse2 =$bdd->objBdd->query('Select adresse from Utilisateur where id ='.$idClient);
	$ligne2 = $reponse2->fetch();
	$adresse=$ligne2['adresse'];
	//on génére le html
	echo('<tr><td>'.$id.'</td>');
	echo('<td>'.$produit.'</td>');
	echo('<td>'.$date.'</td>');
	echo('<td>'.$adresse.'</td>');
	if($etat == wait)
	{
	echo('<td><a href="" class="etat">');
	echo('<span class="icon-hourglass"> </span>');
	echo('</a></td>');
	}
	elseif($etat == valide)
	{
	echo('<td><a href="" class="etat">');
	echo('<span class="icon-check"> </span>');
	echo('</a></td>');
	}
	elseif($etat == annule)
	{
	echo('<td><a href="" class="etat">');
	echo('<span class="icon-block"> </span>');
	echo('</a></td>');
	}
	else
	{
		echo('<td>'.$etat.'</td>');
	}
	echo('<td><a href="" class="deco">');
	echo('<span class="icon-cancel"> </span>');
	echo('</a></td>');
	echo('</tr>');
							
}							
	}
	/*--------------FONCTION DECONNECTION COMPTE------------*/
	public static function deconnection()
	{
		session_start();
		session_unset();
		session_destroy();
		header('Location: index.php');
		exit();
	}
	/*--------------FONCTION MODIFICATION DONNEES UTILISATEURS------------*/
	public function modificationUtilisateur($nom , $prenom , $pseudo, $mail, $ville, $adresse, $user )
	{
		$bdd=Bdd::initialisation();
		$reponse =$bdd->objBdd->prepare('UPDATE Utilisateur SET nom ='.$nom.', prenom = '.$prenom.',pseudo ='.$pseudo.', email = '.$mail.', ville ='.$ville.',adresse='.$adresse.' WHERE id = '.$user);
		$reponse->execute(); 
	
		 
	}
	/*--------------FONCTION DE SUPRESSION DES COMMANDES------------*/
	public function supprimerCommande($user)
	{
		$bdd=Bdd::initialisation();
		$reponse =$bdd->objBdd->prepare('UPDATE Commandes SET etat = annule WHERE idUtilisateur ='.$user);
		$reponse->execute();
	} 
	/*--------------FONCTION DE VALIDATION DES COMMANDES------------*/
	public function valideCommande($user)
	{
		$bdd=Bdd::initialisation();
		$reponse =$bdd->objBdd->prepare('UPDATE Commandes SET etat = valide WHERE idUtilisateur ='.$user);
		$reponse->execute();
	}



}


?>