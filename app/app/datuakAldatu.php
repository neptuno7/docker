<?php
  session_start();
  $hostname = "db";
  $username = "admin";
  $password = "test";
  $db = "database";
  
  $izena=$_POST['Izena'];
  $abizenak=$_POST['Abizenak'];
  $NAN=$_POST['NAN'];
  $telefonoa=$_POST['Telefonoa'];
  $jaio=$_POST['Jaiotze_data'];
  $email=$_POST['Email'];
  $pasahitza=$_POST['Pasahitza'];

  // konexioa ireki
  $conn = mysqli_connect($hostname,$username,$password,$db);
  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }
  else{
    $sql = "SELECT * FROM `erabiltzaileak` WHERE `erabiltzaileak`.`NAN`='$NAN'";
    $query = mysqli_query($conn,$sql);
    // erabiltzairea baldin badago, nr ez da 0 izango
    $nr = mysqli_num_rows($query);
  }
  if($nr>0){
    $sql = "UPDATE `erabiltzaileak` SET `Izena`='$izena',`Abizenak`='$abizenak',
    `Telefonoa`='$telefonoa',`Jaiotze_data`='$jaio',`Email`='$email',`Pasahitza`='$pasahitza' WHERE `erabiltzaileak`.`NAN`='$NAN'";
    $query = mysqli_query($conn,$sql);
    echo "<script> alert('Erabiltzailea ondo aldatu da!'); window.location='index.html' </script>";
  } else {
    echo "<script> alert('Errorea! Erabiltzailea ez da aurkitu edo daturen bat txarto dago.'); window.location='index.html' </script>";
  }
  mysqli_close($conn);

?>