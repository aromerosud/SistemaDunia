<?php
error_reporting(0);
session_start();

$id = $_POST['b'];
require_once '../model/analisis.php';
$objAna = new Analisis();
$_SESSION["analisis"][$id][$codigo][$descripcion]=$precio;

foreach ($_SESSION["analisis"] as $id => $arreglo) {
    foreach ($arreglo as $codigo => $arreglo2)
        {
        foreach ($arreglo2 as $descripcion =>$precio)
        {
           $articulo = $objAna->GetById($id);
           $codigo = $articulo["codigo"];
           $precio = $articulo["precio"];
           $descripcion = $articulo["descripcion"];
           $total =$total+ $precio;
            
        echo "<tr>
        <td>$id</td>
        <td>$codigo</td>
        <td>$descripcion</td>
        <td>$precio</td>
        <td>$total</td>
        
        <td>
                        <a href='../controller/analisis.controller.php?action=delete&id='><img src='../recursos/images/delete.png'></a>
                        <a href='analisisEdit.php?action=edit&id='><img src='../recursos/images/edit.png'></a>
        </td>
        </tr>
      
        ";
        }
      }
    
    
    
}


?>