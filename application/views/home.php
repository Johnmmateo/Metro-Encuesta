


<div class="flexslider">
  <ul class="slides">
    <li>
      <img  height="450" src="https://storage.googleapis.com/mmc-elcaribe-bucket/uploads/2018/09/5b828d21-metro-2.jpg" alt="">
      <section class="flex-caption">
      </section>
    </li>
    <li>
      <img height="450" src="http://www.opret.gob.do/images/FOTO1TREN.jpg" alt="">

      <section class="flex-caption">
      </section>
    </li>
    <li>
      <img height="450" src="https://i0.wp.com/elsoldelaflorida.com/wp-content/uploads/2017/12/NUEVO-VAGON-DEL-TREN.jpg?fit=2048%2C1152&ssl=1" alt="">

      <section class="flex-caption">
      </section>
    </li>
  </ul>
</div>



        <div style="border:5px solid lightgray ;border-radius:5px ;margin-bottom:6.5%;margin-right:4.5%;;  margin-top: 12%; width:45%; float:right;height:360px; "  id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img  style="width:20%;height:350px" class="d-block w-100" src="http://www.urbanrail.net/am/sdom/pix/metro-santo-domingo3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img style="width:20%;height:350px" class="d-block w-100" src="https://i1.wp.com/www.eldinero.com.do/wp-content/uploads/metro-de-santo-domingo-deficit.jpg?fit=900%2C574&ssl=1" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img style="width:20%;height:350px" class="d-block w-100" src="http://www.urbanrail.net/am/sdom/santo-domingo-map.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


<div  class="contenedor">
  <h1>Metro</h1>
  <h2>Santo Domingo</h2>
  <hr>
  <p>El Metro de Santo Domingo (en español : Metro de Santo Domingo ) es un sistema de tránsito rápido en el Gran Santo Domingo . Al servicio de la capital de la República Dominicana , es el sistema de metro más extenso y segundo más antiguo de la región insular del Caribe y Centroamérica por la longitud y el número de estaciones.</p>

  <p>El Metro de Santo Domingo es parte de un importante "Plan Maestro Nacional" para mejorar el transporte en el Gran Santo Domingo, así como en el resto de la nación. La primera línea fue planeada para aliviar la congestión del tráfico en las avenidas Máximo Gómez y Hermanas Mirabal , que conectan Santo Domingo con la vecina Santo Domingo Norte.</p>

  <p>La segunda línea, que se inauguró en abril de 2013, está destinada a aliviar la congestión a lo largo del Corredor Duarte-Kennedy-Centenario en la ciudad de oeste a este. La longitud actual del Metro, con las secciones de las dos líneas abiertas a partir de agosto de 2013, es de 27.35 kilómetros (16.99 millas).</p>
</div>










<div style="margin-top:7%; text-align:center" class="cont">




  <table   class="table table-bordered table-striped text-center">

    <thead class="text-white" style="background: #127ba3; opacity:0.9">
      <tr>
        <th colspan="3">Tabla de encuesta</th>
      </tr>
      <tr>
        <th  width='350'>Usuaro</th>
        <th>Opinion</th>
        <th>Fecha</th>

      </tr>
    </thead>

    <tbody>

    <?php

  $con=mysqli_connect('localhost','id8624172_root','mysql','id8624172_metroencuesta');
    $register = mysqli_query($con, "select formulario.id,usuario.nombre, formulario.opinion,formulario.fecha from formulario inner join usuario  group by formulario.id desc limit 10");


    $CI =& get_instance();




    foreach ($register as $fila) {

  echo"
  <tr>
  <td>{$fila['nombre']}</td>
  <td>{$fila['opinion']}</td>
  <td>{$fila['fecha']}</td>

  </tr>
      ";

    }

     ?>

    </tbody>
  </table>



<script>
      $(document).ready(mostrarResultados(2015));
          function mostrarResultados(year){
              $('.resultados').html('<canvas id="grafico"></canvas>');
              $.ajax({
                  type: 'POST',
                  url: 'php/procesar.php',
                  data: 'year='+year,
                  dataType: 'JSON',
                  success:function(response){
                      var Datos = {
                              labels : ['Medicina', 'Enfermería', 'Odontología', 'Bioanálisis', 'Farmacia', 'Derecho', 'Ing. Industrial', 'Ing. Software', 'Ing Civil', 'Ing. Electromecánica', 'Psicología Educativa', 'Psicología Industrial', 'Lic. en Educacion', 'Arquitectura', 'Contabilidad', 'Mercadeo'],
                              datasets : [
                                  {
                                      fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                      strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                      highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                      highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                      data : response
                                  }
                              ]
                          }
                      var contexto = document.getElementById('grafico').getContext('2d');
                      window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                      Barra.clear();
                  }
              });
              return false;
          }
</script>

</div>
