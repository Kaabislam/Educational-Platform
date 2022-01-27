<?php
    // echo "physics page";
    session_start();
    include("../header.php");
    // include("../side.php");
    $link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
    if($link){
      // echo "ok";
    }

    $x = "../video/";
    $videoId = array();
    $videoDetails = array();
    $videoName = array();
    $sql = "SELECT id,videoname,title from physics";
    $retval = mysqli_query($link,$sql);

    while ($xx = mysqli_fetch_array($retval)) {
      // echo " ".$xx[0].$xx[1].$xx[2]. "<br>";
      $videoId = array_pad($videoId,sizeof($videoId)+1,$xx[0]);
      $videoDetails = array_pad($videoDetails,sizeof($videoDetails)+1,$xx[2]);
      $videoName = array_pad($videoName,sizeof($videoName)+1,$x.$xx[1]);

      // echo " : ".$blogDetails[sizeof($blogDetails)-1]."<br>";
      // echo " blog title : ".$xx[0]."<br>";
      // $y = $xx[0];
      // echo " blog title : ".$y."<br>";
    }
    // for ($i=0; $i < 3; $i++) {
    //   echo $videoName[$i]."<br>";
    // }

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
    .coursetitleVideoClass{
      background-image: url('https://media.istockphoto.com/photos/old-grungy-wall-texture-detail-picture-id1171164294?b=1&k=20&m=1171164294&s=170667a&w=0&h=8NheJ9NU8DIKluAGfD-L2NXrAsm7Lskp4z9DjwomAbk=');
      margin-left: 40vh;
      width: 700px;
      /* height: 50px; */
      border: 1px solid #3e405c;
      border-radius: 10px;
      margin-bottom: 15px;
      padding: 10px;
      /* box-shadow: 5px 5px #e3d0cf; */
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      background-color:#e6df83;
    }

    p{
      /* white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; */
      display: none;
    }
    h1{
      width: 400px;
      color: black;
    }
    video{
      display: none;
      width: 600px;
      border-radius: 10px;
    }
    br{
      color: red;
    }
  </style>
  <body id = "body1">
    <p>this is paragraph</p>
  </body>
</html>
<script type="text/javascript">

var videoId = <?php echo json_encode($videoId) ?>;
var videoDetails = <?php echo json_encode($videoDetails) ?>;
var videoName = <?php echo json_encode($videoName) ?>;
for (var i = 0; i < videoId.length; i++) {
  // console.log(videoId[i],videoDetails[i],videoName[i]);
}
console.log(videoId.length);                                      //videoId    videoDetails videoName
for(var i = 0;i < videoId.length;i++){
  // console.log(imageDetails[i]);
  var para = document.createElement("div");

  para.setAttribute("id","div"+i.toString());
  para.className = "coursetitleVideoClass"
  // var x = document.createElement("video");
  // x.setAttribute("src","../video/ogg.ogg");
  // x.setAttribute("width","320");
  // x.setAttribute("height","300");
  // x.setAttribute("controls","controls");
  // x.setAttribute("type","video/ogg")
  // var element = document.getElementById("body1");
  // element.appendChild(x);

  var node = document.createElement("h1");
  var yy = document.createTextNode(videoDetails[i]);
  node.appendChild(yy);
  para.appendChild(node);
  var element = document.getElementById("body1");
  element.appendChild(para);




  //
  var para = document.createElement("video");
  para.setAttribute("src",videoName[i]);
  para.setAttribute("height","300");
  para.setAttribute("width","500");
  para.setAttribute("controls","controls");
  para.setAttribute("type","video/ogg");
  var element = document.getElementsByTagName("div")[i];
  element.appendChild(para);

  //


  element.style.cursor = "pointer";
      element.onclick = function(){
          var id = this.id;
          var x = document.getElementById(id).getElementsByTagName("video")[0]
          console.log(x);
          if(x.style.display == ""){
            x.style.display = "block";
          }
          else {
            x.style.display = "";
          }
          // var a = document.getElementsByTagName("p")[0];
          //
          // console.log(a.style.display);
          // // vi.style.display  = "block";
          // if (a.style.display === "") {
          //   console.log(a);
          //     a.style.display = 'block';
          //   }
          // } else {
          //     x.style.display = "block";
          // }
          // // var vi = document.getElementById(id);
          // console.log(vi);
          // var x = vi.video;
          // console.log(x);
          // // video.style.display = "block"
          // // console.log(id);
          //window.location.href = "http://localhost/blogDetails.php";
      }
   }


</script>
