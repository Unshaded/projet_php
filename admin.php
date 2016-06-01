<?php
class Admin{
  private $idAdmin;
  private $pseudo;
  
  function __construct($pseudo){
    $this->pseudo=($pseudo);
  }
  
  function getIdAdmin(){
    return $this->idAdmin;
  }
  
  function getPseudo(){
    return $this->pseudo;
  }
  
  function setPseudo($new){
    return $this->pseudo=($new);
  }
}