<?php
    require_once "../../clases/conexion.php";
    $c=new conectar();
    $conexion=$c->conexion();
    
    //Mostrando los registros de las categorías
    $sql="SELECT id_categoria , nombreCategoria FROM categorias";
    $result=mysqli_query($conexion,$sql);
?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Categorias</label></caption>
    <tr>
        <td>Categoria</td>
        <td>Editar</td>
        <td>Eliminar</td>

    </tr>
    <?php
        while($ver=mysqli_fetch_row($result)):
    ?>
    <tr>
        <td><?php echo $ver[1] ?></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <span class="btn btn-warning btn-xs">
                <span class="glyphicon glyphicon-pencil"></span>
            </span>
        </td>
        <td>
            <span class="btn btn-danger btn-xs">
                <span class="glyphicon glyphicon-remove"></span>
            </span>
        </td>

    </tr>
    <?php
        endwhile;       
    ?>
</table>