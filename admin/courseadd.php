<?php
    session_start();
    include("../header.php");
    $link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
    if($link == true){
    //  echo "database connected<br><br>";
    }
    $courseName = $_POST["courseName"];
    $submitButton = $_POST["submitButton"];
    if(isset($submitButton)){
      if($courseName == ""){
          die("need a course name");
      }
      $sql = "create table $courseName(id integer(10) auto_increment,videoname varchar(200),title varchar(300),primary key(id))";
      if(mysqli_query($link,$sql)){
        echo "insert on database ";
      }
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');

}
#myDIV {
  width: 20%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
  display: none;
}
#selectedDiv{
  width: 10%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin: 20px;
  display: none;
}
p{
  padding: 30px;
  font-size: 20px;
}
</style>
</head>
<body>
    <form class="videoAddToCourses" method="POST" action = "" enctype="multipart/form-data">
        <input type="text" name="courseName" value="">
        <br><br>
        <input type="submit" name="submitButton" value="submit">
    </form>

</body>
</html>
<script>
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
  function mf(clicked_id){
    console.log(clicked_id);
    var x = document.getElementById("myDIV");
    var y = document.getElementById("selectedDiv");
    y.innerHTML = clicked_id;
    //y.innerHTML = document.getElementById("z").innerHTML;
    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.display = "block";

    } else {
        x.style.display = "block";
    }
  }
</script>
