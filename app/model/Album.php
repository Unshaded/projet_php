<?php

class Album extends Model {
  public $idAlbum, $titre, $annee, $genre;
	public static function setFromId( $id,$data ) {                                                                                                  
		$db = Database::getInstance();
		$sql = "UPDATE Album set titre=:titre,annee=:annee,genre=:genre WHERE idAlbum = :id";
		$stmt = $db->prepare($sql);
		//$stmt->setFetchMode(PDO::FETCH_CLASS, "Contact");
		return $stmt->execute(array(
			":id" => $idAlbum,
			":titre"=>$data['titre'],
      ":annee"=>$data['annee'],
      ":genre"=>$data['genre']));
		//return $stmt->fetch();
	}

	public static function getFromId( $id ) {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Album Al join Artiste Art on(Al.idArtiste = Art.idArtiste) WHERE idAlbum = :id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Album");
		$stmt->execute(array(":id" => $id));
		return $stmt->fetch();
	}

	public static function getList() {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Album";
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Album");
		return $stmt->fetchAll();
	}
}
?>