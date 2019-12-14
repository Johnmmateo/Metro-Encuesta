

<div class="container">


    <h3 class="h-g">Grafico de Encuestas</h3>
    <a class="btn btn-primary float-left" href="">Refrescar<a>
    <h4 style="margin-top:8%" class="tipo">Profesiones</h4>
    <h4></h4>
    <div  class="resultadosGrafica"><canvas id="grafico"></canvas></div>


</div>
    </body>
    <script>
            $(document).ready(mostrarResultados(2015));
                function mostrarResultados(year){
                    $('.resultados').html('<canvas id="grafico"></canvas>');
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('php/procesar.php') ?>',
                        data: 'year='+year,
                        dataType: 'JSON',
                        success:function(response){
                            var Datos = {
                                    labels : ['Medicina', 'Enfermería', 'Odontología', 'Bioanálisis', 'Farmacia', 'Derecho', 'Ing. Industrial', 'Ing. Civil', 'Ing ELectromecanica',  'Psicología Educativa', 'Psicología Industrial','Psicologia Clinica', 'Lic. en Educacion', 'Arquitectura', 'Contabilidad', 'Mercadeo'],
                                    datasets : [
                                        {
                                            fillColor : '#98D3FC', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(31,97,141,0.7)', //COLOR DEL BORDE DE LAS BARRAS
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
