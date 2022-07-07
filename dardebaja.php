<?php
$conexion=new mysqli("localhost", "root", "", "bdevaluacion");

$datosmed = fopen("medicamentosbaja.txt","w");

$consulta="SELECT * FROM medicamento WHERE fechaven =  DATEDIFF(DAY,-15,GETDATE()) ";

$reg = mysqli_query($conexion,$cosulta);

while($dato= mysqli_fetch_array($reg)){
    $fila=$dato[0].";".$dato[1].";".$dato[7]."\n";
    fwrite($datosmed,$fila);
}

fclose($datosmed);
echo "Los Archivos se generaron Correctamente"

?>
