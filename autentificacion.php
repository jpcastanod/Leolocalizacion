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

    <form method="POST" action="autentificacion.php" >
    <div class="form-group">

    <div class="form-group">
      <label for="doc">Usuario</label>
      <input type="text" name="user" class="form-control" id="user" >
    </div>

    <div class="form-group">
        <label for="nombre">Contraseña </label>
        <input type="password" name="password" class="form-control" id="password" >
    </div>

    
    <center>
      <input type="submit" value="Aceptar" class="btn btn-primary" name="btn_aceptar" >


    </center>

</form>

    <?php
     if(isset($_POST['btn_aceptar']))
      {
      $user = $_POST ['user'];
      $password = $_POST ['password'];
        if($user == 'adm123' and $password == "pcw"){
            header ("Location: administrador.php");
        }
        else{
          echo "Usuario o contraseña incorrecta, intentelo nuevamente";
        }
        
      }
      ?>
</body>
</html>
