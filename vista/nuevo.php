<?php
require_once("layouts/header.php");
?>
    <link href="css/app.css">

<h1 class="text-center-nuevo">NUEVO ALUMNO</h1>
<form class="nuevo" action="" method="get">
    <a href="index.php?m=nuevo" class="btn">NUEVO</a>
    <input class="nuv" type="text" placeholder="INGRESE NOMBRE:" name="nombre"><br>
    <input class="nuv" type="text" placeholder="INGRESE APELLIDO:" name="apellido"><br>
    <input class="nuv" type="text" placeholder="INGRESE DIRECCION:" name="direccion"><br>
    <input class="nuv" type="text" placeholder="INGRESE TELEFONO:" name="telefono"><br>
    <input class="nuv" type="text" placeholder="INGRESE OFICINA:" name="oficina"><br>
    <input type="submit" class="btn" name="btn" value="GUARDAR"><br>
    <input class="nuevo" type="hidden" name="m" value="guardar">
</form>

<?php
require_once("layouts/footer.php");
