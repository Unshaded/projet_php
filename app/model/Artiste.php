<?php

class Artiste extends Model {
  public $idArtiste, $nomScene;
	public static function setFromId( $id,$data ) {                                                                                                  
		$db = Database::getInstance();
		$sql = "UPDATE Artiste set nomScene=:nomScene WHERE idArtiste = :id";
		$stmt = $db->prepare($sql);
		//$stmt->setFetchMode(PDO::FETCH_CLASS, "Contact");
		return $stmt->execute(array(
			":id" => $idArtiste,
			":nom"=>$data['nomScene']));
		//return $stmt->fetch();
	}

	public static function getFromId( $id ) {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Artiste WHERE idArtiste = :id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Artiste");
		$stmt->execute(array(":id" => $id));
		return $stmt->fetch();
	}

	public static function getList() {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Artiste";
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Artiste");
		return $stmt->fetchAll();
	}
}
?>