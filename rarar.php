<h1 text-align="center">MEDICAMENTOS</h1>
<form action="">
Ingrese numero:<input type="text" name="n" value="">

    <input type="submit" value="env">
</form>
<form name="frmins" method="POST" action="" >
    <input type="hidden" name="id" value="<?=$objtabla->getId();?>"><br>
    Nombre:<input type="text" name="nombre" value="<?=$objtabla->getNombre();?>">
    Presentacion:<input type="text" name="presentacion" value="<?=$objtabla->getPresentacion();?>">
    Fecha de Vencimiento:<input type="date" name="fechavencim" value="<?=$objtabla->getFecha();?>">
    Laboratorio:<input type="text" name="laboratorio" value="<?=$objtabla->getLaboratorio();?>">
    <input type="Submit" value="Guardar" name="btnguarda">
</form>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Presentacion</td>
        <td>Fecha Vencimiento</td>
        <td>Laboratorio</td>
        <td>Opciones</td>
    </tr>
    <?php
foreach ($vertabla as $datos) {
    echo "<tr><td>$datos[0]</td><td>$datos[1]</td><td>$datos[2]</td><td>$datos[3]</td><td>$datos[4]</td>
    <td>
    <a href='?op=Elim&id=$datos[0]'>Eliminar</a>
    </td>
    </tr>";
}
?>
</table>