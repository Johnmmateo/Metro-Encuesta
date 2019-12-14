
    <h1 style="margin-top:150px ; text-align:center" class="display-4">Listado de Miembros</h1>
    <hr>

    <div class="container">
<div class="row">
    <?php

    $CI =& get_instance();

    $query="SELECT * FROM usuario ORDER BY id";
$datos = $CI->db->query($query)->result_array();

foreach($consulta->result_array() as $item){


    echo "
    <div class='col-md-4 card separate rounded-0'>
        <center>

        <h6 class='font-weight-normal'> {$item['nombre']} {$item['apellido']} </h6>
        <p  class='font-weight-light'> Correo: {$item['correo']}<br/>
        Fecha: {$item['fecha']}<br/> Edad: {$item['edad']}</p>

        </center>

    </div>
    ";
    }

    ?>

</div>
</div>
<div class="container">
  <div class="row">
    <p>  <?php echo $paginacion; ?></P>

  </div>
</div>
