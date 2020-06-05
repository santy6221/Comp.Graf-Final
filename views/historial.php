<!DOCTYPE html>
<html lang="en">

<?php
require_once '../controller/UserController.php';
require_once '../model/User.php';

$data = [];
$usercontroller = new UserController();
$data = $usercontroller->select();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salud | Historial</title>
    <link rel="stylesheet" href="../resources/bootstrap.min.css">
    <script src="../resources/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/historial.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3B4859">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#" aria-disabled="true">Historial <span class="sr-only">(Current)</span></a>
                <a class="nav-item nav-link" href="http://localhost/protocolcomp/views/main.php">Protocolos</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Id</div>
                <div class="col col-2">Nombre</div>
                <div class="col col-3">Usuario</div>
                <div class="col col-4">#Ingresos</div>
            </li>

            <?php foreach ($data as $user) :; ?>

                <li class="table-row">
                    <div class="col col-1" data-label="Id"><?php echo $user->getIdUsuario() ?></div>
                    <div class="col col-2" data-label="Name"><?php echo $user->getNombre() ?></div>
                    <div class="col col-3" data-label="User"><?php echo $user->getUserName() ?></div>
                    <div class="col col-4" data-label="Amount"><?php echo $user->getNumLogin() ?></div>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>