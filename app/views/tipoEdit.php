<?php include '../templates/header.php';

   if(isset($_GET['action']) AND $_GET['action'] == "edit")
   {
        $id = $_GET['id'];
        
        //include '../model/distrito.php';
        include '../model/tipo.php';
        $con = new Tipo();
        //$condis = new Distrito();
        $resultado = $con->GetById($id);
      
       
        
    }
?>
<h3>Tipo Usuario Editar</h3>
<form action="../controller/tipo.controller.php" method="post">
    <div class="row" style="margin-left:50px; margin-right: 50; margin-top: 20px; ">
               <div class="panel panel-default">
                       <div class="panel-heading">Datos del tipo</div>
                       <div class="panel-body">
                           <div class="row" style="margin: 50px;">
                               <input type="text" name="id" hidden=""  value="<?php echo $resultado['id'];?>">
                                <div class="form-group">
                                    <label for="tipo">Codigo:</label>
                                    <input type="text" class="form-control" name="codigo"  placeholder="Codigo" required="" value="<?php echo $resultado['codigo'];?>" />
                                </div>
                               
                                 <div class="form-group">
                                    <label for="tipo">Descripcion:</label>
                                    <input type="text" class="form-control" name="descripcion"  placeholder="Descripcion" required="" value="<?php echo $resultado['descripcion']; ?>" />
                                </div>
                                 
                           </div>
                        </div>
                   </div>
              
           </div>       
         <div style="text-align: center">
             <a href="tipoList.php" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <input class="btn btn-primary" type="submit" name="submit" value="Editar">
        </div>
 </div>
    
</form>
<div class="resultado">
    
</div>

<?php include '../templates/footer.php'; ?>
