<?php
    session_start();
    include("../header.php");
    $link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
    if($link == true){
    //  echo "database connected<br><br>";
    }
    $selectedCourse= $_POST["course"];
    $videoSubmitButton = $_POST["submitButton"];
    $videoTitle = $_POST["title"];
    if(isset($videoSubmitButton)){
      // echo $selectedCourse

      $filename = $_FILES['videoName']['name'];
      $tempname = $_FILES['videoName']['tmp_name'];
      $x = 1;
      $sql = "INSERT INTO $selectedCourse(videoname,title) VALUES ('$filename','$videoTitle')";
      if(mysqli_query($link,$sql)){
        // echo "insert on database ";
      }
      $folder = "../video/".$filename;
      if(move_uploaded_file($tempname,$folder)){
        // echo "store on video successfull";
      }
    }
    else {
      // echo "NO";
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
.courseType{
  color: white;
  font-size: 28px;
}
#videotitle{
  height: 30px;
  width: 400px;
}
.cc{
  height: 30px;
  width: 400px;
  font-size: 20px;
}
</style>
</head>
<body>
    <form class="videoAddToCourses" method="POST" action = "" enctype="multipart/form-data">
        <input type="radio" id="math" name="course" value="math">
        <label class = "courseType" for="math">math</label><br>
        <input type="radio" id="physics" name="course" value="physics">
        <label class = "courseType" for="physics">physics</label><br>
        <input type="radio" id="chemistry" name="course" value="chemistry">
        <label class = "courseType" for="chemistry">chemistry</label><br>
        <input type="radio" id="compiler" name="course" value="compiler">
        <label class = "courseType" for="compiler">Compiler Design</label>
        <br><br><br>
        <input id = "videotitle" type="text" name="title" value="">
        <br><br>
        <input class = "cc" type="file" name="videoName"/>
        <br><br>
        <input class = "cc" type="submit" name="submitButton" value="submit">
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
