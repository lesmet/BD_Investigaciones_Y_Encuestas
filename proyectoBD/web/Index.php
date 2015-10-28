<?php
/**
 * Created by PhpStorm.
 * User: lesmet
 * Date: 10/10/2015
 * Time: 23:23
 * <font color="#006400">
 */
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head lang="en">
    <meta charset="UTF-8">
    <title>My Fomrs</title>
    <link rel="stylesheet" type="text/css" href="Style_botones.css">
    <link rel="stylesheet" type="text/css" href="Style_Div.css">

</head>

<body>


<div id="cont">

    <?php include "Menu.html";?>
    <h1>PAGINA PRINCIPAL</h1>
    <?php
    if (isset($_SESSION["usuario"]) == false  ) {

        ?>
    <div id="login">
        <font color="#006400">
        <h1>INICIAR SESION</h1></br>

            <form action="Validaciones_Usuario.php" method="post">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Usuario</strong></br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Usuario" required="true" ></br></br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Clave</strong></br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="Contrasenna" required="true" ></br></br>

            <button id="B_Iniciar_Sesion" name="B_Iniciar_Sesion" type="submit" onmouseover="mOver(this)" onmouseout="mOut(this)">
          <span style="cursor:pointer">
           Iniciar sesion
          </span>  </button>
            </form>
        </font>


    </div>

     <div id="Registrar">

         <h1>REGISTRARME</h1></br>
         <form action="Validaciones_Usuario.php" method="post">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Nombre" value="Nombre..."
                                                                     required="true"
                                                                     onfocus="if (this.value == 'Nombre...') {this.value = '';}"
                                                                     onblur="if (this.value == '') {this.value = 'Nombre...';}"/></br></br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Apellido1"
                                                                     value="Primer apellido..."
                                                                     onfocus="if (this.value == 'Primer apellido...') {this.value = '';}"
                                                                     onblur="if (this.value == '') {this.value = 'Primer apellido...';}"/></br></br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Apellido2"
                                                                     value="Segundo apellido..." required="true"
                                                                     onfocus="if (this.value == 'Segundo apellido...') {this.value = '';}"
                                                                     onblur="if (this.value == '') {this.value = 'Segundo apellido...';}"/></br></br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Cedula" value="Cedula..."
                                                                     onfocus="if (this.value == 'Cedula...') {this.value = '';}"
                                                                     onblur="if (this.value == '') {this.value = 'Cedula...';}"/></br></br>

             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Correo"
                                                                     value="Correo Electronico..." required="true"
                                                                     onfocus="if (this.value == 'Correo Electronico...') {this.value = '';}"
                                                                     onblur="if (this.value == '') {this.value = 'Correo Electronico...';}"/></br></br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="Contrasenna"
                                                                     value="Contraseña..." required="true"
                                                                     onfocus="if (this.value == 'Contraseña...') {this.value = '';}"
                                                                     onblur="if (this.value == '') {this.value = 'Contraseña...';}"/></br></br>
             <button id="B_Registrar" name="B_Registrar" type="submit" onmouseover="mOver(this)"
                     onmouseout="mOut(this)">
          <span style="cursor:pointer">
           Registrarme
          </span></button>
         </form>

     </div>
        <?php
    }else{
        ?>
        <div id="Menu_B">
        <h1>BUSQUEDA</h1></br>
        <form action="Validacion_General.php" method="post">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <input id="t_Buscar" type="text" name="tex_Buscar" value="Buscar..." onfocus="if (this.value == 'Buscar...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Buscar...';}" />
            <button id="B_Buscar" name="Buscar" type="submit" onmouseover="mOver(this)" onmouseout="mOut(this)"  >
        <span style="cursor:pointer">
Buscar
       </span><br> </button></br></br></br>
        </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="Index.php">Todos los Proyectos</a></br></br></br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="Index.php">Ultimos Proyectos</a></br></br></br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="Index.php">Ultimas Encuestas</a></br></br></br>
           </div>
        <div id="Creacion">
            <h1>EDICION</h1></br>
            <form action="Validacion_General.php" method="post">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="B_Crear_P" name="Crear_P" type="submit" onmouseover="mOver(this)" onmouseout="mOut(this)"  >
        <span style="cursor:pointer">
Crear nuevo Proyecto
       </span><br> </button></br></br></br>

            </form>
            &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="Index.php">Editar Proyecto </a></br></br></br>
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="Index.php">Editar Encuesta</a></br></br></br>
        </div>
        <?php

    }
         ?>
</div>

</div>




</body>
</html>
