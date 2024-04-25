<?php
session_start();
?>


<?php
    include_once 'includes/dbh.inc.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  $conn;
</body>
</html>



<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Index</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="conditionals.php">Conditionals</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="datatypes.php">Datatypes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="functions.php">Functions</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php">Index</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="loops.php">Loops</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="operators.php">Operators</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="superglobals.php">Superglobals</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel ="stylesheet" href ="style.css">
</head>
<body>
  <header>
<nav>
<a href ='#'>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">About me</a></li>
    <li><a href="#">Contact</a></li>
</ul>
</nav>
<div class="header-login">
  <?php
  if (isset($_SESSION['userId'])){
    echo '<form action="includes/logout.inc.php"method="post">
    <button type ="submit" name="logout-submit">Logout</button>
    </form>';
    }
    else{
      echo '<p class ="login-status"> You are logged out!</p>';
    }
    ?>
  <form action ="includes/login.inc.php" method ="post">
    <input type="text" name="mailuid" placeholder="E-mail/Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type ="submit" name= "login-submit">Login</button>

</form>

<a href="signup.php" class= "header-signup">Signup</a>
<form action ="includes/logout.inc.php" method="post">
<button type ="submit" name = "logout-submit"> Logout</button>
</form>

</div>


</header>
  <?php

$_SESSION['username'] = "LibbySim3236 ";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
  echo "You are not logged in!";
} else{
  echo "You are logged in!";
}


?>
</body>
</html>