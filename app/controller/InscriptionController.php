<?php

class InscriptionController extends Controller {
	
	public function ajouter() {
		extract($_Post);
		if($password == null || $email == null || username == null)
      echo"Formulaire incomplet. Veuillez reessayer";
		else
			$dbh = Database::getInstance();
			$stmt = $dbh->prepare("INSERT INTO User (email, username, password) VALUES (:email, :username, :password);");
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', $password);
			$stmt->execute();
  }
}
?>
