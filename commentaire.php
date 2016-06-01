<?php
class Commentaire{
  private $idUser;
  private $texte;
  private $dateComm= = date("Y-m-d H:i:s", mktime($_REQUEST["Hour"],$_REQUEST["Min"],$_REQUEST 
["Sec"],$_REQUEST["Month"],$_REQUEST["Day"],$_REQUEST["Year"]));
  
  function __construct($idUser, $texte){
    $this->idUser=($idUser);
    $this->texte=($texte);
  }
  
  function getTexte(){
    return $this->texte;
  }
  
  function getDateComm(){
    return $this->dateComm;
  }
  
  function setTexte($new){
    return $this->texte=($new);
  }
}