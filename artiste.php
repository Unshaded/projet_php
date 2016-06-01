<?php
class Artiste{
  private $idArtiste;
  private $nomScene;
  
  function __construct($nomScene){
    $this->nomScene=($nomScene);
  }
  
  function getIdArtiste(){
    return $this->idArtiste;
  }
  
  function getNomScene(){
    return $this->nomScene;
  }
  
  function setNomScene($new){
    return $this->nomScene=($new);
  }
  
}
?>