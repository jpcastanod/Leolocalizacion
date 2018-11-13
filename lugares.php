<!DOCTYPE html>
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
  <center><h1>Leolocalización</h1></center>
	<form method="POST" action="lugares.php" >
	   <center>
	   	<br></br> <br></br><center></center> <br></br> 
      <input type="submit" style="background:blue" value="Primer piso" class="btn btn-success" name="btn_piso2">
    </center>
</form>
	  <?php
    	 if(isset($_POST['btn_piso2']))
      {      
        header ("Location: lugare2.php");
      }
      ?>
  <div class="col-md-4"></div>
</div>


  
</body>
</html>
