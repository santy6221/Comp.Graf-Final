<?php

require_once '../dao.php';

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
        $users=array();
        $rs=null;

        try {
            $this->pdo->prepare($sqlC)->execute();
  
            $result = $this->connection->execute($sqlC);
            if ($result) {
                foreach ($result as $row) {
                    $user = new User();
                    $user->setId($row->id);
                    $user->setNick($row->nick);
                    $user->setPassword($row->password);
                    $user->setPoints($row->points);
                }
                return $users;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
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
