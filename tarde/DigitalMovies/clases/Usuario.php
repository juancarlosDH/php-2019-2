<?php

class Usuario {
    private $email;
    private $password;
    private $avatar;

    public function __construct(string $email, string $password, string $avatar)
    {
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setAvatar($avatar);
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setPassword(string $pass)
    {
        $this->password = $pass;
    }
    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getAvatar(): string
    {
        return $this->avatar;
    }

}
