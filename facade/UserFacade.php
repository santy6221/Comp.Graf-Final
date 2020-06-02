<?php



include_once '../Config.php';
require_once '../model/User.php';
require_once '../controller/UserController.php';

$alm=new User();
$controller = new UserController();

if (isset($_REQUEST['action'])) {
    echo $_REQUEST['action'];
    switch ($_REQUEST['action']) {

        case 'verifyExistence':
            echo 'user facade verify user';
            $alm->setUserName($_REQUEST["nickname"]);
            $alm->setContrasena($_REQUEST["password"]);
            if ($controller->verifyExistence($alm)) {
                echo 'usuario encontrado';
                $dbUser=$controller->getUser($alm);
                if ($dbUser->getContrasena()==$alm->getContrasena()) {
                    //no se cual es la ruta al main xd
                    //header('Location: ');
                    echo 'usuario y contraseña validos';
                    $dbUser->setNumLogin($dbUser->getNumLogin()+1);
                    $controller->update($dbUser);
                } else {
                    echo 'constraseña no valida';
                    //header('Location: http://localhost/Comp.Graf-Final/');
                }
            } else {
                echo 'usuario encontrado';
                $alm->setNombre("-");
                $alm->setNumLogin($_REQUEST["points"]);
    
                $controller->insert($alm);
            }

            
        break;

        case 'insert':
            //echo "<br/>select insert";
            $alm->setUserName($_REQUEST["username"]);
            $alm->setContrasena($_REQUEST["password"]);
            $alm->setNombre("-");
            $alm->setNumLogin($_REQUEST["points"]);

            $controller->insert($alm);
            break;

        case 'select':
            ($controller->select());
           
            break;

        case 'update':
            echo "<br/>select update";
            break;

        case 'delete':
            echo "<br/>select delete";
            break;
    }
}
