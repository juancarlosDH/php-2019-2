<?php

abstract class Cliente
{
  private $email;
  private $pass;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email, $pass)
  {
    $this->email = $email;
    $this->pass = $pass;
  }

  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }
}
