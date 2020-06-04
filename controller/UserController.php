<?php
require_once '../dao.php';
require_once '../interfaces/dbfunctions.php';

class UserController extends DAO implements dbfunctions
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyExistence(User $user): bool
    {
        $username = $user->getUserName();
        echo '<br>' . $username;
        $sqlC = "SELECT * FROM usuario WHERE username =  '$username' ";

        try {
            $statement = $this->pdo->prepare($sqlC);
            $result = $statement->execute();
            $rows = $statement->fetchAll(\PDO::FETCH_OBJ);

            if ($result) {
                foreach ($rows as $row) {
                    $data = new User();
                    $data->setIdUsuario($row->idUsuario);
                    if ($data->getIdUsuario() != null) {
                        return true;
                    }
                }
                //return $rows;
            }


            return false;
        } catch (Exception $e) {
            die($e->getMessage());
        }
        echo '<br> user controller verify false';
        return false;
    }

    public function insert(User $data)
    {
        echo 'insert ...controller';
        $sqlC = "INSERT into usuario (nombre, username, contrasena, numlogin)
        VALUES (?,?,?,?)";
        try {
            /*$sql = "INSERT INTO user(nickname,
                                     points)
                    VALUES (?,?)";
            */
            $this->pdo->prepare($sqlC)->execute(
                // nickname points
                array(
                    $data->getNombre(),
                    $data->getUserName(),
                    $data->getContrasena(),
                    $data->getNumLogin()
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select(): array
    {
        $sqlC = "SELECT * FROM usuario";
        $values = [];
        try {
            $statement = $this->pdo->prepare($sqlC);
            $result = $statement->execute();
            $rows = $statement->fetchAll(\PDO::FETCH_OBJ);

            if ($result) {
                foreach ($rows as $row) {
                    $data = new User();
                    $data->setIdUsuario($row->idUsuario);
                    $data->setNombre($row->Nombre);
                    $data->setUserName($row->username);
                    $data->setContrasena($row->Contrasena);
                    $data->setNumLogin($row->NumLogin);
                    array_push($values, $data);
                }
                return $values;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getUser(User $user): User
    {
        $username = $user->getUserName();
        echo $username;
        $sqlC = "SELECT * FROM usuario WHERE username =  '$username' ";

        try {
            $statement = $this->pdo->prepare($sqlC);
            $result = $statement->execute();
            $rows = $statement->fetchAll(\PDO::FETCH_OBJ);

            if ($result) {
                foreach ($rows as $row) {
                    $data = new User();
                    $data->setIdUsuario($row->idUsuario);
                    $data->setNombre($row->Nombre);
                    $data->setUserName($row->Username);
                    $data->setContrasena($row->Contrasena);
                    $data->setNumLogin($row->NumLogin);

                    return $data;
                }
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update(User $user)
    {
        echo 'update';
    }

    public function delete(User $user)
    {
        echo 'delete';
    }
}
