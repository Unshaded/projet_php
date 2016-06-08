<?php

class ConnexionController extends Controller {
	
	public function equals() {
		extract($_GET);
    if($password == null)
      return 0;
    else {
      if($this -> password == null)
      return 4;
      else{
        if($this -> password != $password)
      return 2;
        else
      return 1
      }
    }
  }
}
?>
