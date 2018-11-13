<?php 
    require_once("conexion/abrir_conexion.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Búsquedas en la biblioteca'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Ha sido buscado',
            data: [<?php
                $contador = 0;
                include("conexion/abrir_conexion.php");
                $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");
                while($consulta = mysqli_fetch_array($resultados) and $contador < 20){
                    $contador = $contador +1;
                    $buscado = (int)$consulta['buscado']
                    ?>
                    ['<?php echo $consulta ['nombre'];?>', <?php echo $consulta ['buscado']?> ] , 
                    <?php
                } 
                ?>        
                
                    
            ]
        }]
    });
});


        </script>
    </head>
    <body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    </body>
</html>
