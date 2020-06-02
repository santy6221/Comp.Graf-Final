<?php

class User
{
    private $idUsuario;
    private $userName;
    private $nombre;
    private $contrasena;
    private $numLogin;

    public function __construct()
    {
    }




    /**
     * Get the value of idUsuario
     */
    public function getIdUsuario(): int
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getUserName()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUserName($username)
    {
        $this->username = $username;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of contrasena
     */
    public function getContrasena(): string
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get the value of numLogin
     */
    public function getNumLogin(): int
    {
        return $this->numLogin;
    }

    /**
     * Set the value of numLogin
     *
     * @return  self
     */
    public function setNumLogin($numLogin)
    {
        $this->numLogin = $numLogin;

        return $this;
    }
}
