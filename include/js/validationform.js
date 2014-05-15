function verifsaisieContact()
{
	 var nom = document.getElementById("FormNom").value;
	 var email = document.getElementById("FormEmail").value;
	 var sujet = document.getElementById("FormSujet").value;
	 var message = document.getElementById("FormMessage").value;
	
	var flag=true;
	
	var erreurnom=document.getElementById("erreurNom");
	var erreurmail=document.getElementById("erreurEmail");
	var erreursujet=document.getElementById("erreurSujet");
	var erreurmessage=document.getElementById("erreurMessage");
	
	resetdisplay(erreurnom);
	resetdisplay(erreurmail);
	resetdisplay(erreursujet);
	resetdisplay(erreurmessage);
	
	flag=isnotnull(nom,erreurnom);
	flag=isnotnull(email,erreurmail);
	flag=isnotnull(sujet,erreursujet);
	flag=VerifMail(email,erreurmail);
	return flag;
	 
}



function verifsaisieInscri()
{
	 var pseudo = document.getElementById("FormPseudo").value;
	 var nom = document.getElementById("FormNom").value;
	 var email = document.getElementById("FormEmail").value;
	 var prenom = document.getElementById("FormPrenom").value;
	 var mdp = document.getElementById("FormMot de passe").value;
	 var confmdp = document.getElementById("FormConfMot de passe").value;
	 var adresse = document.getElementById("FormAdresse").value;
	
	var flag=true;
	
	var erreurpseudo=document.getElementById("erreurPseudo");
	var erreurnom=document.getElementById("erreurNom");
	var erreurmail=document.getElementById("erreurEmail");
	var erreurprenom=document.getElementById("erreurPrenom");
	var erreurmdp=document.getElementById("erreurMot de passe");
	var erreurconfmdp=document.getElementById("erreurConfMot de passe");
	var erreuradresse=document.getElementById("erreurAdresse");
	
	resetdisplay(erreurpseudo);
	resetdisplay(erreurnom);
	resetdisplay(erreurmail);
	resetdisplay(erreurprenom);
	resetdisplay(erreurmdp);
	resetdisplay(erreurconfmdp);
	resetdisplay(erreuradresse);
	
	flag=isnotnull(pseudo,erreurpseudo);
	flag=isnotnull(nom,erreurnom);
	flag=isnotnull(prenom,erreurprenom);
	flag=isnotnull(mdp,erreurmdp);
	flag=isnotnull(confmdp,erreurconfmdp);
	flag=isnotnull(email,erreurmail);
	flag=isnotnull(adresse,erreuradresse);
	
	flag=VerifMail(email,erreurmail);
	return flag;
	 
}

function resetdisplay(which)
{
	if(which.style.display=="block")
	{
		which.style.display="none";
	}

}

function isnotnull(champ,erreur)
{
	if(champ=="")
	{
		erreur.style.display="block";
		return false;
	}
	else
	{
		return true;
	}
}

function VerifMail(which,erreur)
{
	a = which;
	var myRegex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
    if(!myRegex.test(a)){
        erreur.style.display="block";
        return false;
    }
    else{
        return true;
     }

}