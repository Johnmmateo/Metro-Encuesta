<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="<?php echo base_url('js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/chartJS/Chart.min.js') ?>"></script>

    <title>Metro encuesta</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.2.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-9b6g9YkA3pNts/17Rv1oVN633iGTGjRNrBHSn2XFY0WJVdha5Ev3MOVPmJPZpFqD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">



    <style media="screen">


@import url('https://fonts.googleapis.com/css?family=Lobster');

.resultados{
    margin: auto;
    margin-top: 40px;
    width: 1000px;
}

      @media screen and (max-width:1200px){

      }


    .contenedor {
    	width: 500px;
    	height: 500px;
    	text-align: left;
      margin-top: 6%;
      margin-left: 4.5%;
    	padding: 20px;
    	background: #fff;
    	overflow: auto;
    	font-family: 'Open Sans';
    	border-radius: 4px;
    }




    .contenedor h1 {
      font-family: 'Lobster', cursive;
    	font-size: 38px;
    	font-weight: 600;
    	color: #127ba3;
    }

    .h-g{
      text-align: center;
      margin-top: 6%;
      font-family: 'Lobster', cursive;
      font-size: 33px;
      font-weight: 600;
      color: #127ba3;

    }


.tipo{
font-size:25px;
  text-align: center;
  font-family: 'Lobster', cursive;
  color: #127ba3;

}

    .contenedor h2 {
      font-family: 'Lobster', cursive;
    	color: #127ba3;
    }

    .contenedor hr {
    	background: #0080ff;
    	width: 20%;
    	height: 5px;
    	border: none;
    	margin: 20px 0;
    	border-radius: 50px;
    }

    p {
    	margin-bottom: 20px;
      text-align: justify;
    	line-height: 28px;
    	font-size: 16px;
    	color: #414141;
    }
    .contenedor::-webkit-scrollbar {
    	width: 7px;
    }

    .contenedor::-webkit-scrollbar-thumb {
    	background: #0080ff;
    	border-radius: 5px;
    }
    .cont {
    	width: 1000px;
    	height: 400px;
      margin: 50px auto;
    	overflow: auto;
    	font-family: 'Open Sans';
    	border-radius: 6px;
    }

    .cont::-webkit-scrollbar {
    	width: 10px;
    }

    .cont::-webkit-scrollbar-thumb {
    	background: #0000ff;
    	border-radius: 2px;
    }


    @font-face {
      font-family: 'flexslider-icon';
      src: url('fonts/flexslider-icon.eot');
      src: url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('fonts/flexslider-icon.woff')
      format('woff'), url('fonts/flexslider-icon.ttf') format('truetype'), url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
      font-weight: normal;
      font-style: normal;
    }

    *{
    	margin: 0;
    	padding: 0;
    }

    .flexslider{
    	width: 100%;
    	position: relative;
    }

    .slides{
    	overflow: hidden;
    }

    .slides img{
    	width: 100%;
    }

    .slides,
    .flex-control-nav,
    .flex-direction-nav {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .flex-control-nav{
    	width: 100%;
    	text-align: center;
    	position: absolute;
    	bottom: 5%;
    	z-index: 999;
    }

    .flex-control-nav li{
    	display: inline-block;
    	margin: 0 6px;
    }

    .flex-control-nav li a{
    	display: block;
    	background: #777777;
    	width: 12px;
    	height: 12px;
    	border-radius: 12px;
    	text-indent: -9999px;
    }

    .flex-control-nav li a:hover{
    	background: #2E2E2E;
    }

    .flex-control-nav li a.flex-active{
    	background: #2E2E2E;
    }

    .flex-direction-nav a{
    	display: block;
    	text-decoration: none;
    	position: absolute;
    	top: 50%;
    	z-index: 999;
    	width: 40px;
    	height: 40px;
    	overflow: hidden;
    	opacity: 0;
    	-webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .flex-direction-nav .flex-prev{
    	left: 0;
    }

    .flex-direction-nav .flex-next{
    	right: 0;
    }

    .flex-direction-nav a:before {
      font-family: "flexslider-icon";
      font-size: 40px;
      display: inline-block;
      content: '\f001';
      color: #fff;
      text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
    }
    .flex-direction-nav a.flex-next:before {
      content: '\f002';
    }

    .flex-caption p{
    	font-family: Lato;
    	position: absolute;
    	top: 50%;
    	text-align: center;
    	width: 100%;
    	font-size: 45px;
    	color: #fff;
    	font-weight: bold;
    }

    .flexslider:hover .flex-direction-nav .flex-prev{
    	opacity: 0.7;
    	left: 10px;
    }

    .flexslider:hover .flex-direction-nav .flex-prev:hover{
    	opacity: 1;
    }

    .flexslider:hover .flex-direction-nav .flex-next{
    	opacity: 0.7;
    	right: 10px;
    }

    .flexslider:hover .flex-direction-nav .flex-next:hover{
    	opacity: 1;
    }



    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed|Permanent+Marker&effect=outline');


#rr{
  margin-left: 3%;
}

 .carta:hover{
  transition: 0.5s;
  transform: rotateZ(3.5deg);
}

 .carta{
  margin: 1%;
  float: left;
  width: 22.5%;
  border: 1px  solid lightgray;
  border-radius: 3px;
  background: white;
  height: 130px;
  box-shadow:  3px 3px 2px lightgray;
}

 .carta  h4{
  margin-left: 3%;
  margin-top: 2%;
  color: #2A87EB;
}


.carta  h6{

  text-align: justify;
 margin-left: 3%;
  margin-right: 50%;
 margin-top: 2%;
 color: black;
font-size: 15px;
}

 .carta  p{
  float: right;
  margin-top: 13%;
  margin-right: 3%;
  color: gray;
}

@media screen and (max-width:1000px){
.carta{
    margin-top: 5%;
    width:100%;
    height: 150px;
    font-size: 20px;
  }
.carta p{
    margin-top: 6%;
    display: block;
  }

}



.checked{
  color:orange;
}

.form-check{

font-size: 18px;
}

    .jumbotron{
      bottom: 0;
      position: relative;
      margin: 0;
    }

    .navbar .collapse .nav-item{
      font-size: 20px;
    }


.btn{
  padding: 8px;
  padding-top: 3px;
  padding-bottom: 2px;
}

    *{
      margin: 0;
      padding: 0;
      font-family: 'Roboto Condensed', sans-serif;
    }
    .navbar .navbar-brand{
      font-family: 'Permanent Marker', cursive;
      font-size: 20px;
    }

    .navbar .collapse .nav-item :hover{
      border-radius: 5px;
      background-color: white;
      transition:0.3s;
      color:#158CBA;

      }


#imageUser{
  margin-bottom: 2%;

}


  .navbar .collapse .btn-group .dropdown-menu{
    margin-top: 35px;
  }

  #finding{
