<?php
  session_start();

  
  include("header.php");

  $link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
  if($link == true){
     // //
     // echo "ok it's working<br>";
     // echo "CONNECTED!!!";
  }
  $flag = 1;
  $submitBtn = $_POST["submitChangebtn"];
  $currentUsername = $_SESSION["userName"];
  $currentEmailName = $_SESSION["email"];
  if(isset($submitBtn)){
    $username = $_POST["newName"];
    $usermail = $_POST["newemail"];
    // echo $username;
    // echo "<br>";
    // echo $usermail;
    //echo "user name is : ".$_user;
    if($username == ""){
      $flag = 0;
      echo '<script>alert("please enter your username")</script>';

    }
    if($usermail == ""){
      $flag = 0;
      echo '<script>alert("please enter your password")</script>';
    }

    if($flag){

      $sql = "UPDATE users SET name='$username',email='$usermail' where name='$currentUsername'";
      if(mysqli_query($link,$sql)){
        $_SESSION["userName"] = $username;
        $_SESSION["email"] = $usermail ;
        echo '<script>alert("Information Changed successfully")</script>';
        header("Location:YourProfile.php");
        // echo "updated";
      }
      else {
        echo '<script>alert("User name or Email conflicts")</script>';

      }
    }
  }
    $currentUsername = $_SESSION["userName"];
    $profileDeleteBtn = $_POST["profileDeleteButton"];
    if(isset($profileDeleteBtn)){
      $sql = "DELETE FROM users where name='$currentUsername'";
      if(mysqli_query($link,$sql)){
        echo '<script>alert("Account is Deleted")</script>';
        header("Location:loginPage.php");
      }

    }
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
        height: 450px;
        /* border: 5px solid #3e405c; */
        border-radius: 20px;
        background-color: #3e4d5c;
        font-size: 20PX;
      }
      h1{
        background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
        margin: auto;
        margin-top: 20px;
        padding-top: 10px;
        margin-bottom: 15px;
        width: 450px;
        border-radius: 5px;
        border: 1px solid black;
        padding-left: 10px;
        margin-bottom:20px;
        height: 60px;

        color: white;
        font-size: 30px;
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
      input{
        margin: auto;
        margin-left: 100px;
        width: 245px;
        border-radius: 5px;
        border: 1px solid black;
        padding-left: 10px;
        margin-bottom:20px;
        height: 30px;

      }
    </style>
  <body>
    <div class="userinformation">
      <h1 id = "headerId">Profile Information Change</h1>
      <form class="userNewInfo" method="post">
        <input type="text" name="newName" value="" placeholder="New User name"><br>
        <input type="text" name="newemail" value="" placeholder="new email"><br>
        <button type="submit" name="submitChangebtn">Submit</button>
        <button type="submit" name="profileDeleteButton">Delete Profile</button>
      </form>
    </div>


  </body>
</html>
