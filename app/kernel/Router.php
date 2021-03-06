<?php
class Router {
   public static function analyze( $query ) {
      $result = array(
         "controller" => "Error",
         "action" => "error404",
         "params" => array()
	 );
      if( $query === "" || $query === "/" ) {
				$result["controller"] = "Index";
		 		$result["action"] = "index";
      } 
		 else {
		  $parts = explode("/", $query);
		  if($parts[0] == "contact")  {
			  if (count($parts) == 1){
				  $result["controller"] = "Contact";
				  $result['action'] = "afficherListe";
			  }
			  if ((count($parts) == 2) && ($parts[1] == "afficher")){
            $result["controller"] = "Index";
            $result["action"] = "afficherListe";
            //$result["params"]["slug"] = $parts[1];            
			  }
			  if ( (count($parts) == 3) 
				  && ($parts[1] == "afficher")
				  && ($parts[0] == "contact")){

					  $result["controller"] = "Contact";
					  $result["action"] = "afficherContact";
					  $result["params"]["id"] = $parts[2];            
				  }
			  //

			  if ((count($parts) == 2) && ($parts[1] == "modifier")){

				  $result["controller"] = "Contact";
				  $result["action"] = "modifierContact";
				  $result["params"]["id"]= $parts[2];
				  $result["params"]["post"]= $_POST;
			  }
			  //
		  }
			 if($parts[0] == "artiste")  {
			  if (count($parts) == 1){
				  $result["controller"] = "Artiste";
				  $result['action'] = "afficherListe";
			  }
			  if ((count($parts) == 2) && ($parts[1] == "afficher")){
            $result["controller"] = "Artiste";
            $result["action"] = "afficherListe";
            //$result["params"]["slug"] = $parts[1];            
			  }
			  if ( (count($parts) == 3) 
				  && ($parts[1] == "afficher")
				  && ($parts[0] == "artiste")){

					  $result["controller"] = "Artiste";
					  $result["action"] = "afficherArtiste";
					  $result["params"]["id"] = $parts[2];            
				  }
			  //

			  if ((count($parts) == 2) && ($parts[1] == "ajouter")){

				  $result["controller"] = "Artiste";
				  $result["action"] = "ajouterArtiste";
					$result["params"]["post"]= $_POST;
				}
				 
			  //
		  }
			if($parts[0] == "album")  {
			  if (count($parts) == 1){
				  $result["controller"] = "Album";
				  $result['action'] = "afficherListe";
			  }
			  if ((count($parts) == 2) && ($parts[1] == "afficher")){
            $result["controller"] = "Album";
            $result["action"] = "afficherListe";            
			  }
			  if ( (count($parts) == 3) 
				  && ($parts[1] == "afficher")
				  && ($parts[0] == "album")){

					  $result["controller"] = "Album";
					  $result["action"] = "afficherAlbum";
					  $result["params"]["id"] = $parts[2];            
				  }
			  //

			  if ((count($parts) == 2) && ($parts[1] == "ajouter")){

				  $result["controller"] = "Album";
				  $result["action"] = "ajouterAlbum";
				}
				//
			}
			 if($parts[0] == "inscription")  {
				  $result["controller"] = "Inscription";
				  $result['action'] = "inscription";
			  }
			  //
			 
				if($parts[0] == "connexion")  {
				  $result["controller"] = "Connexion";
				  $result['action'] = "connexion";
				}
			 if($parts[0] == "apropos"){
				 $result["controller"] ="Apropos";
				 $result["action"]="apropos";
			 }
	  }
	  return $result;
   }
}

?>
