$(document).ready(function($){
                $('.btnSearch').click(function (){
                    aplicarAjax();
                });
                function aplicarAjax(){
                    var consulta;
                    consulta = $("#anaid").val();
                    $.ajax({
                    type: "POST",
                    url: "analisis_agregar.php",
                    data: "b="+consulta,
                    dataType: "html",
//                    beforeSend: function(){
//                          $("table#resultTable tbody").html("<p align='center'><img src='../recursos/images/ajax-loader.gif' /></p>");
//                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
//                          $("#resultado").empty();
//                          $("#resultado").append(data);
                          //$('table#resultTable tbody').html(response);
//                        $("table#resultTable tbody").empty();
                        $("table#resultTable tbody").html(data);
                                   
                    }
              });
                    
                }
            });