<?php

class InscriptionController extends Controller {
	
	public function inscription (){
			$this->view->display();
	}
	public function ajouter() {
			if(isset($_POST["login"])){
				extract($_POST);
			if($mdp == null || $email == null || $login == null)
      	echo"Formulaire incomplet. Veuillez reessayer";
			else{
				$dbh = Database::getInstance();
				$stmt = $dbh->prepare("INSERT INTO User (email, login, mdp) VALUES (:email, :login, :mdp);");
				$stmt->bindParam(':email', $email);
				$stmt->bindParam(':login', $login);
				$stmt->bindParam(':mdp', $mdp);
				$stmt->execute();
				echo"Inscription reussie !";
 	 		}
		}
	}
}
?>
