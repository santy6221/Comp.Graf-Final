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
    public function getIdUsuario():int
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

    /**
     * Get the value of userName
     */
    public function getUserName():string
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre():string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of contrasena
     */
    public function getContrasena():string
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
    public function getNumLogin():int
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
