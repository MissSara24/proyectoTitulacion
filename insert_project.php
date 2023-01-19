<?php
include("connection.php");
$con = connection();

$id_proyecto = null;
$nombre = $_POST['nombre'];
$id_materia = $_POST['id_materia'];
$id_carrera = $_POST['id_carrera'];
$id_usuario = $_POST['id_usuario'];
$archivo = $_FILES['archivo'];
$periodo_esc = $_POST['periodo_esc'];
$descripcion = $_POST['descripcion'];
$calificacion = $_POST['calificacion'];
$integrantes = $_POST['integrantes'];

$sql = "INSERT INTO proyectos VALUES('$id_proyecto','$nombre','$id_materia','$id_carrera','$id_usuario','$archivo','$periodo_esc','$descripcion','$calificacion','$integrantes')";
$query = mysqli_query($con, $sql);

if($_FILES["archivo"]["error"]>0){
    echo "Error al cargar archivo";
}else{
    $permitidos = array("application/pdf");
    $limite=200;

    if(in_array($_FILES["archivo"]["type"],$permitidos)&& $_FILES["archivo"]["size"]<=$limite*1024){
        $ruta = 'files/'.$id_proyecto.'/';
        $archivo2=$ruta.$_FILES["archivo"]["name"];
            if(!file_exists($ruta)){
                mkdir($ruta);
            }
        }
} if($query){
    Header("Location: index.php");
}else{

}
?>