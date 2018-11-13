<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
#container {
    height: 400px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Búsquedas en la biblioteca'
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: Highcharts.getOptions()
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Búsquedas',
            data: [<?php
                $contador = 0;
                include("conexion/abrir_conexion.php");
                $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");
                while($consulta = mysqli_fetch_array($resultados)and $contador < 20){
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
<script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
    </body>
</html>
