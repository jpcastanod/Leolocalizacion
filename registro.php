<html>
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

    <form method="POST" action="registro.php" >
    <div class="form-group">
      <label for="doc">Id</label>
      <input type="text" name="doc" class="form-control" id="doc">
    </div>

    <div class="form-group">
      <label for="doc">Nombre</label>
      <input type="text" name="doc" class="form-control" id="doc">
    </div>

    <div class="form-group">
        <label for="nombre">Autor </label>
        <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
        <label for="dir">Editorial </label>
        <input type="text" name="dir" class="form-control" id="dir">
    </div>

    <div class="form-group">
        <label for="tel">Año </label>
        <input type="text" name="tel" class="form-control" id="tel">
    </div>
    
    <center>
      <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">

    </center>

  </form>

  <?php
    include("abrir_conexion.php");
      
      $doc    ="";
      $nombre ="";
      $dir    ="";
      $tel    ="";

      if(isset($_POST['btn_registrar']))
      {      
        echo "Presiono el boton Registrar";
      }

      if(isset($_POST['btn_consultar']))
      {
         $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1" );
           while($consulta = mysqli_fetch_array($resultados))
         {
          echo $consulta['nombre']. "<br>";
          echo $consulta['autor']. "<br>";
          echo $consulta['editorial']. "<br>";
          echo $consulta['anio']. "<br>";
        }

      }

      if(isset($_POST['btn_actualizar']))
      {
        echo "Presiono el boton actualizar";
      }

      if(isset($_POST['btn_eliminar']))
      {
        echo "Presiono el boton eliminar";
      }

    include("cerrar_conexion.php");
  ?>

  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>
