<?php
require_once("layouts/header.php");
?>
<link href="css/app.css">
<a  href="index.php?m=nuevo"  class="btnn">INTRODUZCA UN NUEVO ALUMNO</a>

<table>
    <tr class="tit">
        <td>ID</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>DIRECCION</td>
        <td>TELEFONO</td>
        <td>OFICINA</td>

    </tr>
    <tbody>
    <?php
    if(!empty($dato)):
    foreach ($dato as $key => $value)
        foreach ($value as $v):?>
            <tr class="subtit">
                <td><?php echo $v['id'] ?></td>
                <td><?php echo $v['Nombre'] ?></td>
                <td><?php echo $v['Apellido'] ?></td>
                <td><?php echo $v['Direccion'] ?></td>
                <td><?php echo $v['Telefono'] ?></td>
                <td><?php echo $v['Oficina'] ?></td>
                <td>
                    <a class="btn" href="index.php?m=editar$id=<?php  echo $v['id']?>">EDITAR</a>
                    <a class="btn" href="index.php?m=eliminar$id=<?php  echo $v['id']?>" onclick="return confirm('Estas seguro'); false">ELIMINAR</a>
                </td>
            </tr>
            <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="3">NO HAY REGISTROS</td>
    </tr>
    <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");
?>