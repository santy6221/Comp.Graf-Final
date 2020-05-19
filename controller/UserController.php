<?php

require_once('../dao.php');

class UserController extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(User $user)
    {
        $sqlC = "INSERT INTO user (Nick, `Password`, Points) VALUES (?, ?, ?)";

        try {

            $this->pdo->prepare($sqlC)->execute(
                // nickname points
                array(
                    $user->getNick(),  // GET 
                    $user->getPassword(),
                    $user->getPoints()     // GET 
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select()
    {
        $sqlC = "SELECT * FROM user";
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
