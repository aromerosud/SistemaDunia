<?php include '../templates/header.php';


   if(isset($_GET['action']) AND $_GET['action'] == "edit")
   {
        $id = $_GET['idusuario'];
        
        
        include '../model/usuario.php';
        $con = new Usuario();
        $resultado = $con->GetById($id);
    
    }
?>

<!--  -->

<h3>Edicion de paciente</h3>
<form action="../controller/usuario.controller.php" method="post">
<div class="row">
               <div class="panel panel-default">
                       <div class="panel-heading">Datos del medico</div>
                       <div class="panel-body">
                           
                                <input type="text" name="idusuario" hidden=""  value="<?php echo $resultado['idusuario'];?>">
                               
                                <div class="form-group">
                                    <label for="nombre">Nombres:</label>
                                    <input type="text" class="form-control" name="nombres"  placeholder="Nombres"  required="" value="<?php echo $resultado['nombres'];?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Apellidos:</label>
                                    <input type="text" class="form-control" name="apellidos"  placeholder="Apellidos"  required="" value="<?php echo $resultado['apellidos'];?>" />
                                </div>
                               
                                <div class="form-group">
                                    <label for="tipo">Login:</label>
                                    <input type="text" class="form-control" name="login"  placeholder="Login" required="" value="<?php echo $resultado['login'];?>"/>
                                </div>
                                 <div class="form-group">
                                    <label for="tipo">Clave:</label>
                                    <input type="password" class="form-control" name="clave"  placeholder="Clave"  required="" value="<?php echo $resultado['clave'];?>"/>
                                </div>
                                
                            
                            
                                
                                 <div class="form-group">
                                    <label for="Contacto">Correo:</label>
                                    <input type="text" class="form-control" name="correo"  placeholder="Correo"  value="<?php echo $resultado['correo'];?>"/>
                                </div>
                                <div class="form-group">
                                     <label for="Contacto">Telefono:</label>
                                     <input type="text" class="form-control" name="telefono"  placeholder="telefono" value="<?php echo $resultado['telefono'];?>"/>
                               </div>
                               
                                
                         
                        </div>
                   </div>
              
           </div>       
         <div style="text-align: center">
             <a href="usuarioList.php" type="button" class="btn btn-default" data-dismiss="modal">Regresar</a>
            <input  class="btn btn-primary" type="submit" name="submit" value="Editar">
        </div>
 </div>
    
</form>
<div class="resultado">
    
</div>


<?php include '../templates/footer.php'; ?>
