<?php

?>


<!doctype html>
<title>Example</title>
<style>
#grid {
  float: left;
  height: 50px;
  width: 50px;
  display: grid;
  grid-template-rows: repeat(3, 1fr);
  grid-template-columns: repeat(1, 1fr);
  grid-gap: 10px;
  margin: 1px;
}
#grid > img {
  height: 50px;
  width: 50px;
  border-radius: 5px;
  background-color: white;
  color: white;
  font-size: 5px;
  padding: 10px;
  cursor: pointer;
}
#rightside{
  float: right;
}
.courses{
  float: right;
  /* float: right;
  margin-left: 20px; */

}
.vl {
  float: right;
  border-left: 2px solid green;
  height: 2000px;
  /* //margin-right: 10px; */
}
table{
  margin: 30px;
  width: 200px;
}
thead{
  text-align: left;
  font-size: 30px;
  color: white;
}
td{
  font-size: 20px;
  padding-left: 20px;

}
.sideBarheading{
  text-decoration: none;
  color: white;

}
.sideBarheading:hover{
  color: red;
}
.coursesideBar{
  color: white;
  text-decoration: none;
}
.coursesideBar:hover{
  color: #42f5bf
}

</style>
<body>
<div id="grid">
  <img class = "iconClass" onclick="window.location = 'http://google.com'" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp-hMUsC4UpjYEABHBp-yv0xjeLFlmZAW9ig&usqp=CAU" alt="">
  <img class = "iconClass" onclick="window.location = 'http://facebook.com'" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNMIOBhCbudV3rygP1hfmMT8pTJswrj6E65Q&usqp=CAU" alt="">
  <img class = "iconClass" onclick="window.location = 'http://instagram.com'" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcnRvlf7RLEUGIgKR_sr3y7H-CVoVB21I3MA&usqp=CAU" alt="">

</div>

<div class="courses">

  <table>
    <thead>
      <tr>
        <th><a class = "sideBarheading" id = "courseHeading" href="http://localhost/EducationalPlatform/courses.php">Courses</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a class = "coursesideBar" href="http://localhost/EducationalPlatform/courses/physics.php">• physics</a></td>
      </tr>
      <tr>
        <td><a class="coursesideBar" href="http://localhost/EducationalPlatform/courses/chemistry.php">• chemistry</a></td>
      </tr>
      <tr>
        <td><a class="coursesideBar" href="http://localhost/EducationalPlatform/scourses/math.php">• math</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="vl"></div>
</body>
