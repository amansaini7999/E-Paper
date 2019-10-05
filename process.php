<?php
session_start();
$roll = $_POST['roll'];
$password = $_POST['pass'];

$db = mysqli_connect("localhost", "root","", "E-Paper");

$roll = stripcslashes($roll);
$password = stripcslashes($password);
$roll = mysqli_real_escape_string($db,$roll);
$password = mysqli_real_escape_string($db,$password);

$result = mysqli_query($db, "select * from users where `Roll Number` = '$roll' and  `Password` = '$password' ")
          or die("Failed to query database".mysql_query());

$row = mysqli_fetch_assoc($result);
$name = $row['Name'];

if($row['Roll Number'] == $roll && $row['Password'] == $password){
  $_SESSION['login_roll'] = $roll;
  $_SESSION['login_name'] = $name;
  header('Location: QA.php');
  }else{
  echo "Failed to login!";
}
?>
