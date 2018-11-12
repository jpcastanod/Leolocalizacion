<!DOCTYPE html>
<html>
<head>
	<title>Leolocalizacion</title>
	 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	<center><h1>Leolocalización</h1></center>
	<form method="POST" action="opc_usuario.php" >
	   <center>
	   	<br></br> <br></br><center></center> <br></br> 
      <input type="submit" value="Buscar material bibliográfico" class="btn btn-success" name="btn_libros">
      <input type="submit" value="Buscar lugar" class="btn btn-primary" name="btn_lugares">
    </center>
</form>
    <?php
     if(isset($_POST['btn_libros']))
      {      
        header ("Location: usuario.php");
      }
      if(isset($_POST['btn_lugares']))
      {   
        header ("Location: lugares.php");
      }
      ?>
</body>
</html>
