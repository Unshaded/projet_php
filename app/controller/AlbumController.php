<?php

class AlbumController extends Controller {
	
	public function afficherListe(){
		$this->view->list = Album::getList();
		$this->view->display(); 

	}
	public function afficherAlbum() {
		$id = $this->route["params"]["id"];
		$this->view->album = Album::getFromId($id);
		$this->view->display();
	}
	
	public function ajouterAlbum(){
		$this->view->list = Album::getList();
		$this->view->listArtist=Artiste::getList();
		$this->view->display(); 
	}
	
	public function ajouter(){
		extract($_POST);
		$dbh = Database::getInstance();
		$stmt = $dbh->prepare("INSERT INTO Album (titre, nomScene, annee, genre) VALUES (:titre, :nomScene, :annee, :genre);");
		$stmt->bindParam(':titre', $titre);
		$stmt->bindParam(':nomScene', $nomScene);
		$stmt->bindParam(':annee', $annee);
		$stmt->bindParam(':genre', $genre);
		$stmt->execute();
	}
}
?>