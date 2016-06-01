<?php
class Artiste{
  private $idArtiste;
  private $nomScene;
  
  function __construct($nomScene){
    $this->nomScene=($nomScene);
  }
  
  function getNomScene(){
    return $this->nomScene;
  }
  
  function setNomScene($new){
    return $this->nomScene=($new);
  }
  
}
?>