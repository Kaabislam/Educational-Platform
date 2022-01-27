<?php
session_start();
include("header.php");
// echo $_SESSION["userName"];
// echo "<br>";
// echo $_SESSION["email"];
// include("side.php");
//daskld
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
      .userinformation{
        background-image: url('https://media.istockphoto.com/photos/old-grungy-wall-texture-detail-picture-id1171164294?b=1&k=20&m=1171164294&s=170667a&w=0&h=8NheJ9NU8DIKluAGfD-L2NXrAsm7Lskp4z9DjwomAbk=');
        margin-left: 450px;
        /* margin-top: 100px; */
        padding-top: 20px;
        padding-left: 40px;
        padding-right: 40px;
        width: 500px;
        height: 350px;
        /* border: 5px solid #3e405c; */
        border-radius: 20px;
        background-color: #3e4d5c;
        font-size: 20PX;
      }
      h1{
        background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
        margin: auto;
        margin-top: 20px;
        margin-bottom: 15px;
        width: 450px;
        border-radius: 5px;
        border: 1px solid black;
        padding-left: 10px;
        margin-bottom:20px;
        height: 60px;

        color: white;
        font-size: 40px;
        font-weight: bold;
        text-align: center;
      }
      h2{
        background-color: white;
        margin: auto;
        width: 400px;
        border-radius: 5px;
        border: 1px solid black;
        padding-left: 10px;
        margin-bottom:20px;
        height: 50px;
        padding: auto;
      }
      button{
        background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
        margin: auto;

        margin-left: 52px;
        width: 400px;
        border-radius: 5px;
        border: 1px solid black;
        padding-left: 10px;
        margin-bottom:20px;
        height: 50px;
        cursor: pointer;
        color: white;
        font-size: 20px;
        font-weight: bold;
      }
      button:hover{
        background-image: url('https://media.istockphoto.com/photos/old-grungy-wall-texture-detail-picture-id1171164294?b=1&k=20&m=1171164294&s=170667a&w=0&h=8NheJ9NU8DIKluAGfD-L2NXrAsm7Lskp4z9DjwomAbk=');
        color: black;
      }
    </style>
  <body>
    <div class="userinformation">
      <h1 id = "headerId">profile information</h1>
      <h2 id = "username"><?php echo $_SESSION["userName"] ?></h2>
      <h2 id = "email"><?php echo $_SESSION["email"] ?></h2>
      <button type="button" name="ChangeInfobtn" onclick="window.location.href = 'http://localhost/EducationalPlatform/changeInfo.php'">Change Information</button>
    </div>

  </body>
</html>
