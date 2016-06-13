<?php

class InscriptionController extends Controller {
	
	public function connect() {
		extract($_Post);
		if($password == null || $username == null)
      echo"Formulaire incomplet. Veuillez reessayer";
		else{
			$dbh = Database::getInstance();
			$stmt = $dbh->prepare("Select password from User where username == :username;");
			$stmt->bindParam(':username', $username);
			$returnedPassword = $stmt->execute();
    }
  }
}
?>
