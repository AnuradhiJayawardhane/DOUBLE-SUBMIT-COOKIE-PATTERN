<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>DOUBLE SUBMIT COOKIE PATTERN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" rel="stylesheet">
</head>

<body class="obody">
  <h1 class="login">LOGIN HERE</h1>
<div class="container">


  <!--login form-->
  <form action="indextest.php" method="post">
    <div class="row">
      <div class="login_column">
        <input type="text" name="username" id="username" class="inpt" required placeholder="username">
        <input type="password" name="password" id="password" class="inpt" required placeholder="password">
        <input type="submit" value="LOGIN">
      </div>
    </div>
  </form>
</div>
</body>
</html>