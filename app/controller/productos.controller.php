<?php
if(isset($_POST['b']))
{
   $buscar = $_POST['b'];
    
            include '../model/productos.php';
            $con = new Productos();
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
                    <td>{$listar[$i]['idproducto']}</td>
                    <td>{$listar[$i]['nom_pro']}</td>
                    <td>{$listar[$i]['unidad_med']}</td>
                    <td>{$listar[$i]['precio']}</td>

                    <td>
                        <a href='../controller/productos.controller.php?action=delete&id={$listar[$i]['id']}'><img src='../recursos/images/delete.png'></a>
                        <a href='productosEdit.php?action=edit&id={$listar[$i]['id']}'><img src='../recursos/images/edit.png'></a>
                    </td>
                    </tr>

                    ";

            }
      }
}
if(isset($_POST['submit']) && $_POST['submit'] == "Guardar"){
    
       $nom = $_POST['nom_pro'];
       $uni = $_POST['unidad_med'];
       $pre = $_POST['precio'];      
   
    echo $nom;
    include '../model/productos.php';
    $con = new Productos();
    $result = $con->Nuevo($nom, $uni, $pre);
    
    if($result>0)
    {
        header('Location: ../views/productosList.php');
    }
    
   
}
if(isset($_POST['submit']) && $_POST['submit'] == "Editar"){
       
       $id = $_POST['idproducto'];
       $nom = $_POST['nom_pro'];
       $uni =$_POST['unidad_med'];
       $pre =$_POST['precio'];
   
       
      
    
    include '../model/productos.php';
    $con = new Productos();
    $result = $con->Update($id, $cod, $uni, $pre);
   
    if($result)
    {
        header('Location: ../views/productosList.php');
    }
    
   
}
if(isset($_GET['action']) AND $_GET['action'] == "delete")
{
      $id = $_GET['id'];
      include '../model/productos.php';
      $con = new Productos();
      $eliminar = $con->Delete($id);
      if($eliminar)
      {
           echo '<script type="text/javascript"> alert("El registro ah sido eliminado"); history.back();</script>';
      
      }
    
    
}

