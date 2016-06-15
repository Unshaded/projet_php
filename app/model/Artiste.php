<?php

class Artiste extends Model {
  public $idArtiste, $nomScene, $bio, $naissance;
	public static function setFromId( $id,$data ) {                                                                                                  
		$db = Database::getInstance();
		$sql = "UPDATE Artiste set nomScene=:nomScene, biographie=:bio, naissance=:naissance WHERE idArtiste = :id";
		$stmt = $db->prepare($sql);
		return $stmt->execute(array(
			":id" => $idArtiste,
			":nom"=>$data['nomScene'],
			":bio"=>$data['bio'],
			":naissance"=>$data['naissance']));
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