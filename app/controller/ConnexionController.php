<?php

class ConnexionController extends Controller {
	
	public function connexion(){
		$this->view->display();
		
	}
	public function connect() {
		extract($_POST);
		if($mdp == null || $login == null){
      echo"Formulaire incomplet. Veuillez reessayer<br>";
		}
		else{
			$dbh = Database::getInstance();
			$stmt = $dbh->prepare("Select * from User where login = :login;");
			$stmt->bindParam(':login', $login);
			$stmt->execute();
			$result=$stmt->fetch();
			if($result['mdp'] == null)
        echo"Login introuvable";
      else{
        if($result['mdp'] != $mdp)
          echo"Mot de passe incorrect";
        else{
          if($result['mdp'] == $mdp)
            echo"Connexion reussie";
					$_SESSION['pseudo']=$result['login'];
        }
      }
    }
  }
}
?>
