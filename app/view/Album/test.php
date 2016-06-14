	<?php if(isset($_SESSION['pseudo'])){
			echo 'Titre';
			echo '<input type="text" name="titre">';
			echo 'Artiste';
			echo '<select name="artiste">';
				foreach ($this->listArtist as $result)
				echo '<option value='.$result->idArtiste.'>'.$result->nomScene.'</option>';
			echo '</select>';
      echo 'Annee';
			echo '<input type="date" name="annee">';
      echo 'Genre';
			echo '<input type="text" name="genre">';
			echo '<input type="Submit" name="Ajouter">';
			echo '</form>';
			AlbumController::ajouter();
			}
			else
				echo "Vous ne pouve pas ajouter d'albums car vous n'êtes pas connecté."?>