<?php

include_once('../Config.php');
require_once('../model/User.php');
require_once('../controller/UserController.php');

$user = new User();
$controller = new UserController();

if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {

        case 'insert':
            //echo "<br/>select insert";

            $user->setNick($_REQUEST["nick"]);
            $user->setPassword($_REQUEST["password"]);
            $user->setPoints($_REQUEST["points"]);

            $controller->insert($user);
            break;

        case 'select':
            echo "<br/>select select";
            break;

        case 'update':
            echo "<br/>select update";
            break;

        case 'delete':
            echo "<br/>select delete";
            break;
    }
}
