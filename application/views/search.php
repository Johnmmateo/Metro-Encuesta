<div class="container">
  <div class="row">
    <div style='margin-top:5%;margin-bottom:3%' class="alert alert-primary col col-md-12">
    <strong > Resultados encontrados: </strong>
    </div>
  </div>
</div>

<div class="container">
<div class="row">


<?php

$con = mysqli_connect('localhost','id8624172_root','mysql','id8624172_metroencuesta');
$register = mysqli_query($con, "select usuario.nombre, formulario.opinion,formulario.fecha, formulario.fecha, formulario.calificacion  from formulario inner join usuario where formulario.opinion ='$_POST[search]' group by formulario.id desc limit 10");
$count = 0;

while($a= mysqli_fetch_array($register)){

  echo "
  <div class='carta'>
         <h4>{$a['nombre']}</h4>
         <h6 >{$a['opinion']}</h6>";

            switch ($a['calificacion']) {
              case 1:
                echo "  <span id='rr' class='fa fa-star checked'></span>
                    <span class='fa fa-star '></span>
                    <span class='fa fa-star '></span>
                  <span class='fa fa-star '></span>
                  <span class='fa fa-star '></span>";
                break;

                case 2:
                echo "  <span id='rr' class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star '></span>
                  <span class='fa fa-star '></span>
                  <span class='fa fa-star '></span>";

                break;

                case 3:
                echo "  <span id='rr' class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                  <span class='fa fa-star '></span>
                  <span class='fa fa-star '></span>";

                break;

                case 4:
                echo "  <span id='rr' class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                  <span class='fa fa-star checked'></span>
                  <span class='fa fa-star '></span>";

                break;


                case 5:
                echo "  <span id='rr' class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                  <span class='fa fa-star checked'></span>
                  <span class='fa fa-star checked'></span>";

                break;

              default:
                echo "no ha puesto calificacion";
                break;
            }

echo "    <p>{$a['fecha']}</p>
         </div>

";

  $count++;
}

if($count == 0){
  echo"<p class='alert alert-danger'>No existe este registro buscado</p>";
}



 ?>

</div>
</div>
