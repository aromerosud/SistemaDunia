<?php
if(isset($_POST['b']))
{
   $buscar = $_POST['b'];
    
            include '../model/tipo.php';
            $con = new Tipo();
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
                    <td>{$listar[$i]['id']}</td>
                    <td>{$listar[$i]['codigo']}</td>
                    <td>{$listar[$i]['descripcion']}</td>
                   

                    <td>
                        <a href='../controller/tipo.controller.php?action=delete&id={$listar[$i]['id']}'><img src='../recursos/images/delete.png'></a>
                        <a href='tipoEdit.php?action=edit&id={$listar[$i]['id']}'><img src='../recursos/images/edit.png'></a>
                    </td>
                    </tr>

                    ";

            }
      }
}
if(isset($_POST['submit']) && $_POST['submit'] == "Guardar")
  {
     $cod = $_POST['codigo'];   
    $desc = $_POST['descripcion'];
     
      include '../model/tipo.php';
      $con = new Tipo();
      $result = $con->Nuevo($cod,$desc);
       echo $result;
    if($result>0)
    {
        header('Location: ../views/tipoList.php');
    }
    
   
}
if(isset($_POST['submit']) && $_POST['submit'] == "Editar"){
       
       $id = $_POST['id'];
       $code = $_POST['codigo'];
       $descr = $_POST['descripcion'];
      
    include '../model/tipo.php';
    $con = new Tipo();
    $result = $con->Update($id,$code,$descr);
   
    if($result)
    {
        header('Location: ../views/tipoList.php');
    }
    
   
}
if(isset($_GET['action']) AND $_GET['action'] == "delete")
{
      $id = $_GET['id'];
      include '../model/tipo.php';
      $con = new Tipo();
      $eliminar = $con->Delete($id);
      if($eliminar)
      {
           echo '<script type="text/javascript"> alert("El registro ah sido eliminado"); history.back();</script>';
          // header('Location: ../views/pacienteList.php');
      }
    
    
}