<?php

class User
{
    private int $id;
    private string $name;
    private string $contrasena;
    private string $username;
    private int $numLogin;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

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

        return $this;
    }

    /**
     * Get the value of nick
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of nick
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getContrasena()
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
     * Get the value of points
     */
    public function getNumLogin()
    {
        return $this->numLogin;
    }

    /**
     * Set the value of NumLogin
     *
     * @return  self
     */
    public function setNumLogin($numLogin)
    {
        $this->numLogin = $numLogin;

        return $this;
    }
}
