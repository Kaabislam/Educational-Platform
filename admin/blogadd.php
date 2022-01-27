<?php
session_start();
include("../header.php");
$link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
if($link == true){
  // echo "database connected<br><br>";
}
else {
  //commit
  // echo "database is failed to connect<br>";
}
$blogSubmitButton = $_POST["blogSubmitButton"];
if(isset($blogSubmitButton)){

  // echo "clicked!";
  // print_r($_FILES['imageName']);
  // $imagename = $_FILES['imageName']['name'];
  // echo $imagename;

  $blogTitleName = $_POST["blogtitleName"];
  $blogtopicName = $_POST["blogTopicsName"];

  if($blogTitleName == ""){
    echo "please enter a title name! <br>";
  }
  if($blogtopicName == ""){
    echo "please enter blog topic!<br>";
  }



  $imagefilename = $_FILES['imageName']['name'];
  $imagetempname = $_FILES['imageName']['tmp_name'];
  $htmlfilename = $_FILES['htmlfileName']['name'];
  $htmltempname = $_FILES['htmlfileName']['tmp_name'];
  // echo $htmltempname;
  // echo "<br>";
  // echo $filename;
  // echo $tempname."<br>";
  $imagefolder = "../blogs/image/".$imagefilename;
  $htmlfilefolder = "../blogs/htmlfiles/".$htmlfilename;
  // echo "<br> - ".$imagefilename."-".$htmlfilename;
  // echo $tempname;
  // echo $filename."<br>";
  // echo $blogTopicName."<br>";
  // echo $blogDescription."<br>";

  $sql = "INSERT INTO blogs (blogtitle,blogtopics,imagename,htmlfilename) VALUES ('$blogTitleName','$blogtopicName','$imagefilename','$htmlfilename')";
  if(mysqli_query($link,$sql)){
    // echo "<br>INSERTED  successfully<br> ";
  }
  // else {
  //   ini_set('display_errors', 1);
  //   ini_set('display_startup_errors', 1);
  //   error_reporting(E_ALL);
  // }
  if(copy($htmltempname,$htmlfilefolder)){
    // echo "<br>html move to html folder<br>";
  }
  if(copy($imagetempname,$imagefolder)){
    // echo "image move to image folder<br>";
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
    .div1{
    margin: auto;
    width: 900px;
    /* height: 50px; */
    /* border: 1px solid #3e405c; */
    margin-bottom: 15px;
    padding: 10px;
    /* box-shadow: 5px 5px #e3d0cf; */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    background-color: #88a8db;
  }
  .div2{
  background-image: url("img/image.jpg");
  background-size: contain;
  line-height: 1.6;
  margin: auto;
  width: 1000px;
  height: 200px;
  /* border: 1px solid #3e405c; */
  margin-bottom: 15px;
  padding: 10px;
  /* box-shadow: 5px 5px #e3d0cf; */
  /* white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;*/
  background-color: #b4c2d9;
}
  .div3{
    margin: auto;
    width: 900px;
    height: 50px;
    margin-top: 50px;
    padding: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    background-color: #027814;
    text-decoration:none;
  }
  .div4{
  margin: auto;
  margin-top: 60px;
  padding-top: 20px;
  padding-left: 40px;
  padding-right: 40px;
  width: 700px;
  height: 420px;
  /* border: 5px solid #3e405c; */
  border-radius: 20px;
  background-color: #3e4d5c;
  }
  a{
    text-decoration: none;
    padding: 10px;
    padding-top: 20px;
    font-size: 30px;
    color: #f7faf8;
  }
  #blogTitleId{
    width: 600px;
    border-radius: 5px;
    height: 30px;
  }
  #blogDescriptionId{
    margin-top: 20px;
    margin-bottom: 20px;

    width: 600px;
    border-radius: 10px;
  }
  #blogSubmitButton{
    margin: auto;
  }
  /* {
    text-decoration: none;
  } */

  </style>


  <body>


    <div id = "div4" class="div4">
      <form class="blogContributeForm" method="post" action = "" enctype="multipart/form-data">
        <input id = "blogTitleId" type="text" name="blogtitleName" placeholder="enter blog title"><br>
        <br>
        <input id = "blogtopicsid" type="text" name="blogTopicsName" placeholder="enter blog topics"><br>
        <br>
        <input type="file" name="imageName" value=""/><br><br>
        <input type="file" name="htmlfileName" value=""><br><br>
        <button id = "blogSubmitButton" type="submit" name="blogSubmitButton" onclick="jsF()">Submit</button>
      </form>
    </div>


  </body>
</html>
<script type="text/javascript">
  function jsF(){
    document.getElementById("").innerHTML = "kaab";
    alert('success');
  }

</script>
