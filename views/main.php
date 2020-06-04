<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../styles/historial.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- three -->

    <script type="text/javascript" src="../libs/three.js"></script>
    <script src="../libs/jquery-3.4.1.js"></script>
    <!-- Add all for GUI -->
    <script src="../libs/DAT.GUI.min.js"></script>
    <!--<script src="./libs/Stats.js"></script>-->
    <!-- Add to load Models -->
    <script src="../vendors/three.js-master/build/three.min.js"></script>
    <script src="../vendors/load/OBJLoader.js"></script>
    <script src="../vendors/load/MTLLoader.js"></script>
    <script src="../vendors/load/GLTFLoader.js"></script>
    <script src="../vendors/load/DRACOLoader.js"></script>
    <script src="../resources/bootstrap.min.js"></script>
    <!--<script src="./vendors/load/FBXLoader.js"></script>-->

    <!-- orbit controls -->
    <script type="text/javascript" src="../libs/OrbitControls.js"></script>
    <!-- main -->
    <script type="text/javascript" src="../src/main.js"></script>
</head>

<body style="background-color: #E4F1F2" onload="start()">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3B4859">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#" aria-disabled="true">Protocolos <span class="sr-only">(Current)</span></a>
                <a class="nav-item nav-link" href="http://localhost/protocolcomp/views/historial.php">Historial</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="text-align: center;">
                    <a href=".." class="buttonMapa">Volver</a>
                    <h1>Limpieza y salud</h1>
                    <p>La mejor forma de mantenerse saludable en lo posible, es teniendo una buena limpieza personal(y claro comiendo saludable).
                        Si mantienes una buena higiene personal, tendrás menos probabilidades de contagiarte de cualquier enfermedad y también
                        de contagiar a otros.
                        Mantenerte aseado no solo te afecta a ti positivamente si no también a otras personas como el personal de medicina,
                        pues si te cuidas, ellos tendrán menos carga de trabajo.
                    </p>
                    <a type="button" class="botella" onclick="Botella() ">Desinfectante</a>
                    <a type="button" class="Hombre" onclick="Hombre()">Doctor</a>
                    <a type="button" class="Cleanex" onclick="Cleanex()">Toallitas</a>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <canvas id="app" style="width: max-content;"></canvas>
                </div>
            </div>
        </div>
    </div>
</body>

</html>