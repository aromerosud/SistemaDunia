<?php
if(isset($_POST['b']))
{
   $buscar = $_POST['b'];
    
            include '../model/analisis.php';
            $con = new Analisis();
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
                    <td>{$listar[$i]['referencia']}</td>
                    <td>{$listar[$i]['precio']}</td>
                    <td>{$listar[$i]['unidades']}</td>
                    <td>{$listar[$i]['comentario']}</td>

                    <td>
                        <a href='../controller/analisis.controller.php?action=delete&id={$listar[$i]['id']}'><img src='../recursos/images/delete.png'></a>
                        <a href='analisisEdit.php?action=edit&id={$listar[$i]['id']}'><img src='../recursos/images/edit.png'></a>
                    </td>
                    </tr>

                    ";

            }
      }
}
if(isset($_POST['submit']) && $_POST['submit'] == "Guardar"){
    
       $cod = $_POST['codigo'];
       $desc = $_POST['descripcion'];
       $para = $_POST['parametros'];
       $valmin = $_POST['valmin'];
       $valmax = $_POST['valmax'];
       $valinf = $_POST['valinf'];
       $valsup= $_POST['valsup'];
       $uni =$_POST['unidades'];
       $ayu = $_POST['ayunas'];
       $resu = $_POST['resultado'];
       $pre =$_POST['precio'];
       $come = $_POST['comentario'];
       $refe = $_POST['referencia'];       
   
    
    include '../model/analisis.php';
    $con = new Analisis();
    $result = $con->Nuevo($cod, $desc, $para, $valmin, $valmax, $valinf, $valsup, $uni, $ayu, $resu,$pre,$come,$refe);
    
    if($result>0)
    {
        header('Location: ../views/analisisList.php');
    }
    
   
}
if(isset($_POST['submit']) && $_POST['submit'] == "Editar"){
       
       $id = $_POST['id'];
       //$cod = $_POST['codigo'];
       $cod = $_POST['codigo'];
       $desc = $_POST['descripcion'];
       $para = $_POST['parametros'];
       $valmin = $_POST['valmin'];
       $valmax = $_POST['valmax'];
       $valinf = $_POST['valinf'];
       $valsup= $_POST['valsup'];
       $uni =$_POST['unidades'];
       $ayu = $_POST['ayunas'];
       $resu = $_POST['resultado'];
       $pre =$_POST['precio'];
       $come = $_POST['comentario'];
       $refe = $_POST['referencia'];
   
       
      
    
    include '../model/analisis.php';
    $con = new Analisis();
    $result = $con->Update($id,$cod, $desc, $para, $valmin, $valmax, $valinf, $valsup, $uni, $ayu, $resu,$pre,$come,$refe);
   
    if($result)
    {
        header('Location: ../views/analisisList.php');
    }
    
   
}
if(isset($_GET['action']) AND $_GET['action'] == "delete")
{
      $id = $_GET['id'];
      include '../model/analisis.php';
      $con = new Analisis();
      $eliminar = $con->Delete($id);
      if($eliminar)
      {
           echo '<script type="text/javascript"> alert("El registro ah sido eliminado"); history.back();</script>';
          // header('Location: ../views/pacienteList.php');
      }
    
    
}

