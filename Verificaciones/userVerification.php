<?php
include_once '../Config.php';
require_once '../model/User.php';
require_once '../facade/UserFacade.php';


$alm = new User();
$facade = new UserFacade();

echo 'user facade verify user';
$alm->setUserName($_POST["nickname"]);
$alm->setContrasena($_POST["password"]);

if ($facade->verifyExistence($alm)) {
    echo '<br> usuario encontrado';
    $dbUser = $facade->getUser($alm);
    if ($dbUser->getContrasena() == $alm->getContrasena()) {
        //no se cual es la ruta al main xd

        echo '<br> usuario y contraseña validos';
        $_SESSION["idUser"] = $dbUser->getIdUsuario();

        session_start();

        $dbUser->setNumLogin($dbUser->getNumLogin() + 1);

        $facade->update($dbUser);
        header('Location: http://localhost/protocolcomp/views/main.php');
    } else {
        echo '<br> constraseña no valida';
        header('Location: http://localhost/Comp.Graf-Final/');
    }
} else {
    echo '<br> usuario no encontrado';
    $alm->setNombre("-");
    $alm->setNumLogin(0);

    $facade->insert($alm);
    header('Location: http://localhost/Comp.Graf-Final/views/main.php');
}
