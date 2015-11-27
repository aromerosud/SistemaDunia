<?php include '../templates/header.php';
if(isset($_GET['action']) AND $_GET['action'] == "edit")
   {
        $id = $_GET['id'];
       include '../model/produtos.php';
        $con = new Productos();
        $resultado = $con->GetById($id);
        
    }
?>
<h3>Edicion de productos</h3>
<form action="../controller/productos.controller.php" method="post">
 <div class="row">
               <div class="panel panel-default">
                       <div class="panel-heading">Datos del Producto</div>
                       <div class="panel-body">
                           <div class="row">
                            <div class="col-lg-6">
                                                              
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" name="nom_pro"  placeholder="Descripcion"  required="" value="<?php echo $resultado['descripcion']; ?>" />
                                </div>
                                
                                
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Direccion">Unidades:</label>
                                    <input type="text" class="form-control" name="unidad_med" placeholder="Unidades" value="<?php echo $resultado['unidades']; ?>"/>
                                </div>
                                <div class="form-group">
                                     <label for="Contacto">Precio:</label>
                                    <input type="text" class="form-control" name="precio"  placeholder="Precio" value="<?php echo $resultado['precio']; ?>"/>
                               </div>
                                
                                
                            </div>       
                           </div>
                        </div>
                   </div>
              
           </div>       
         <div style="text-align: center">
             <a href="productosList.php" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <input class="btn btn-primary" type="submit" name="submit" value="Editar">
        </div>
 </div>
    
</form>
<div class="resultado">
    
</div>


<?php include '../templates/footer.php'; ?>
