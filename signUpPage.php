<?php
session_start();
include("header.php");
// echo "color : " .$_SESSION["favcolor"]. "<br>";

$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "db";

$suuserName = $_POST["suuserName"];
$suemail = $_POST["suemail"];
$supassword = $_POST["supassword"];
$subutton = $_POST["subutton"];
$flag = 1;
if(isset($subutton)){
  if($suuserName == ""){
    $flag = 0;
    echo '<script>alert("Enter Username")</script>';
  }
  if($suemail == ""){
    $flag = 0;
    echo '<script>alert("Mail is Required")</script>';
  }
  if($supassword == ""){
    $flag = 0;
    echo '<script>alert("Password Needed")</script>';
  }


  $conn = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);

  $nameCnt = "SELECT name FROM users WHERE name = '$suuserName'";
  if ($result=mysqli_query($conn,$nameCnt))
  {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    if($rowcount!=0){
      echo '<script>alert("Username Already Exist")</script>';


    }
    mysqli_free_result($result);
  }
  $emailCnt = "SELECT email FROM users WHERE email = '$suemail'";
  if ($result=mysqli_query($conn,$emailCnt))
  {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    if($rowcount!=0){
      echo '<script>alert("Email Already Exist")</script>';

    }
    mysqli_free_result($result);
  }

  if(!$conn){
    die("connection failed");
  }
  if($flag){
    $sql = "INSERT INTO users (name, email, password) VALUES ('$suuserName','$suemail','$supassword')";
    mysqli_query($conn, $sql);
    echo '<script>alert("Your Account has been created")</script>';

    header("Location:loginPage.php");
  }

  // if (mysqli_query($conn, $sql)) {
  // // echo "New record created successfully";
  //   header("Location:home.php");
  // }
  // else {
  //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  // }


}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    body{
      background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');

    }
    #logOutId{
      display: none;
    }
    #profileid{
      display: none;
    }
    .signupdiv{

          background-image: url('https://media.istockphoto.com/photos/old-grungy-wall-texture-detail-picture-id1171164294?b=1&k=20&m=1171164294&s=170667a&w=0&h=8NheJ9NU8DIKluAGfD-L2NXrAsm7Lskp4z9DjwomAbk=');
          margin-left: 450px;
          margin-top: 100px;
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
    h1{
      color: green;
      font-size: 50px;
      margin-left: 450px;
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

    <div class="signupdiv">
      <form class="signUpFormClass"method="post">                                     <!-- // su - sign up -->
        <input class = "userinfo" type="text" name="suuserName" placeholder="please put your username"><br>
        <input class = "userinfo" type="email" name="suemail" placeholder="enter your email"><br>
        <input class = "userinfo" type="password" name="supassword" placeholder="enter password"><br>
        <button class = "userinfo" type="submit" name="subutton">Submit</button><br>
      </form>
  </div>
  </body>
</html>
