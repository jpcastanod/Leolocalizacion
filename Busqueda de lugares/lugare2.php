
<!DOCTYPE html>
<html>
<head>
  <title> Leolocalizacion </title>
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body>
  <center><h1>Leolocalización</h1></center>
  <form method="POST" action="lugare2.php">
    <center>
      <br></br> <br></br><center></center> <br></br> 
      <div class="form-group">
    <select name="lugar" class="form-control"> 
      <option> --Seleccione una opción-- </option>
      <option value= "1"> 1.Devolucion material bibliografico </option>
      <option value= "2"> 2.Coleccion de reserva </option>
      <option value= "3"> 3.Colección de Literatura Infantil y Juvenil </option>
      <option value= "4"> 4.Sala de lectura de prensa </option>
      <option value= "5"> 5.Sala de consulta </option>
      <option value= "6"> 6.Colección General </option>
      <option value= "7"> 7.Prestamo de material bibliografico </option>
      <option value= "8"> 8.Material Acompañante </option>
      <option value= "9"> 9.Colección de referencia </option>
      <option value= "10"> 10.Colección semiactiva</option>
      <option value= "11"> 11.Cubiculos para investigadores </option>
      <option value= "12"> 12.Catálogo SINBAD </option>
      <option value= "13"> 13.Barra consulta </option>
      <option value= "14"> 14.Colección de Literatura  </option>
      <option value= "15"> 15.Partituras y técnica musical </option>
      <option value= "16"> 16.Computadores estudio grupal </option>
      <option value= "17"> 17.Sala de estudio en grupo </option>
      <option value= "18"> 18.Sala de estudio individual </option>
      <option value= "20"> 20.Referencia </option>
      <option value= "21"> 21.Coordinación de Gestión Tecnológica y Proyectos </option>
      <option value= "22"> 22.Programa formación COIN </option>
      <option value= "23"> 23.Ascensores </option>
      <option value= "24"> 24.Escaleras </option>
      <option value= "25"> 25.Baños públicos </option>
      <option value= "26"> 26.Teléfono público </option>
    </select>
  </div>
    <input type="submit" value="localizar" class="btn btn-primary" name="btn_localizar">
  </center>
</form>
</form>
    <?php
     if(isset($_POST['btn_localizar']))
      {      
        $lugar = $_POST['lugar'];

        if($lugar=="1"){
          ?>
          <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-1.png"> '?></td>
        </center>
          <?php
        }
        if($lugar=="2"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-2-3.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="3"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-2-3.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="4"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-4.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="5"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-5.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="6"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-6.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="7"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-7.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="8"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-8.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="9"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-9-10.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="10"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-9-10.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="11"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-11.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="12"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-12.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="13"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-13.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="14"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-14.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="15"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-15.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="16"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-16.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="17"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-17.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="18"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-18.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="20"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-20-21-22.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="21"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-20-21-22.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="22"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-20-21-22.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="23"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-23-24-25-26.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="24"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-23-24-25-26.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="25"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-23-24-25-26.png"> '?></td>
        </center>
          <?php
        }
         if($lugar=="26"){
          ?>
           <center>
          <td><?php echo ' <img class="img-responsive" src="piso2-23-24-25-26.png"> '?></td>
        </center>
          <?php
        }
      }
      ?>
</body>
</html>