<?php

class ArtisteController extends Controller {
	
	public function afficherListe(){
		$this->view->list = Artiste::getList();
		$this->view->display(); 

	}
	public function afficherArtiste() {
		$id = $this->route["params"]["id"];
		$this->view->artiste = Artiste::getFromId($id);
		$this->view->display();
	}
	
	public function ajouterArtiste(){
		$this->view->list = Artiste::getList();
		$this->view->display();
	}
	
	public function ajouter(extract($_POST[$nomScene])){
		$dbh = Database::getInstance();
		$stmt = $dbh->prepare("INSERT INTO Artiste (nomScene) VALUES (:nomScene)");
		$stmt->bindParam(':nomScene', $nomScene);
	}
}
?>
