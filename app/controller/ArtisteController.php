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
	
	public function ajouter(){
		extract($_POST);
		$dbh = Database::getInstance();
		if(isset($nomScene)){
			$stmt = $dbh->prepare("INSERT INTO Artiste (nomScene, biographie, naissance) VALUES (:nomScene, :bio, :naissance);");
			$stmt->bindValue(':nomScene', $nomScene);
			$stmt->bindValue(':bio', $bio);
			$stmt->bindValue(':naissance', $naissance);
			$stmt->execute();
		}
	}
}
?>
