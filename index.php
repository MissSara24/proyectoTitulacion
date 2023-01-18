<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    include_once 'teacher.php';
}else if(isset($_POST['correo']) && isset($_POST['password'])){
    //echo "Validación de login";

    $userForm = $_POST['correo'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'teacher.php';
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once 'login.php';
    }

}else{
    //echo "Login";
    include_once 'login.php';
}


?>