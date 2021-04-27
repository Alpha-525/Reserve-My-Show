<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <title>Reserve My Show (Book tickets online)</title>
<head>
  <title></title>
  <link rel = "stylesheet" href = "http://localhost/Project/moviec.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="navbar">
        <span style="color:white;font-size:20px;cursor:pointer; padding-left: 10px; padding-top: 7px; float: left;" onclick="openNav()">&#9776;</span>    
    </div>
    <img style = "height: 15%; display: block; margin-left: auto; margin-right: auto;" src = "http://localhost/Project/WhatsApp_Image_2021-03-14_at_7.37.57_PM-removebg-preview.png">
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style = "color: white;" class="overlay-content">
          <a href="Home Page.php">HOME</a>
          <a href="About.html">ABOUT US</a>
          <a href="t&c.html">TERMS & CONDITIONS</a>
          <a href="Contact.html">CONTACT US</a>
        </div>
      </div> 
      <script>
        function openNav() {
          document.getElementById("myNav").style.width = "100%";
        }
        
        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
        }
        </script> 

      <h1 style = "color: white; padding-left: 50px; background-color: rgb(32, 32, 32); width : 45%; border-radius: 5px; left:10px;">Hollywood Section</h1>

      <h4 style = "color: white; padding-left: 50px;">Now showing  <span class="dot"></span></h4>
      <div class="vl"></div>
      <div style = "padding-top: 10px; width:50%;" class="row">
        <form action="Form.php" method="POST">
            <div class="column">
            <img src= "http://localhost/Project/Movies/images%20(5).jpeg" alt="Loading" style="width:100%;"><br>
            <input type="hidden" name="movieid" value="movie02"></input>
            <button class="butt" style="background-color:black;" name="movie" >Godzilla vs Kong</button>
            </div>
        </form>
        <form action="Form.php" method="POST">
            <div class="column">
            <img src= "http://localhost/Project/Movies/tom.jpeg" alt="Loading" style="width:100%;"><br>
            <button class="butt" name="movie"style="background-color:black;margin-left:15px">Tom & Jerry</button>
            </div>
        </form>
        <form action="Form.php" method="POST">
            <div class="column">
            <input type="hidden" name="movieid" value="movie03"></input>
            <img src= "http://localhost/Project/Movies/images.jpeg" alt="Loading" style="width:100%;"><br>
            <button class="butt" name="movie"style="background-color:black;">Wonder Woman</button>
            </div>
        </form>
        <form action="Form.php" method="POST">
            <div class="column">
            <img src= "http://localhost/Project/Movies/images%20(2).jpeg" alt="Loading" style="width:100%;"><br>
            <button class="butt" name="movie"style="background-color:black;">Fast and Furious 9</button>
            </div>
        </form>
        <form action="Form.php" method="POST">
            <div class="column">
            <img src= "http://localhost/Project/Movies/images%20(3).jpeg" alt="Loading" style="width:100%;"><br>
            <button class="butt" name="movie" style="background-color:black;margin-left:15px">Black Widow</button>
            </div>
        </form>
        </div>

        <h4 style = "color: white; padding-left: 100px; position: absolute; top : 150px; left : 600px">Upcoming</h4>
        <div style = "padding-top: 20px; width:50%;" class="row1">
        <form action="Form.php" method="POST">
          <div class="column">
            <img src= "http://localhost/Project/Movies/images%20(1).jpeg" alt="Loading" style="width:100%;"><br>
            <input type="hidden" name="movieid" value="movie01"></input>
            <button class="butt" name="movie" style="background-color:black;">Avengers Endgame</button>
          </div>
          </form>
          <form action="Form.php" method="POST">
          <div class="column">
            <img src= "http://localhost/Project/Movies/images%20(4).jpeg"  alt="Loading" style="width:100%"><br>
            <buttton class="butt" name="movie" style="background-color:black;margin-left:35px">Thor</button>
          </div>
          </form>
          <form action="Form.php" method="POST">
          <div class="column">
            <img src= "http://localhost/Project/Movies/thor.jpg" alt="Loading" style="width:100%"><br>
            <button class="butt" name="movie" style="background-color:black;margin-left:25px">Spiderman</button>
          </div>
          </form>
          <form action="Form.php" method="POST">
          <div class="column">
            <img src= "http://localhost/Project/Movies/suicide.jpg" alt="Loading" style="width:100%"><br>
            <button class="butt" name="movie"style="background-color:black;margin-left:10px;" >Suicide Squad 2</button>
          </div>
          </form>
          </div><br>
        
      <hr>
      <br>
      <h1 style = "color: white; padding-left: 50px; background-color: rgb(32, 32, 32); width : 45%; border-radius: 5px; left:10px; position: relative;">Bollywood Section</h1>
      <h4 style = "color: white; padding-left: 50px;">Now showing  <span class="dot"></span></h4>
      <div class="v2"></div>

     
      <div style = "padding-top: 10px; width:50%;" class="row">
      <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/aedilhaimushkil.jpg" alt="Loading" style="width:100%;"><br>
          <button class="butt" name="movie" style="background-color:black;">Ae Dil Hai Mushkil</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src="http://localhost/Project/Movies/dishoom.jpg" alt="Loading" style="width:100%"><br>
          <button class="butt" name="movie" style="background-color:black;margin-left:25px" >Dishoom</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/msdhoni.jpg" alt="Loading" style="width:100%"><br>
          <input type="hidden" name="movieid" value="movie04"></input>
          <button class="butt" name="movie" style="background-color:black;">MS Dhoni The Untold Story</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/Ok_Jaanu_poster.jpg" alt="Loading" style="width:100%"><br>
          <button class="butt" name="movie" style="background-color:black;margin-left:25px" >Ok Jaanu</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/dangal.jpg" alt="Loading" style="width:100%"><br>
          <button class="butt" name="movie" style="background-color:black;margin-left:35px" >Dangal</button>
      </div>
      </form>

      <h4 style = "color: white; padding-left: 100px; position: absolute; top : 980px; left : 600px">Upcoming</h4> 
      <div style = "padding-top: 10px; width:50%;" class="row2">
      <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/halfgf.jpg" alt="Loading" style="width:100%;"><br>
          <input type="hidden" name="movieid" value="movie05"></input>
          <button class="butt" name="movie" style="background-color:black;margin-left:20px">Half Girlfriend</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/humsafar.jpg" alt="Loading" style="width:100%"><br>
          <button class="butt" name="movie" style="background-color:black;">Badrinath ki Dulhania</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/jhms.jpg" alt="Loading" style="width:100%"><br>
          <button class="butt" name="movie" style="background-color:black;">Jab Harry Met Sejal</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/simran.jpg" alt="Loading" style="width:100%"><br>
          <button class="butt" name="movie"style="background-color:black;margin-left:35px"  >Simran</button>
        </div>
        </form>
        <form action="Form.php" method="POST">
        <div class="column">
          <img src= "http://localhost/Project/Movies/october.jpg" alt="Loading" style="width:100%"><br>
          <button class="butt" name="movie"style="background-color:black;margin-left:35px"  >October</button>
        </div>
        </form>
      </div>

      
        
</body>
</html>   
