<!DOCTYPE html>
<html>
  <head>
    <link rel='stylesheet' type='text/css' media='screen' href='itzuli.css'>
  </head>
  <body>
    <div class="sesion">
      <div class="buttons">
        <input type="submit" onclick="window.location.href='index.html'" value="Itzuli">
      </div>
      <!--<script>
        function itzuli(){
        window.location.href="index.html"
      }
      </script>-->
    </div>
  </body>
</html>
<?php
  $hostname = "db";
  $username = "admin";
  $password = "test";
  $db = "database";


  //$izena=$_POST['Izena'];
  //$abizenak=$_POST['Abizenak'];
  //$NAN=$_POST['NAN'];
  //$telefonoa=$_POST['Telefonoa'];
  //$jaio=$_POST['Jaiotze_data'];
  //$email=$_POST['Email'];
  //$pasahitza=$_POST['Pasahitza'];
  //$pasahitza=hash('sha512', $pasahitza); // pasahitza zifratu

  // konexioa ireki
  $conn = mysqli_connect($hostname,$username,$password,$db);
  $izena = mysqli_real_escape_string($conn,$_POST['Izena']);
  $abizenak = mysqli_real_escape_string($conn,$_POST['Abizenak']);
  $NAN = mysqli_real_escape_string($conn,$_POST['NAN']);
  $telefonoa = mysqli_real_escape_string($conn,$_POST['Telefonoa']);
  $jaio = mysqli_real_escape_string($conn,$_POST['Jaiotze_data']);
  $email = mysqli_real_escape_string($conn,$_POST['Email']);
  $pasahitza = mysqli_real_escape_string($conn,$_POST['Pasahitza']);
  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }
  else{
   // 'erabiltzaile' datu basean gehitu
   $query = $conn->prepare("INSERT INTO `erabiltzaileak`(`Izena`, `Abizenak`, `NAN`, `Telefonoa`, `Jaiotze_data`, `Email`, `Pasahitza`) 
    VALUES ('$izena','$abizenak','$NAN','$telefonoa','$jaio','$email','$pasahitza')");
   $query->execute();
  }
  $resultado = mysqli_query($conn,$query);
  if($resultado){
    echo "<script> alert('Erregistroa sortu da, $izena!'); window.location.href='index.html' </script>";
  } else {
    echo "<script>window.location.href='erregistroorria.html'</script>";
  }
  
  mysqli_close($conn);
?>
