<?php

require_once('dao.php');

class UserController extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(User $user)
    {
        $stmt = "INSERT INTO user (Nombre, username, Contrasena, NumLogin) VALUES (?, ?, ?)";

        DAO::INSERT($stmt);
    }

    public static function select()
    {
        $stmt = "SELECT * FROM final_comp.usuario";
        $result = DAO::SELECT($stmt);
        return $result;
    }

    public function update()
    {
        echo 'update';
    }

    public function delete()
    {
        echo 'delete';
    }
}
