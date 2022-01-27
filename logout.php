<?php
session_start();
include("header.php");
unset($_SESSION['userName']);
unset($_SESSION['email']);
header("Location:loginPage.php");


// echo $_SESSION["userName"];
// echo "<br>";
// echo $_SESSION["email"];
// include("side.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <style media="screen">
      body{
        background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');

      }


    </style>
  <body>
    <div class="userinformation">

    </div>

  </body>
</html>
