<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel = "stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="frm">
    <form action="process.php" method="POST">
      <p>
        <label>Roll Number:</label>
        <input type="text" id = "roll" name = "roll" />
      </p>

      <p>
        <label>Password:</label>
        <input type="password" id = "pass" name = "pass" />
      </p>

      <p>
        <input type="Submit" id = "btn" value="Login" />
      </p>

    </form>
  </div>

</body>
</html>
