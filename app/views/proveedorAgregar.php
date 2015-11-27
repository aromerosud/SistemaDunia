<?php include '../templates/header.php';
 include '../model/distrito.php';
   $con = new Distrito();
   $getByDis = $con->ConsultarByAll();
?>
<h3>Nuevo Proveedor</h3>
<form action="../controller/proveedor.controller.php" method="post">
  <div class="row">
               <div class="panel panel-default">
                       <div class="panel-heading">Datos del Proveedor</div>
                       <div class="panel-body">
                           <div class="row">
                            <div class="col-lg-6">
                                
                                <div class="form-group">
                                    <label for="Codigo">Razon social:</label>
                                    <input type="text" class="form-control"  name="razsocial" placeholder="Razon social"  required="" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="nombre">Ruc:</label>
                                    <input type="text" class="form-control" name="ruc"  placeholder="Ruc"  required="" />
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Direccion:</label>
                                    <input type="text" class="form-control" name="direccion"  placeholder="Direccion" runat="server" required=""  />
                                </div>
                               
                                <div class="form-group">
                                    <label for="tipo">Telefono:</label>
                                    <input type="text" class="form-control" name="telefono"  placeholder="Telefono" required="" />
                                </div>
                                
                                
                            </div>
                            <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="tipo">Web:</label>
                                    <input type="text" class="form-control" name="web"  placeholder="Web" required="" />
                                </div>
                                <div class="form-group">
                                    <label for="Correo">Correo:</label>
                                    <input type="text" class="form-control" name="correo" placeholder="Correo"/>
                                </div>
                                <div class="form-group">
                                    <label for="Fecha">Login:</label>
                                    <input type="text" class="form-control" name="login"  placeholder="Login"/>
                                </div>
                                 <div class="form-group">
                                    <label for="Contacto">Clave:</label>
                                    <input type="text" class="form-control" name="clave"  placeholder="Clave"/>
                                </div>
                                <div class="form-group">
                                     <label for="Contacto">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha"  placeholder="Fecha" value="<?php ; echo date('y-m-d');?>" />
                               </div>
                                
                            </div>       
                           </div>
                        </div>
                   </div>
              
           </div>       
         <div style="text-align: center">
             <a href="proveedorList.php" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <input class="btn btn-primary" type="submit" name="submit" value="Guardar">
        </div>
 </div>
    
</form>
<div class="resultado">
    
</div>

<?php include '../templates/footer.php'; ?>
