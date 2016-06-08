<?php

class Connexion extends Model {
  public $username,$password, $admin;
	public static function connect( $username,$password, $admin ) {                                                                                                  
		$db = Database::getInstance();
		$sql = "select password from User where login = $login";
		$stmt = $db->prepare($sql);
		//$stmt->setFetchMode(PDO::FETCH_CLASS, "Contact");
		return $stmt->execute(array(
			":password"=>$data['password']));
	}
	public function toHTML()
	{
		return "login reussi";
	}
	}
}
?>