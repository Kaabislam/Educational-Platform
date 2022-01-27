<?php
  session_start();
  include("header.php");
?>


<!doctype html>
<title>Example</title>
<style>
#grid {
  height: 500px;
  width: 700px;
  display: grid;
  grid-template-rows: repeat(3, 1fr);
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}
#grid > div {
  border-radius: 10px;
  background-color: #a3842e;
  color: white;
  font-size: 4vw;
  padding: 10px;
  cursor: pointer;

}
body{
  background-image: url('https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvbGlkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');

}
.courseHeader{
  text-align: center;
  color: white;
  margin-bottom: 100px;
  font-size: 40px;
}

</style>
<h1 class = "courseHeader">Choose Your Course</h1>
<div id="grid">

  <div class = "course" onclick="location.href = 'courses/physics.php'">Physics</div>
  <div onclick="location.href = 'courses/chemistry.php'">Chemistry</div>
  <div onclick="location.href = 'courses/math.php'">Math</div>
  <div onclick="location.href = 'courses/compiler.php'">Compiler</div>


  </div>
</div>
