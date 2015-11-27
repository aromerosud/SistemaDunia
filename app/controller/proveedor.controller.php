<?php
if(isset($_POST['b']))
{
   $buscar = $_POST['b'];
    
            include '../model/proveedor.php';
            $con = new Proveedor();
            $listar = $con->ConsultarByDesc($buscar);
            if(empty($listar))
            {
		echo "<tr>";
			echo "<td colspan='4'>There were not records</td>";
		echo "</tr>";
            }else{
                for($i=0; $i<count($listar); $i++)
                {
                    echo "<tr>
                    <td>{$listar[$i]['idproveedor']}</td>
                    <td>{$listar[$i]['codigo']}</td>
                    <td>{$listar[$i]['razsocial']}</td>
                    <td>{$listar[$i]['ruc']}</td>
                    <td>{$listar[$i]['direccion']}</td>
                    <td>{$listar[$i]['fecha']}</td>

                    <td>
                        <a href='../controller/proveedor.controller.php?action=delete&id={$listar[$i]['id']}'><img src='../recursos/images/delete.png'></a>
                        <a href='proveedorEdit.php?action=edit&id={$listar[$i]['id']}'><img src='../recursos/images/edit.png'></a>
                    </td>
                    </tr>

                    ";

            }
      }
}
if(isset($_POST['submit']) && $_POST['submit'] == "Guardar"){
    
       $razon = $_POST['razsocial'];
       $ruc = $_POST['ruc'];
       $dire = $_POST['direccion'];
       $telefono = $_POST['telefono'];
       $web = $_POST['web'];
       $correo= $_POST['correo'];
       $login =$_POST['login'];
       $clave = $_POST['clave'];
       $fecha = $_POST['fecha'];
       
   
    
    include '../model/proveedor.php';
    $con = new Proveedor();
    $result = $con->Nuevo($razon, $ruc, $dire, $telefono, $web, $correo, $login, $clave, $fecha);
    
    if($result>0)
    {
        header('Location: ../views/proveedorList.php');
    }
    
   
}
if(isset($_POST['submit']) && $_POST['submit'] == "Editar"){
       
       $id = $_POST['idproveedor'];
       //$cod = $_POST['codigo'];
       $razon = $_POST['razsocial'];
       $ruc = $_POST['ruc'];
       $dire = $_POST['direccion'];
       $telefono = $_POST['telefono'];
       $web = $_POST['web'];
       $correo= $_POST['correo'];
       $login =$_POST['login'];
       $clave = $_POST['clave'];
       $fecha = $_POST['fecha'];
   
       
      
    
    include '../model/proveedor.php';
    $con = new Proveedor();
    $result = $con->Update($id,$razon, $ruc, $dire, $telefono, $web, $correo, $login, $clave, $fecha);
   
    if($result)
    {
        header('Location: ../views/proveedorList.php');
    }
    
   
}
if(isset($_GET['action']) AND $_GET['action'] == "delete")
{
      $id = $_GET['id'];
      include '../model/proveedor.php';
      $con = new Proveedor();
      $eliminar = $con->Delete($id);
      if($eliminar)
      {
           echo '<script type="text/javascript"> 
               alert("El registro ah sido eliminado"); 
              </script>';
          // header('Location: ../views/pacienteList.php');
      }
    
    
}
