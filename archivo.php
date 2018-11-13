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
<body style = "background-color:powderblue; ">

<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

 
      <center> <img src="logo.png" width="300" /> </center>
 

    <form method="POST" action="archivo.php" >

                            
     <img src="atras.png" width="60" style="position: absolute;top: 4%; position: absolute;left: -20%"></img>
     <img src="ayuda.png" width="60" style="position: absolute;top: 4%; position: absolute;left: 100%"></img>
                 
    <div class="form-group">

    <div class="form-group">
      <label for="doc">Nombre del archivo</label>
      <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    
    <center>
      <input type="submit" value="Consultar" class="btn btn-primary" onclick = "return confirm('¿Seguro que desea registrar los datos en el archivo?')" name="btn_registrar" >
      


    </center>


  </form>




<?php
     if(isset($_POST['btn_registrar']))
      {      
      	$archivo2 = $_POST['nombre'];

	$aux = "";
	$contador = 0;
	$archivo =fopen("$archivo2", "r")
	or die ("Archivo no encontrado");
	while (!feof($archivo)) {
		$linea = fgets($archivo);
		$aux = $aux . $linea;

	}
	$arreglo = explode("--", $aux);
	$long = count ($arreglo);

	while ($contador < $long){
		$nueva = $arreglo [$contador];
		$arreglo_Nuevo = explode("~~", $nueva);
		include("abrir_conexion.php");
        $id = $arreglo_Nuevo[0];
        $nombre = $arreglo_Nuevo[1];
        $autor = $arreglo_Nuevo[2];
        $editorial = $arreglo_Nuevo[3];
        $anio =  $arreglo_Nuevo[4];
        $estanteria = $arreglo_Nuevo[5];
         mysqli_query($conexion, "INSERT INTO $tabla_db1 
         (id,nombre,autor,editorial,anio,estanteria,buscado) 
        values 
         ('$id','$nombre','$autor','$editorial','$anio','$estanteria',0)");

		$contador = $contador +1;
		$nueva = "";
	}
	echo "se han registrado con éxito los ". $long . " archivos";
}
?>






  
</body>
</html>
