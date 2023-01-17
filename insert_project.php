<?php
include("connection.php");
$con = connection();

$id_proyecto = null;
$nombre = $_POST['nombre'];
$id_materia = $_POST['id_materia'];
$id_carrera = $_POST['id_carrera'];
$id_usuario = $_POST['id_usuario'];
$archivo = $_POST['archivo'];
$periodo_esc = $_POST['periodo_esc'];
$descripcion = $_POST['descripcion'];
$calificacion = $_POST['calificacion'];
$integrantes = $_POST['integrantes'];

$sql = "INSERT INTO proyectos VALUES('$id_proyecto','$nombre','$id_materia','$id_carrera','$id_usuario','$archivo','$periodo_esc','$descripcion','$calificacion','$integrantes')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: teacher.php");
}else{

}
?>