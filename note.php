<?php
class Note{
  private $evaluation;
  private $date;
  
  
  function __construct($evaluation){
    $this->evaluation=($evaluation);
    $this->date=(date("d-m-Y H:i"));
  }
  
  function getEvaluation(){
    return $this->evaluation;
  }
  
  function setEvaluation($new){
    return $this->evaluation=($new);
  }
}
?>