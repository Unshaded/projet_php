<?php

class User{
    private $id;
    private $pseudo;
    private $mdp;
    private $email;

    function __construct($pseudo,$mdp,$email){
        $this->pseudo=($pseudo);
        $this->mdp=($mdp);
        $this->email=($email);
    }

    function getPseudo(){
        return $this->pseudo;
    }

    function getId(){
        return $this->id;
    }

    function getMdp(){
        return $this->mdp;
    }

    function getEmail(){
        return $this->email;
    }

    function setPseudo($new){
        return $this->pseudo=($new);
    }

    function setMdp($new){
        return $this->mdp=($new);
    }

    function setEmail($new){
        return $this->email=($new);
    }
}
