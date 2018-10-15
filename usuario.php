<html>
<?php 

?>
<head>
  <title> </title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

    <center><h1>LEOLOCALIZACION</h1></center>

    <form method="POST" action="usuario.php" >
    <div class="form-group">

    <div class="form-group">
      <label for="doc">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
        <label for="nombre">Autor </label>
        <input type="text" name="autor" class="form-control" id="autor" >
    </div>

    
    <center>
      <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar" >


    </center>


  </form>
  <div class = "col-xs-12">
      <table class = "table table-striped">
      <thead>
        <tr>
          <th witdh = 100>Nombre </th> 
          <th witdh = 100>Autor</th>
          <th witdh = 100>Editorial </th>
          <th witdh = 100>Año de publicación </th>
          <th witdh = 100>Estantería </th>
        </tr>
      </thead>
      <tbody>

  <?php
    include("abrir_conexion.php");



      if(isset($_POST['btn_consultar']))
      {
        
        $nombre = $_POST ['nombre'];
        $autor = $_POST ['autor'];

         $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE (nombre LIKE'%$nombre%' or autor = '$autor') and '$nombre' IS NOT NULL " );
           while($consulta = mysqli_fetch_array($resultados))
         {
          ?>
          <tr>
            <td><?php echo $consulta['nombre']. "<br>"; ?></td>
            <?php $estanteria = $consulta['estanteria'];
            ?>

            <td><?php echo $consulta['autor']. "<br>"; ?></td>
            <td><?php echo $consulta['editorial']. "<br>"; ?> </td>
            <td><?php echo $consulta['anio']. "<br>"; ?> </td>
            <td><?php echo $consulta['estanteria']. "<br>"; ?></td>
            <?php 
            if ($estanteria >= 1 and $estanteria <=3){
              ?>
              <td><?php echo "<a href='http://localhost/integrador/1a3.png'>Localizar</a>". "<br>"; ?></td>
              <?php
            }
            ?>
            <?php 
            if ($estanteria >= 4 and $estanteria <=5){
              ?>
              <td><?php echo "<a href='http://localhost/integrador/3a5.png'>Localizar</a>". "<br>"; ?></td>
              <?php
            }
            ?>
            <?php 
            if ($estanteria >= 6 and $estanteria <=9){
              ?>
              <td><?php echo "<a href='http://localhost/integrador/6a9.png'>Localizar</a>". "<br>"; ?></td>
              <?php
            }
            ?>
            <?php 
            if ($estanteria >= 10 and $estanteria <=12){
              ?>
              <td><?php echo "<a href='http://localhost/integrador/10a12.png'>Localizar</a>". "<br>"; ?></td>
              <?php
            }
            ?>
            <?php 
            if ($estanteria >= 13 and $estanteria <=15){
              ?>
              <td><?php echo "<a href='http://localhost/integrador/13a15.png'>Localizar</a>". "<br>"; ?></td>
              <?php
            }
            ?>
            <?php 
            if ($estanteria >= 16 and $estanteria <=18){
              ?>
              <td><?php echo "<a href='http://localhost/integrador/16a18.png'>Localizar</a>". "<br>"; ?></td>
              <?php
            }
            ?>
            <?php 
            if ($estanteria >= 19 and $estanteria <=21){
              ?>
              <td><?php echo "<a href='http://localhost/integrador/6a9.png'>Localizar</a>". "<br>"; ?></td>
              <?php
            }
            ?>

            



            </tr>

          <?php

          

        }

      }

      
      
 



    
  ?>
</tbody>
</table>
  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>
