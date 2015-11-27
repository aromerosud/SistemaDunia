<?php
if(isset($_POST['fechainicial']))
{
   $fechaincial = $_POST['fechainicial'];
   $fechafinal = $_POST['fechafinal'];
    
            include '../model/reportelistar.php';
            $con = new ReporteListar();
            $listar = $con->MontoAtencion($fechaincial,$fechafinal);
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
                    <td>S/.{$listar[$i]['monto']}</td>
                    <td>{$listar[$i]['fecha']}</td>
                  
                    </tr>

                    ";

            }
      }
}

?>
