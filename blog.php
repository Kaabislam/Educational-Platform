<?php
 session_start();
 include("header.php");

 $link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
 if($link == true){
   //echo "CONNECTED!!!";
 }
 // print_r($_SESSION);
 $x = "blogs/image/";
 $blogid = array();
 $blogtitle = array();
 $blogtopic = array();
 $blogImage = array();
 $htmlfile = array();
 $sql = "SELECT id,blogTitle,blogtopics,imagename,htmlfilename from blogs";
 $retval = mysqli_query($link,$sql);

 while ($xx = mysqli_fetch_array($retval)) {
   $blogid = array_pad($blogid,sizeof($blogid)+1,$xx[0]);
   $blogtitle = array_pad($blogtitle,sizeof($blogtitle)+1,$xx[1]);
   $blogtopic = array_pad($blogtopic,sizeof($blogtopic)+1,$xx[2]);
   $blogImage = array_pad($blogImage,sizeof($blogImage)+1,$x.$xx[3]);
   $htmlfile = array_pad($htmlfile,sizeof($htmlfile)+1,$xx[4]);

   // echo " : ".$blogDetails[sizeof($blogDetails)-1]."<br>";
   // echo " blog title : ".$xx[0]."<br>";
   // $y = $xx[0];
   // echo " blog title : ".$y."<br>";

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
  div{

    margin-left:200px;

    width: 700px;
    /* height: 50px; */
    /* border: 10px solid #010212; */
    border-radius: 5px;
    margin-bottom: 15px;
    padding: 10px;
    /* box-shadow: 5px 5px #e3d0cf; */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    background-color: #edcf7e;
  }

  p{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

  }
  h1{
    width: 400px;

    color: #0e0f0f;
  }
  h3{
    display: none;
    /* display: hidden; */
  }
  .blogClass{
    background-image: url('https://media.istockphoto.com/photos/old-grungy-wall-texture-detail-picture-id1171164294?b=1&k=20&m=1171164294&s=170667a&w=0&h=8NheJ9NU8DIKluAGfD-L2NXrAsm7Lskp4z9DjwomAbk=');
    background-color: white;
    /* background-repeat: no-repeat; */
    /* width: fit-content;
    block-size: fit-content; */

  }
  img{
    padding: 10px;
    /* height: 100%;
    width: 100%; */
    /* border : 1px solid white; */

  }
  </style>
  <body id = "body1">

  </body>
</html>
<script src="functions.js">
</script>
<script type="text/javascript">

var blogid = <?php echo json_encode($blogid) ?>;
var blogtitle = <?php echo json_encode($blogtitle) ?>;
var blogtopic = <?php echo json_encode($blogtopic) ?>;
var blogImage = <?php echo json_encode($blogImage) ?>;
var htmlfile = <?php echo json_encode($htmlfile) ?>;

for (var i = 0; i < blogid.length; i++) {
  console.log(blogid[i],blogtitle[i],blogtopic[i],blogImage[i],htmlfile[i]);
}
for(var i = 0;i < blogid.length;i++){
  // console.log(imageDetails[i]);
  var para = document.createElement("div");
  para.setAttribute("id","div"+i.toString());
  para.className = "blogClass";

  var node = document.createElement("h1");
  var yy = document.createTextNode(blogtitle[i]);
  node.appendChild(yy);
  para.appendChild(node);
  var element = document.getElementById("body1");
  element.appendChild(para);

  var node = document.createElement("h3");
  var yy = document.createTextNode(htmlfile[i]);
  node.appendChild(yy);
  para.appendChild(node);




  //
  var para = document.createElement("img");
  para.setAttribute("src",blogImage[i]);
  para.setAttribute("height","300");
  para.setAttribute("width","500");
  var element = document.getElementsByTagName("div")[i];
  element.appendChild(para);

  //


  element.style.cursor = "pointer";
      element.onclick = function(){
        var divId = this.id;
        var x = htmlfile[divId[3]];
        console.log(x);
        sessionStorage.setItem("x", x);

        // pass js variable to blogdetails
        var aa = "http://localhost/EducationalPlatform/blogs/htmlfiles/" + x;
        window.location.href = aa;

      }
   }



</script>
<?php


// var xx = document.getElementById('div1id');
// xx.onclick = sayhello();
// function sayhello(){
//   cosole.log("hello");
// }
?>
