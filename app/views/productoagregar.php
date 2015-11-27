<?php
error_reporting(0);
session_start();

$id = $_POST['b'];
require_once '../model/productos.php';
$objAna = new Productos();
$_SESSION["productos"][$id][$nom][$uni]=$precio;

foreach ($_SESSION["productos"] as $id => $arreglo) {
    foreach ($arreglo as $id => $arreglo2)
        {
        foreach ($arreglo2 as $descripcion =>$precio)
        {
           $producto = $objAna->GetById($id);
           $id = $producto["idproducto"];
           $precio = $producto["precio"];
           $nom = $producto["nom_pro"];
           $total =$total+ $precio;
            
        echo "<tr>
        <td>$id</td>
        <td>$nom</td>
        <td>$precio</td>
        <td>$total</td>
        
        <td>
                        <a href='../controller/productos.controller.php?action=delete&id='><img src='../recursos/images/delete.png'></a>
                        <a href='productosEdit.php?action=edit&id='><img src='../recursos/images/edit.png'></a>
        </td>
        </tr>
      
        ";
        }
      }
    
    
    
}


?>