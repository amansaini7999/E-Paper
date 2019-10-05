<?php
session_start();
$_SESSION['login_roll'];
$roll = $_SESSION['login_roll'];
$answer1 = $_POST['A1'];
$answer2 = $_POST['A2'];

$db = mysqli_connect("localhost", "root","", "E-Paper");

mysqli_query($db, "INSERT INTO Store (`Roll Number`, `answer1`, `answer2`) VALUES('$roll', '$answer1', '$answer2')");
echo "Answers Submitted Succesfully";
?>
