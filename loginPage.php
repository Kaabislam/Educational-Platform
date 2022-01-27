<?php
    session_start();
    include("header.php");


    //
    // $x = @Request.Cookies["user"].Values["Created"].ToString();
    // echo $x;

    $_SESSION["DB_SERVER"] = "localhost";
    $_SESSION["DB_USERNAME"] = "root";
    $_SESSION["DB_PASSWORD"] = "";
    $_SESSION["DB_NAME"] = "db";
    $link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
    if($link == true){
       // //
       // echo "ok it's working<br>";
       // echo "CONNECTED!!!";
    }
    else {
      echo "!";
    }
    $signInButton = $_POST["SignInButton"];
    $flag = 1;
    if(isset($signInButton)){
      $_user = $_POST["logInUserName"];
      $_password = $_POST["logInPassword"];
      $email;
      //echo "user name is : ".$_user;
      if($_user == ""){
        $flag = 0;
        echo '<script>alert("please enter your username")</script>';

      }
      if($_password == ""){
        $flag = 0;
        echo '<script>alert("please enter your password")</script>';

      }
      $sql = "SELECT name FROM users where name = '$_user'";
      $res = mysqli_query($link,$sql);
      $rc = mysqli_num_rows($res);                             //check if user is exist
      if($rc == 0){
        $flag = 0;
        echo '<script>alert("User Not Exist")</script>';
      }
      else {

        $sq = "SELECT * FROM users where name = '$_user'";
        $sqq = mysqli_query($link,$sq);
        while($re = mysqli_fetch_array($sqq)){    // verify password
          $pass = $re['password'];
          $email = $re['email'];
          echo $pass;
          if($pass != $_password){
            $flag = 0;
            echo '<script>alert("Invalid Password")</script>';
          }

      }
    }
      if($flag){
        $_SESSION["userName"] = $_user;
        $_SESSION["email"] = $email;

        header("Location:home.php");
          // echo "Cookie '" . $cookie_name . "' is set!<br>";
          // echo "Value is: " . $_COOKIE[$cookie_name];

      }

      //header("Location:home.php");
    }
    $signUpButton = $_POST["SignUpButton"];
    if(isset($signUpButton)){
      header("Location:signUpPage.php");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <script src="logInScript.js">
    </script> -->
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
  body{
    background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');

    background-position:left;
    /* background-color: #3e595c; */
    /* background-image: url("image.jpg"); */
  }
  #logOutId{
    display: none;
  }
  #profileid,#blogId,#courseid,#homeid{
    display: none;

  }
  .div1{
    margin-left: 440px;
    width: 400px;
    height: 50px;
    border: 10px solid #3e405c;
    border-radius: 20px;
  }
  .div2{
      background-image: url('https://media.istockphoto.com/photos/old-grungy-wall-texture-detail-picture-id1171164294?b=1&k=20&m=1171164294&s=170667a&w=0&h=8NheJ9NU8DIKluAGfD-L2NXrAsm7Lskp4z9DjwomAbk=');
      margin-left: 450px;
      /* margin-top: 100px; */
      padding-top: 20px;
      padding-left: 40px;
      padding-right: 40px;
      width: 250px;
      height: 350px;
      /* border: 5px solid #3e405c; */
      border-radius: 20px;
      background-color: #3e4d5c;
      font-size: 20PX;
  }
  h4{
    color: blockquote;
    padding-left: 30px;
  }
  input{
    margin: auto;
    width: 245px;
    border-radius: 5px;
    border: 1px solid black;
    padding-left: 10px;
    margin-bottom:20px;
    height: 30px;

  }
  button{
    background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
    margin: auto;
    width: 260px;
    border-radius: 5px;
    border: 1px solid black;
    padding-left: 10px;
    margin-bottom:20px;
    height: 30px;
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
    <!-- <div class="div1">
      <h4>THIS IS LOGIN PAGE!</h4>
    </div> -->
    <div class="div2">
    <form class="logInForm1" method="post">
     <input type="text" name="logInUserName" placeholder="Username"><br>
     <input type="password" name="logInPassword" placeholder="Password"><br>
    <button type="submit" name="SignInButton">Sign In</button><br>
    <button type="submit" name="SignUpButton">Sign Up</button>
    </form>
   </div>
  </body>
</html>

<?php

?>
