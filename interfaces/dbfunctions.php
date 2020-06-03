<?php
require_once '../model/User.php';

interface dbfunctions
{
    public function verifyExistence(User $user);
    
    public function insert(User $data);
    
    public function select();

    public function getUser(User $user);

    public function update(User $user);

    public function delete(User $user);
}