width: 530px;
margin-left: 80px;

  }

  #find{
    padding: 6px 12px 7px;
  }

.form-control{
  font-size: 17px;
}

#opinion{
  resize: none;
  font-size: 22px;
  text-align: justify;
}



  @media screen and (max-width:1100px){


    #fechaEncuesta{
      width: 36%;
    }


    .navbar .collapse .nav-item{
      width: 30%;
      margin: auto;
      margin-top: 2%;
      margin-bottom: 2%;
      text-align: center;
      font-size: 25px;
    }


    .btn-group{
    width: 30%;
    margin: auto;
    }

    .navbar .collapse .btn-group .dropdown-menu{
      width: 50%;
      margin: auto;
    }

    #theone{
width: 100%;
margin: 0;
    }


      #finding{
    width: 70%;

      }

      #find{
        padding: 6px 12px 7px;
      }
  }




    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a style="font-family:'Forte'"class="navbar-brand font-effect-outline" href="<?php echo base_url('Maincontroller/') ?>">Metro-EncuestaRD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">

<?php

if($this->session->userdata('idadmin')){
$var = base_url('Maincontroller/search');

echo "
    <center>
  <form class='form-inline' action='{$var}' method='post'>
    <input id='finding' class='form-control rounded-0' placeholder='Filter form' type='text' name='search' value=''>
    <button id='find' class='btn btn-light rounded-0' type='submit' name='button'><i class='fas fa-search'></i></button>
  </form></center>
";


}

 ?>

        <ul class="navbar-nav ml-auto">


          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Maincontroller') ?>">Inicio<span class="sr-only">(current)</span></a>
          </li>

        <?php

        $variable = base_url('Maincontroller/grafica');

        if ($this->session->userdata('idadmin')) {
          echo "  <li class='nav-item active'>
              <a class='nav-link' href='{$variable}'>Grafico<span class='sr-only'>(current)</span></a>
            </li>";
        }

         ?>



          <?php

          if($this->session->userdata('id')){

            $form = base_url('Maincontroller/form');

            echo "  <li class='nav-item active ''>
              <a class='nav-link' href='{$form}'>Encuesta</a>
              </li>";

          }

           ?>




          <li id="contacto" class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Maincontroller/contacto'); ?>">Contacto</a>
          </li>



