<?php
/**
 * Created by PhpStorm.
 * User: lesmet
 * Date: 22/10/2015
 * Time: 20:21
 */
 include "Conexion.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    if (isset($_POST["B_Registrar"])) {
$nombre = $_POST["Nombre"];
        $apellido1 = $_POST["Apellido1"];
        $apellido2 = $_POST["Apellido2"];
        $cedula = $_POST["Cedula"];
        $correo = $_POST["Correo"];
        $Passw = $_POST["Contrasenna"];

        $sql = "INSERT INTO usuario(CEDULA_USUARIO, NOMBRE_USUARIO,APELLIDO1_USUARIO, APELLIDO2_USUARIO, CORREO_USUARIO,CONTRASENNA)
VALUES ('$cedula','$nombre' , '$apellido1' ,'$apellido2' ,'$correo' ,'$Passw')";

        if ($conn->query($sql) === TRUE) {
            session_start();
            $_SESSION["usuario"] = $nombre;
            $_SESSION["log"] = true;
            header('Location: Index.php');

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


    }

$conn->close();

?>