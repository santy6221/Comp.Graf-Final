<?php

class DAO
{
    //El atributo $pdo es de caracter protegido, para que pueda usarlo la clase heredada
    protected $pdo;
    /*
    *    El constructor del DAO se encarga de inicializar la cadena de conexión
    *    hacia MySQL y esta instancia es guardada en la variable $pdo que es de tipo private.
    *    De esta manera en cada método de la clase puedo hacer referencia a la instancia de
    *    la conexión a MySQL.
    */
    public function __CONSTRUCT()
    {
        require('config.php');
        try {
            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /*    PDO es una capa abstracta para PHP que nos permite realizar consultas a
            *    la base de datos y entre sus motores soporta mysql, sqlserver, oracle etc.
            */
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /*public static function SELECT(string $stmt)
    {

        require('Config.php');
        $connection = mysqli_connect($host, $user) or die("No se pudo crear conexión");
        //$basededatos = mysqli_select_db($connection, $db) or die("Error en conexión de base de datos");
        $result = mysqli_query($connection, $stmt);
        mysqli_close($connection);
        $resultado = [];


        while ($columna  = mysqli_fetch_array($result)) {

            array_push($resultado, $columna);
        }
        return $resultado;
    }

    public static function INSERT(string $stmt)
    {
        require('Config.php');
        $connection = mysqli_connect($host, $user) or die("No se pudo crear conexión");
        //$basededatos = mysqli_select_db($connection, $db) or die("Error en conexión de base de datos");
        mysqli_query($connection, $stmt);
        mysqli_close($connection);
        print_r(mysqli_info($connection));
    }*/
}
