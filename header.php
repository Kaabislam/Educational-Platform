<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>


    hr{
      margin-top: 20px;
      margin-bottom: 50px;
      color: #c9c7af;
    }
    #image1{
      height: 90px;
      width: 150px;
      margin-right: 100px;
    }
    .headerLinks{
      float: right;
      color: black;
      text-decoration: none;
      font-size: 30px;
      font-style: italic;
      font-weight: 300;
      margin-bottom: 5px;
      margin: 25px;
      /* border: 1px solid #3e405c; */
    }
    .headerLinks{
      color: white;
    }
    .headerLinks:hover{
      color: red;
    }
    a:hover{
      text-decoration: none;
      border-bottom: 3px solid blue;
      transition: all 500ms linear;
      transition-delay: 0.3s;
    }


  </style>
  <body>
    <img id = "image1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw8_TWxeHBvh7xlY5jv4EG9KcIArgKIKKgcA&usqp=CAU" alt="">
    <!-- <div class="headerLinks"> -->

    <!-- <a class = "headerLinks" id = "askid" href="http://localhost/ask.php">ASK</a> -->
    <!-- <a id = "videoId" href="http://localhost/videos.php">video</a> -->
    <!-- <a class = "headerLinks" id = "contributeid" href="http://localhost/contribute.php">contribute</a> -->
    <a class = "headerLinks" id = "logOutId" href="http://localhost/EducationalPlatform/logout.php">Log Out</a>
    <a class = "headerLinks" id = "profileid" href="http://localhost/EducationalPlatform/YourProfile.php">Your Profile</a>
    <a class = "headerLinks" id = "aboutId" href="http://localhost/EducationalPlatform/about.php">About</a>
    <a class = "headerLinks" id = "blogId" href="http://localhost/EducationalPlatform/blog.php">blog!</a>
    <a class = "headerLinks" id = "courseid" href="http://localhost/EducationalPlatform/courses.php">Courses</a>
    <a class = "headerLinks" id = "homeid" href="http://localhost/EducationalPlatform/home.php">Home</a>

    <!-- </div> -->
    <hr>
    <!-- <div id="div1">
    <p id="p1">This is a paragraph.</p>
    <p id="p2">This is another paragraph.</p>
    </div> -->
  </body>
</html>
