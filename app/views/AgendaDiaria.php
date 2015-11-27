<?php include '../templates/header.php'; ?>
<h3>Reporte Compra de Productos</h3>
<div class="form-inline">
        <input type="date" class="form-control" id="fechainicial" />
        <input type="date" class="form-control" id="fechafinal" />
        <button type="button" class="btnSearch btn btn-primary">Buscar</button></br>
        
</div> 
</br>

<div id="resultado" class="table-responsive">
   
 <table id="resultTable" class="table table-striped info tableList">
                  <thead>
                     <th>Id</th>
                     <th>Codigo</th>
                     <th>Monto</th>
                     <th>Fecha</th>
                     
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
                    var fechainicial = $('#fechainicial').val();
                     var fechafinal = $('#fechafinal').val();
                    var parametros = {"fechainicial":fechainicial,"fechafinal":fechafinal};
                    $.ajax({
                    type: "POST",
                    url: "../controller/reporte.controller.php",
                    data: parametros,
                    dataType: "html",
                    beforeSend: function(){
                          $("table#resultTable tbody").html("<p align='center'><img src='../recursos/images/ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
//                         
                        $("table#resultTable tbody").empty();
                        $("table#resultTable tbody").append(data);
                                   
                    }
              });
                    
                }
               
            });
</script>

<?php include '../templates/footer.php'; ?>

