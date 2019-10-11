<?php
class Usuario {
    /** @var string */
    private $email;
    /** @var string */
    private $password;
    /** @var Celular */
    private $celular;
    /** @var int */
    private $id;
    /** @var BaseDatos */
    private $bd;

    /** es el metodo contructor
    * @param string $email
    * @param string $pass
    */
    public function __construct(string $email, string $pass)
    {
        $this->setEmail($email);
        $this->setPassword($pass);
    }

    /** es el que devuelve al email
    * @return string
    */
    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCelular(): ?Celular
    {
        return $this->celular;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $this->encriptarPass($password);
    }

    public function setCelular(Celular $celu)
    {
        $this->celular = $celu;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setBaseDatos(BaseDatos $bd)
    {
        $this->bd = $bd;
    }

    public function saludar(): string
    {
        return 'Hola ' . $this->getEmail();
    }

    public function encriptarPass(string $pass): string
    {
        return password_hash($pass, PASSWORD_DEFAULT);
    }

    public function mostrarTelefono(): string
    {
        /** @var Celular $celu */
        $celu = $this->celular;
        if ($celu->getMarca() == 'apple') {
            return $celu->getMarca() . ', ' . $celu->getModelo() . ' y soy fan de los iphones';
        }
        return $celu->getMarca() . ', ' . $celu->getModelo();
    }

    public function llamar(Usuario $usuario, int $tiempo): int
    {
        if ($this->getCelular()->getProveedor() == $usuario->getCelular()->getProveedor()) {
            return 0;
        } else {
            return 10 * $tiempo;
        }
    }

    public function guardar()
    {
        $bd = new BaseDatos;
        $this->setBaseDatos($bd);

        //si no tiene id se inserta en la BD
        if (!$this->getId()) {
            $this->bd->guardarUsuario($this);
            return 'me inserté porque no tengo id';
        //de lo contrario se actualiza
        } else {
            $this->bd->modificarUsuario($this);
            return 'actualicé mi info';
        }
    }


}
