<h1 text-align="center">MEDICAMENTOS</h1>

<form name="frmins" method="POST" action="" >
    
    Valor:<input type="text" name="valor" value="<?=$objtabla->getValor();?>">
    <input type="Submit" value="Enviar" name="btnguarda">
</form>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Laboratorio</td>
        <td>Presentacion</td>
        <td>Peso</td>
        <td>Unidad</td>
        <td>Nro lote</td>
        <td>Fecha de Vencimiento</td>
        <td>Estado</td>
    </tr>
    <?php
foreach ($vertabla as $datos) {
    echo "<tr><td>$datos[0]</td><td>$datos[1]</td><td>$datos[2]</td><td>$datos[3]</td><td>$datos[4]</td><td>$datos[5]</td><td>$datos[6]</td><td>$datos[7]</td><td>$datos[8]</td>
    </tr>";
}
?>
</table>