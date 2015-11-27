<?php
if(isset($_POST['submit']) && $_POST['submit'] == "Ingresar"){
    
    $login = $_POST['login'];
    $clave = $_POST['clave'];
    
    try
    {
        include '../model/login.php';
        $con = new Login();
        $loginusuario = $con->ValidarUsuario($login, $clave);

        
        if($loginusuario==TRUE)
        {
            session_start();
            $_SESSION['login'] = $login;
            echo $_SESSION['login'];
            header("location: ../index.php ");
        }
        else {
            header("location: /labproyecto");
        }
    } 
    catch(Exception $ex)
    {
        echo $ex->getMessage();
    }
   
//    if($resulte['id'])
//    {
//       // header("location: /labproyecto");
//        echo 'Ohhhh';
//    }
//    else {
////           $_SESSION['idusuario'] = $resulte['id'];
////           $_SESSION['loginusu'] = $resulte['login'];
////           
////           header("location: ../index.php ");
//        echo 'Genial';
//        
//    }
}