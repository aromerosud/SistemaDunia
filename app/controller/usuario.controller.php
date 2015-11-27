<?php
if(isset($_POST['b']))
{
   $buscar = $_POST['b'];
    
            include '../model/usuario.php';
            $con = new Usuario();
            $listar = $con->ConsultarByApellido($buscar);
            if(empty($listar))
            {
		echo "<tr>";
			echo "<td colspan='4'>There were not records</td>";
		echo "</tr>";
            }else{
                for($i=0; $i<count($listar); $i++)
                {
                    echo "<tr>
                    <td>{$listar[$i]['idusuario']}</td>
                    <td>{$listar[$i]['nombres']}</td>
                    <td>{$listar[$i]['apellidos']}</td>
                    <td>{$listar[$i]['login']}</td>

                    <td>
                        <a href='../controller/usuario.controller.php?action=delete&idusuario={$listar[$i]['idusuario']}'><img src='../recursos/images/delete.png'></a>
                        <a href='usuarioEdit.php?action=edit&idusuario={$listar[$i]['idusuario']}'><img src='../recursos/images/edit.png'></a>
                    </td>
                    </tr>

                    ";

            }
      }
}
if(isset($_POST['submit']) && $_POST['submit'] == "Guardar"){
    
      
       $nom = $_POST['nombres'];
       $ape = $_POST['apellidos'];
       $telefono = $_POST['telefono'];
       $correo =$_POST['correo'];
       $login = $_POST['login'];
       $clave = $_POST['clave'];
      
      echo $ape;
    include '../model/usuario.php';
    $con = new Usuario();
    $result = $con->Nuevo($nom, $ape, $login, $clave, $telefono, $correo);
    
    if($result>0)
    {
        header('Location: ../views/usuarioList.php');
    }
    
   
}
if(isset($_POST['submit']) && $_POST['submit'] == "Editar"){
       
       $id = $_POST['idusuario'];
       
        $nom = $_POST['nombres'];
          $ape = $_POST['apellidos'];
     $telefono = $_POST['telefono'];
       $correo =$_POST['correo'];
     $login = $_POST['login'];
      $clave = $_POST['clave'];
     
    include '../model/usuario.php';
    $con = new Usuario();
    $result = $con->Update($id, 
            $nom, 
            $ape,  
            $login,
            $clave, 
            $telefono,
            $correo);
   
    if($result)
    {
        header('Location: ../views/usuarioList.php');
    }
    
   
}
if(isset($_GET['action']) AND $_GET['action'] == "delete")
{
      $id = $_GET['idusuario'];
      include '../model/usuario.php';
      $con = new Usuario();
      $eliminar = $con->Delete($id);
      if($eliminar)
      {
           echo '<script type="text/javascript"> alert("El registro ah sido eliminado"); history.back();</script>';
          // header('Location: ../views/pacienteList.php');
      }
    
    
}
