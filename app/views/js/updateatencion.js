 function updatedata(str){
	
	var id = str;
	var idpaciente = $('#pacid').val();
	var idmedico = $('#medid').val();
	var idempresa = $('#empcod').val();
	var edad = $('#ed').val();
        var telefono = $('#tele').val();
	var fax = $('#fax').val();
	var direccion = $('#dire').val();
	var fechaactual = $('#fechaact').val();
	var datas="idpaciente="+idpaciente+"&idmedico="+idmedico+"&idempresa="+idempresa+"&edad="+edad+"&telefono="+telefono+"&fax="+fax+"&direccion="+direccion+"&fechaactual="+fechaactual;
      
	$.ajax({
	   type: "POST",
	   url: "../controller/atencion.controller.php?id="+id,
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
  function insertanalisis(str){
      var idate = str;
      var idana = $('#anaid').val();
      
      var parametros = {"idate":idate,"idana":idana};
            $.ajax({
                type:"POST",
                url:"../controller/resultados.controller.php",
                data: parametros
            }).done(function (data){
                $('#exitoanali').html(data);
               viewdata();
               verMonto();
               verMontoTotal();
            });
        
  }
  function insertdocumento(str){
      var idatencion = str;
      var tipodocumento = $('#tipodocumento').val();
      var montodocumento = $('#montodocumento').val();
      var formapago = $('#formapago').val();
      var parametros = {"idatedocunuevo":idatencion,"idtipodocumento":tipodocumento,"montodocumento":montodocumento,"formapago":formapago};
            $.ajax({
                type:"POST",
                url:"../controller/documento.controller.php",
                data: parametros
            }).done(function (data){
                $('#exitodocum').html(data);
               viewdatadocumento();
               verMontoDocumento();
               verMontoTotal();
            });
        
  }
  function viewdata(){
                  var idatetabla = $('#idatencion').val();
                    $.ajax({
                    type: "GET",
                    url: "../controller/resultados.controller.php",
                    data:"idatetabla="+idatetabla
               }).done(function( data ) {
                $('#resultTable tbody').html(data);
                
  
               });
 }
 function viewdatadocumento(){
                  var idatetabladocumento = $('#idatencion').val();
                    $.ajax({
                    type: "GET",
                    url: "../controller/documento.controller.php",
                    data:"idatetabladocumento="+idatetabladocumento
               }).done(function( data ) {
                $('#resultTabledocu tbody').html(data);
                });
 }
 
    function verMontoDocumento(){
           
            $.get('../controller/documento.controller.php', {idatemonto:$('#idatencion').val()},
             function(data){
             data = JSON.parse(data);
             $('#acuentaId').val(data.total);
            });
             return false;
    }

 
    function verMonto(){
           
            $.get('../controller/atencion.controller.php', {idatemonto:$('#idatencion').val()},
             function(data){
             data = JSON.parse(data);
             $('#montoId').val(data.total);
             $('#montodoId').val(data.total);
             });
             return false;
    }
    
    function verMontoTotal()
    {
           $.get('../controller/documento.controller.php', {idatemontototal:$('#idatencion').val()},
             function(data){
             data = JSON.parse(data);
             $('#saldoId').val(data.montototal);
             });
             return false;
    }