<?php
 session_start();
 include("../../header.php");
 include("../../side.php");
 $link = mysqli_connect($_SESSION["DB_SERVER"],$_SESSION["DB_USERNAME"],$_SESSION["DB_PASSWORD"],$_SESSION["DB_NAME"]);
 if($link == true){
   //echo "CONNECTED!!!";
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
    .blogContent{
      margin: 100px;
    }
    .blogparagraph{
      font-size: 23px;
    }
    .blogHeading{
      font-size: 50px;
    }
    .blogInternalHeading{
      font-size: 32px;
    }
    h1,h3,h2{
      color:white;
    }
    p{
      color: #42f5bf
    }
  </style>
  <body>
    <div class="blogContent">
      <h1 class = "blogHeading">this is heading</h1>
      <p class = "blogparagraph" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      <img src="https://media.istockphoto.com/photos/capsules-or-pills-on-white-background-picture-id970767512?k=20&m=970767512&s=612x612&w=0&h=HRmuTtQXaRuo8J5qvi7YHyj615oKipNUyIzaeCBIX8w=" alt="">
      <p class = "blogparagraph">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
      <p class = "blogparagraph">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia </p>
      <img src="https://media.istockphoto.com/vectors/golden-fish-in-blue-aquarium-vector-id461771661?k=20&m=461771661&s=612x612&w=0&h=OAR5GyWNoxxbRgyYglAeBh7xtJNp3Mw_ZVEfkireB34=" alt="">
      <h2 class="blogInternalHeading">this is inner heading in a blog </h2>
      <p class = "blogparagraph">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia</p>
    </div>
  </body>
</html>
