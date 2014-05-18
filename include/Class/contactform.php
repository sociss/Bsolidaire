

    <?php
	
	include "Formclass.php";
	include "Validclass.php";
	
    class run {
	
    public static function init(){
		try {
			if (!isset($_POST['formMessage'])){ throw new Exception('Formulaire non poste'); }
			try {
				$mail = new email($_POST['formNom'], $_POST['formEmail'], $_POST['formMessage'], $_POST['formSujet']);
				$mail->setReceiver("moi@test.com");
				$mail->sendMail();
			} catch (Exception $e) {
				echo $e->getMessage(), "\n";
			}
		} catch (Exception $e) {
			self::form();
		}
    }
    // Affichage du formulaire
    public static function form(){
		$form = new FormContact("Nom","Email","Sujet","Message");
		echo $form->build("../Class/contactform.php","verifsaisieContact()");
    }
    }
     
    class email {
    private $destination, $name, $email, $message, $sujet, $validator;
    function __construct( $authorName, $authorEmail, $message, $sujet) {
    //DeFinitions des variables privés
    $this->authorName = $authorName;
    $this->authorEmail = $authorEmail;
    $this->message = $message;
    $this->sujet = $sujet;
    //Creation de l'objet de validation
    $this->validator = new validator();
    $this->validate();
    }
    //definition du destinataire
    public function setReceiver( $mail ){
    if (is_null( $mail )) {
    throw new Exception('Pas de destinataire');
    }
    $this->destination = $mail;
    }
    //creation des validations
    private function validate() {
    try {
    $this->validator->NonNull("nom",$this->authorName);
	$this->validator->valideEmail($this->authorEmail);
    $this->validator->NonNull("sujet",$this->sujet);
    } catch (Exception $e) {
    echo ' Erreur: ', $e->getMessage(), "\n";
	throw new Exception('Mail non envoye ');
    }
    }
    //Envoie du mail
    function sendMail() {

			$sendmail = mail($this->destination, $this->sujet, $this->message, "From: " . $this->name . "<" . $this->email . ">");
			if (!$sendmail) {
			throw new Exception('Mail non envoye');
			return run::form();
			}
		return "Mail envoye";
    }
    }
     
        
	//Class FormContact
	class FormContact{
		private $nom,$email,$sujet,$message;
		
		public function __construct($nom,$email,$sujet,$message)
		{
			$this->nom=new textfield($nom);
			$this->email=new textfield($email);
			$this->sujet=new textfield($sujet);
			$this->message=new textarea($message);
		}
		public function build($page,$validjs)
		{
			$form= '<form method="post" action="'.$page.'"  onsubmit="return '.$validjs.'" id="contact_form">';
			$form=$form.$this->nom->build();
			$form=$form.$this->email->build();
			$form=$form.$this->sujet->build();
			$form=$form.$this->message->build();
			$form=$form.'<label class="ccLabel" for="contactCC"><input type="checkbox" id="contactCC" name="emailCopy" value="Yes" /> Envoyer une copie a soi meme </label><br/>
			<input type="submit" id="btn_send_message" class="button" name="sendemail" value="Envoie" />
			</form>';
			return $form;
		}
	}
    //execution du script
    run::init();
  ?>