<?php


$admin = base_url('Login/admin');


$out = base_url('Login/logout');/*
$member = base_url('Maincontroller/Listademiembros');*/


if ($this->session->userdata('idadmin')) {
$vart = base_url('Maincontroller/Listademiembros');

  echo "
  <div class='btn-group dropleft '>
    <button id='theone' type='button' class='btn btn-secondary dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    <i class='fas fa-user'></i>
    </button>
    <div class='dropdown-menu'>
          <a class='dropdown-item' href='{$vart}'>Miembros</a>
      <a class='dropdown-item' href='{$out}'>Log out</a>
    </div>
  </div>
  ";
}else if($this->session->userdata('id')){
  echo "
  <div class='btn-group dropleft '>
    <button id='theone' type='button' class='btn btn-secondary dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    <i class='fas fa-user'></i>
    </button>
    <div class='dropdown-menu'>
      <a class='dropdown-item' href='{$out}'>Log out</a>
    </div>
  </div>
  ";


} else  {

  echo "
  <div class='btn-group dropleft '>
    <button id='theone' type='button' class='btn btn-secondary dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    <i class='fas fa-user'></i>
    </button>
    <div class='dropdown-menu'>
      <div class='dropdown-divider'></div>
      <a class='dropdown-item'  href='#' data-toggle='modal' data-target='#ModalLogin'>Log in</a>
      <div class='dropdown-divider'></div>
      <a class='dropdown-item' href='{$admin}' >Admin</a>

    </div>
  </div>
  ";
}



?>





        </ul>

      </div>
    </nav>


    <div class="modal fade " id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="ModalLogin" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <center>
        <img id="imageUser" class="" src="<?php echo base_url('images/user.png') ?>" width="100px" height="100px" alt="...">
      </center>

      <form  action="<?php echo base_url('Login'); ?>" method="post">

        <div class="form-group">
          <input class="form-control form-control-lg" type="text" name="correo" placeholder="Correo" value="">
        </div>

        <div class="form-group">
          <input class="form-control form-control-lg" type="password" name="contrasena" placeholder="Contraseña" value="">
        </div>
        <p class="text-center">¿Aun no tienes cuenta?<a data-dismiss="modal" data-toggle="modal" data-target="#ModalRegister" class="text-decoration-none" href="#"> Registrate</a></p>

        <input class="btn btn-success btn-lg" type="submit" name="submit" value="Login">
      </form>
      </div>

    </div>
  </div>
</div>


<!-- Register -->



</script>

<div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="ModalRegister" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h1  style="font-family:'Forte';color:#158CBA;">Registrate</h1>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

  <form  action="<?php echo base_url('Login/registrar'); ?>" method="post">

    <div class="form-group">
      <input required class="form-control form-control-lg" type="text" name="nombre" placeholder="Nombre" value="">
    </div>

    <div class="form-group">
      <input required class="form-control form-control-lg" type="text" name="apellido" placeholder="Apellido" value="">
    </div>

    <div class="form-group">
      <input required class="form-control form-control-lg" type="text" name="correo" placeholder="Correo" value="">
    </div>

    <div class="form-group">
      <input required class="form-control form-control-lg" type="number" name="edad" placeholder="Edad" value="">
    </div>

    <div class="form-group">
      <input readonly class="form-control form-control-lg" type="fecha" name="fecha" placeholder="Fecha" value="<?php  echo date('Y-m-d'); ?>">
    </div>

    <div class="form-group">
      <input required class="form-control form-control-lg" type="password" name="contrasena" placeholder="Contraseña" value="">
    </div>

    <div class="form-group">
      <input required class="form-control form-control-lg" type="password" name="contrasena2" placeholder="Confirmar Contraseña" value="">
    </div>

    <input class="btn btn-success btn-lg" type="submit" name="submit" value="Register">

  </form>
  </div>

</div>
</div>
</div>
