<?php



include_once '../Config.php';
require_once '../model/User.php';
require_once '../controller/UserController.php';
require_once '../interfaces/dbfunctions.php';


class UserFacade implements dbfunctions
{
    public function insert(User $user)
    {
        $controller = new UserController();
        $controller->insert($user);
        session_start();
    }
    public function select()
    {
        $controller = new UserController();
        return $controller->select();
    }
           

    public function update(User $user)
    {
        $controller = new UserController();
        $controller->update($user);
    }


    public function delete(User $user)
    {
        $controller = new UserController();
        $controller->delete($user);
    }

    public function getUser(User $user):User
    {
        $controller = new UserController();
        return $controller->getUser($user);
    }

    public function verifyExistence(User $user):bool
    {
        $controller = new UserController();
        return $controller->verifyExistence($user);
    }
}
