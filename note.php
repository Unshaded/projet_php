<?php
class Note{
  private $evaluation;
  private $dateNote;
  
  
  function __construct($evaluation){
    $this->evaluation=($evaluation);
    $this->dateNote=(date("d-m-Y H:i"));
  }
  
  function getEvaluation(){
    return $this->evaluation;
  }
  
  function setEvaluation($new){
    return $this->evaluation=($new);
  }
}
?>