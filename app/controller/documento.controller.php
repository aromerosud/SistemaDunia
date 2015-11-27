<?php
if(isset($_POST['idatedocunuevo']))
{
    $tipodocumento = ($_POST['idtipodocumento']);
    $idatencion = ($_POST['idatedocunuevo']);
    $montodocumento =($_POST['montodocumento']);
    $formapago = ($_POST['formapago']);
    include '../model/documento.php';
    $con = new Documento();
    $result =$con->Nuevo($idatencion, $tipodocumento, $montodocumento, $formapago);
    
   if($result)
                {
                     echo '<div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Exito!</strong> Los datos fueron guardados y actualizados.
                      </div>';

                }
                else {
                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Error!</strong>No se ingreso ningun documento o error en los datos.
                          </div>';
                }
    
}
if(isset($_GET['idatetabladocumento']))
{
    $idbuscar = $_GET['idatetabladocumento'];
    
    
            include '../model/documento.php';
            $con = new Documento();
            $listar = $con->GetByIdAtencion($idbuscar);

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
                    <td>{$listar[$i]['monto']}</td>
                    <td>{$listar[$i]['fechacreacion']}</td>
                    <td>{$listar[$i]['fechaactualizacion']}</td>

                 
                    <td>
                        <a href='../controller/documento.controller.php?action=edit&id={$listar[$i]['id']}'><img src='../recursos/images/edit.png'></a>
                    </td>
                    </tr>

                    ";

            }
      }
    
    
}

if(isset($_GET['idatemonto']))
{
     $id = $_GET['idatemonto'];
              include '../model/documento.php';
              $con = new Documento();
              $result = $con->GetByMonto($id);

              foreach ($result as $monto)
              {
                  echo json_encode($monto);   
              }
              
              
}

if(isset($_GET['idatemontototal']))
{
    $id = $_GET['idatemontototal'];
              include '../model/documento.php';
              $con = new Documento();
              $result = $con->GetByMontoTotal($id);

              foreach ($result as $monto)
              {
                  echo json_encode($monto);   
              }
              
              
}
if(isset($_GET['action']) AND $_GET['action'] == "edit")
{
      $id = $_GET['id'];
      include '../model/documento.php';
      $con = new Documento();
      $buscar = $con->GetById($id);
      $_SESSION["idatencion"]=$buscar['idingreso'];
      $editar = $con->Update($id);
     
      if($editar>0)
      {
          header('Location: ../views/ingresoEditar.php');
      }
    
    
   
}


?>
