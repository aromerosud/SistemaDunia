<?php include '../templates/header.php'; ?>
<h3>Modulo Proveedor Favorito</h3>
<div class="form-inline">
        <input type="text" class="form-control" id="busqueda" placeholder="Buscar por ruc o razon" />
        <button type="button" class="btnSearch btn btn-primary">Buscar</button></br>
        
</div> 
</br>
<a href="proveedorAgregar.php">Agregar Proveedor</a>
<div id="resultado" class="table-responsive">
   
 <table id="resultTable" class="table table-striped info tableList">
                  <thead>
                     <th>Id</th>
                     <th>Codigo</th>
                     <th>Razon social</th>
                     <th>Direccion</th>
                     <th>Ruc</th>
                     <th>Correo</th>
                     <th>Actions</th>
                 </thead>
                 <tbody>
                     
                 </tbody>
          </table>
    </div>
<script type="text/javascript">
            $(document).ready(function($){
                $('.btnSearch').click(function (){
                    aplicarAjax();
                });
                function aplicarAjax(){
                    var consulta;
                    consulta = $("#busqueda").val();
                    $.ajax({
                    type: "POST",
                    url: "../controller/empresa.controller.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          $("table#resultTable tbody").html("<p align='center'><img src='../recursos/images/ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
//                          $("#resultado").empty();
//                          $("#resultado").append(data);
                          //$('table#resultTable tbody').html(response);
                        $("table#resultTable tbody").empty();
                        $("table#resultTable tbody").append(data);
                                   
                    }
              });
                    
                }
               
            });
</script>

<?php include '../templates/footer.php'; ?>

