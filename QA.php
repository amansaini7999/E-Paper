<?php
 session_start();
 $_SESSION['login_roll'];
 $_SESSION['login_name'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Question Answer</title>
  <link rel = "stylesheet" type="text/css" href="style2.css">
</head>
<body>

  <div class="hed">
    <label>Roll Number : </label>
    <?php
    $roll = $_SESSION['login_roll'];
    echo $roll;
    ?>
    <br>
    <label>Name : </label>
    <?php
    $name = $_SESSION['login_name'];
    echo $name;
    ?>
  </div>

  <div id="QA">
    <form action="Store.php" method="POST">

      <div class="Q">
        <label id = "Q">Q1. What is Dead Lock?</label><br>
      </div>

      <div class="A">
        <textarea id="A" name="A1" placeholder="Enter your Answer"></textarea>
      </div>

      <div class="Q">
        <label id = "Q">Q2. What is a Thread?</label><br>
      </div>

      <div class="A">
        <textarea id="A" name="A2" placeholder="Enter your Answer"></textarea>
      </div>

        <input type="submit" id= "btn" value="Submit" />

    </form>
  </div>

</body>
</html>
