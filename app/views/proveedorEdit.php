<?php include '../templates/header.php';
   
    if(isset($_GET['action']) AND $_GET['action'] == "edit")
   {
        $id = $_GET['id'];
        
        //include '../model/distrito.php';
        include '../model/proveedor.php';
        $con = new Empresa();
        //$condis = new Distrito();
        $resultado = $con->GetById($id);
        $resulDistr = $con->ConsultarDistrito();
       
        
    }
?>
<h3>Proveedor Editar</h3>
<form action="../controller/proveedor.controller.php" method="post">
  <div class="row">
               <div class="panel panel-default">
                       <div class="panel-heading">Datos del proveedor</div>
                       <div class="panel-body">
                           <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="id" hidden=""  value="<?php echo $resultado['id'];?>">
                                    <label for="Codigo">Razon social:</label>
                                    <input type="text" class="form-control"  name="razsocial" placeholder="Razon social"  required="" value="<?php echo $resultado['razonsocial'];?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="nombre">Ruc:</label>
                                    <input type="text" class="form-control" name="ruc"  placeholder="Ruc"  required="" value="<?php echo $resultado['ruc'];?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Direccion:</label>
                                    <input type="text" class="form-control" name="direccion"  placeholder="Direccion" runat="server" required="" value="<?php echo $resultado['direccion'];?>" />
                                </div>
                               
                                <div class="form-group">
                                    <label for="tipo">Telefono:</label>
                                    <input type="text" class="form-control" name="telefono"  placeholder="Telefono" required="" value="<?php echo $resultado['telefono'];?>" />
                                </div>
                                
                                
                            </div>
                            <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="tipo">Web:</label>
                                    <input type="text" class="form-control" name="web"  placeholder="Web" required="" value="<?php echo $resultado['web'];?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="Correo">Correo:</label>
                                    <input type="text" class="form-control" name="correo" placeholder="Correo" value="<?php echo $resultado['correo'];?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="Fecha">Login:</label>
                                    <input type="text" class="form-control" name="login"  placeholder="Login" value="<?php echo $resultado['login'];?>"/>
                                </div>
                                 <div class="form-group">
                                    <label for="Contacto">Clave:</label>
                                    <input type="text" class="form-control" name="clave"  placeholder="Clave" value="<?php echo $resultado['clave'];?>"/>
                                </div>
                                <div class="form-group">
                                     <label for="Contacto">Fecha:</label>
                                    <input type="text" class="form-control" name="fecha"  placeholder="Fecha" value="<?php echo $resultado['fecha'];?>" />
                               </div>
                                
                            </div>       
                           </div>
                        </div>
                   </div>
              
           </div>       
         <div style="text-align: center">
             <a href="proveedorList.php" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <input class="btn btn-primary" type="submit" name="submit" value="Editar">
        </div>
 </div>
    
</form>
<div class="resultado">
    
</div>

<?php include '../templates/footer.php'; ?>



