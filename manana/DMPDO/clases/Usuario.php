<?php

class Usuario {
    private $id;
    private $email;
    private $password;
    private $avatar;

    public function __construct(string $email, string $pass)
    {
        $this->setEmail($email);
        $this->setPassword($pass);
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setPassword(string $pass)
    {
        $this->password = $pass;
    }
    public function setId(string $id)
    {
        $this->id = $id;
    }
    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAvatar()
    {
        return $this->avatar;
    }


}
