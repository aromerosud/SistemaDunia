<?php include '../templates/header.php';?>
<h3>Usuario Nuevo</h3>
<form action="../controller/usuario.controller.php" method="post">
  <div class="row">
               <div class="panel panel-default">
                       <div class="panel-heading">Datos del usuario</div>
                       <div class="panel-body">
                          
                                
                                <div class="form-group">
                                    <label for="nombre">Nombres:</label>
                                    <input type="text" class="form-control" name="nombres"  placeholder="Nombres"  required="" />
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Apellidos:</label>
                                    <input type="text" class="form-control" name="apellidos"  placeholder="Apellidos"  required=""  />
                                </div>
                               
                                <div class="form-group">
                                    <label for="tipo">Login:</label>
                                    <input type="text" class="form-control" name="login"  placeholder="Login"  required="" />
                                </div>
                                 <div class="form-group">
                                    <label for="tipo">Clave:</label>
                                    <input type="password" class="form-control" name="clave"  placeholder="Clave" required="" />
                                </div>
                                <div class="form-group">
                                    <label for="Contacto">Telefono:</label>
                                    <input type="text" class="form-control" name="telefono"  placeholder="Telefono" />
                                </div>
                            
                            
                               
                                 <div class="form-group">
                                    <label for="Contacto">Correo:</label>
                                    <input type="text" class="form-control" name="correo"  placeholder="Correo" />
                                </div>
                                
                                 
                           </div>
                        </div>
                   
              
           </div>       
         <div style="text-align: center">
             <a href="usuarioList.php" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <input class="btn btn-primary" type="submit" name="submit" value="Guardar">
        </div>
 </div>
    
</form>
<div class="resultado">
    
</div>

<?php include '../templates/footer.php'; ?>
