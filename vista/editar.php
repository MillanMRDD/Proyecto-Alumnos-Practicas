<?php
require_once("layouts/header.php");
?>
    <link href="css/app.css">
    <a href="index.php?m=nuevo" class="btn">NUEVO</a>
    <h1 class="text-center">EDITAR</h1>
    <form action="" method="get">
        <?php
        foreach ($dato as $key => $value):
            foreach ($value as $v):?>
            <input type="text" value="<?php echo $v['Nombre']?>" name="nombre"><br>
            <input type="text" value="<?php echo $v['Apellido']?>" name="apellido"><br>
            <input type="text" value="<?php echo $v['Direccion']?>" name="direccion"><br>
            <input type="text" value="<?php echo $v['Telefono']?>" name="telefono"><br>
            <input type="text" value="<?php echo $v['Oficina']?>" name="oficina"><br>
            <input type="hidden" value="<?php echo $v['id']?>" name="id"><br>

            <input type="submit" class="btn" name="btn" value="ACTUALIZAR"><br>
            <input type="hidden" name="m" value="actualizar">
            <?php
            endforeach;
        endforeach;
        ?>
    </form>

<?php
require_once("layouts/footer.php");
