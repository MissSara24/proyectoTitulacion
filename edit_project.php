<?php

include("connection.php");
$con = connection();

$id_proyecto=$_POST["id_proyecto"];
$nombre = $_POST['nombre'];
$id_materia = $_POST['id_materia'];
$id_carrera = $_POST['id_carrera'];
$id_usuario = $_POST['id_usuario'];
$archivo = $_FILES['archivo'];
$periodo_esc = $_POST['periodo_esc'];
$descripcion = $_POST['descripcion'];
$calificacion = $_POST['calificacion'];
$integrantes = $_POST['integrantes'];

$sql="UPDATE proyectos SET nombre='$nombre', id_materia='$id_materia', id_carrera='$id_carrera', id_usuario='$id_usuario', archivo='$archivo',periodo_esc='$periodo_esc', descripcion='$descripcion', calificacion='$calificacion', integrantes='$integrantes' WHERE id_proyecto='$id_proyecto'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>