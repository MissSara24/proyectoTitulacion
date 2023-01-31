<?php

function connection(){
    $host = "localhost";
    $user = "pt-2426";
    $pass = "mM&7<-\U<R6$mb)8.";

    $bd = "proyectotitulacion";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>