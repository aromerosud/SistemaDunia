<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="app/recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="app/recursos/css/small-business.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="float: left">
                    <img src="app/recursos/logo/logo.jpg" style="height: 80px; width:90px;" alt="">
                </a>
                 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Atencion</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal">
              Entrar
            </a></li>
              
            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="myModalLabel">Login<a class="anchorjs-link" href="#myModalLabel"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div class="modal-body" style="padding-left:100px; padding-right: 100px; padding-bottom: 50px;">
            <form method="post" action="app/controller/login.controller.php" class="form-signin">
                  <h2 class="form-signin-heading">Por favor ingrese</h2>
                  <label for="inputEmail" class="sr-only">Login</label>
                  <input type="text" id="" class="form-control" name="login" placeholder="Login" required autofocus><br>
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" class="form-control" name="clave"  placeholder="Password" required>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                 <input class="btn btn-primary" type="submit" name="submit" value="Ingresar">
                </form>
        </div>
        

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
         <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <div class="bs-example" data-example-id="simple-carousel">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="app/recursos/imagenes/1.jpg" alt="First slide [900x500]"  data-holder-rendered="true">
        </div>
        <div class="item">
          <img src="app/recursos/imagenes/2.jpg" alt="Second slide [900x500]"  data-holder-rendered="true">
        </div>
        <div class="item">
          <img src="app/recursos/imagenes/3.jpg" alt="Third slide [900x500]"  data-holder-rendered="true">
        </div>
        <div class="item">
          <img src="app/recursos/imagenes/3.jpg" alt="fourd slide [900x500]"  data-holder-rendered="true">
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>Sistema Dunia</h1>
                <p>Aplicacion dedicada a ayudarte a organizar tu dia,
                    encontrar cosas de interes para el hogar y la familia
                    para satisfacer sus necesidades.
                <a class="btn btn-primary btn-lg" href="#">Ver mas</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    This is a well that is a great spot for a business tagline or phone number for easy access!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
<div class="bs-example" style="padding:40px;" data-example-id="thumbnails-with-custom-content">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="app/recursos/imagenes/actividades.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3 id="thumbnail-label">Actividades<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
            <p>Ingrese al modulo de actividades, aqui podra encontrar una agenda que le permitira organizar su dia</p>
            <p><a href="#" class="btn btn-primary" role="button">Ir al modulo</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="app/recursos/imagenes/ofertas.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3 id="H1">Ofertas<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
            <p>La seccion de Ofertas, ingrese aquí para ver las ofertas del momento</p>
            <p><a href="#" class="btn btn-primary" role="button">Ir al modulo</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img data-src="holder.js/100%x200" alt="100%x200" src="app/recursos/imagenes/proveedores.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3 id="H2">Proveedores<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
            <p>La seccion proveedores es para conocer sus proveedores mas cercanos..</p>
            <p><a href="#" class="btn btn-primary" role="button">Ir al modulo</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; IsilLab 2015</p>
                </div>
            </div>
        </footer>

    </div>
    
        
    </body>
    <script src="app/recursos/js/jquery.js" type="text/javascript"></script>
    <script src="app/recursos/js/bootstrap.min.js" type="text/javascript"></script>
</html>
