<?php
  session_start(); // saioa ireki
  $_SESSION["Izena"] = $izena;
  $_SESSION["Pasahitza"] = $pasahitza;
  // konexioa irekitzeko beharrezko datuak (datu basea, erabiltzaile, pasahitz eta datu basearen  izena
  $hostname = "db";
  $username = "admin";
  $password = "test";
  $db = "database";
  header('x-Frame-Options: SAMEORIGIN');
  header('X-Content-Type-Options: nosniff');
  header("Content-Security-Policy: default-src 'self'");
  header_remove('X-Powered-By');
  
  
  // izena eta pasahitza lortu;
  //$izena=$_POST['Izena'];
  //$pasahitza=$_POST['Pasahitza'];
  
  //$pasahitza=hash('sha512', $pasahitza); // pasahitza zifratu

  // konexioa ireki
  
  $conn = mysqli_connect($hostname,$username,$password,$db);
  $izena = mysqli_real_escape_string($conn,$_POST['Izena']);
  $pasahitza = mysqli_real_escape_string($conn,$_POST['Pasahitza']);
  
  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }
  else{
    // 'erabiltzailea' konprobatu
    $sql = "SELECT * FROM `erabiltzaileak` WHERE  `Izena`='$izena' AND `Pasahitza`='$pasahitza'";
    $query = mysqli_query($conn,$sql);
  // erabiltzairea baldin badago, nr ez da 0 izango
    $nr = mysqli_num_rows($query);
  }
  if($nr>0){
    echo "<script> alert('Ongi etorri $izena'); window.location='datuAldatu.html' </script>";
  } else {
    echo "<script> window.location.href='index.html' </script>";
  }
  mysqli_close($conn);

  
?>
