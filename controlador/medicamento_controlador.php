<?php
//Llamada al modelo
require_once("modelo/modelomedicamento.php");
$objtabla= new Modelo_mitabla();

if(isset($_REQUEST['op']))
{
    if($_REQUEST['op']=="Elim") $objtabla->eliminar($_REQUEST['id']);
}

if (isset($_POST['btnguarda'])){
    $id=$_POST['id'];
    $fd[0]=$_POST['nombre'];
    $fd[1]=$_POST['presentacion'];
    $fd[2]=$_POST['fechavencim'];
    $fd[3]=$_POST['laboratorio'];
    $objtabla->instabla($id,$fd);
}

$vertabla=$objtabla->datostabla();

require_once("vistas/Vistatabletas.php");
?>