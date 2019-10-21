<?php

abstract class Cliente
{
  private $email;
  private $pass;
  private $cuenta;

  public function __construct($email, $pass, Cuenta $cuenta)
  {
    $this->email = $email;
    $this->pass = $this->hashPassword($pass);
    $this->cuenta = $cuenta;
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

  public function setCuenta(Cuenta $account){
    $this->cuenta = $account;
  }
  public function getCuenta(): Cuenta
  {
    return $this->cuenta;
  }

  protected function hashPassword(string $password)
  {
      return password_hash($password, PASSWORD_DEFAULT);
  }
}
