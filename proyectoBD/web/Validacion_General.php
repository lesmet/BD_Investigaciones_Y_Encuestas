<?php
session_start();
if (isset($_POST["B_cerrar_Session"])) {
    unset($_SESSION["usuario"]);


}
header('Location: Index.php');
?>