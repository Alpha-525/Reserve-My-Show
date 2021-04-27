<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <title>Reserve My Show (Book tickets online)</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" href = "http://localhost/Project/md.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/ec8d4bdaaf.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php
    $movier = $_SESSION['movieid'];
    $query1 = mysqli_query($connection,"Select * from movie where movieID= '$movier'");
    $row1 = mysqli_fetch_array($query1);
    ?>
    <div class="navbar">
      <span style="color:white;font-size:20px;cursor:pointer; padding-left: 10px; padding-top: 7px; float: left;" onclick="openNav()">&#9776;</span>    
  </div>
  <img style = "height: 15%; display: block; margin-left: auto; margin-right: auto;" src ="http://localhost/Project/WhatsApp_Image_2021-03-14_at_7.37.57_PM-removebg-preview.png">
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div style = "color: white;" class="overlay-content">
        <a href="Home Page.html">HOME</a>
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

    <div class="bg-image" style="background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['moviePos']);?>');">
    </div>
   <div>
    <p>
     <a style = "color: white;" href = "<?php echo $row1['movieTrailer']?>" alt = "Loading">
    <img id = "image" src ="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['moviePos']);?>" alt = "Loading.. " style="height: 60%; width:20%" class = "frt-img">
    <div class = "link"><i class="fa fa-play"></i> Trailer</div>
    </a>
   </p>
   </div><br>
   <div>
    <p style="text-align: center; color: white; font-size: 30px;"><b><?php echo $row1['movieName']?></b></p><br><br><br>
    <div style="background-color: rgb(32, 32, 32); color: white; height:40px; width:300px; position: absolute; top:630px; left:480px">
      <p style="text-align: center;  font-size: 15px;"><b>Available in : 2D, MX4D, 4DX, IMAX 2D</b></p>
  
    </div>
    <button class='butt'><span><a href = "Date&Time.html" style="text-decoration: none; color:white">Book Now !</a></span></button><br><Br>

  </div>
    <div class = "details">
      <p style = "font-size: 30px;"><b>About the movie</b></p>
      <p><?php echo $row1['movieDesc']?></div><br><br>
    <div class = "details"><br>
      <p style="display: inline;">Genre:</p> <p style="display: inline; margin-left: 150px;"><?php echo $row1['movieGenre']?>.</p><br><br>
      
      <p style="display: inline;">Duration:</p><p style="display: inline;margin-left: 135px;"><i class="far fa-clock"></i> <?php echo $row1['movieDuration']?></p><br><br>
      
      <p style="display: inline;">Availabe Languages:</p><p style="display: inline;margin-left: 30px;"><?php echo $row1['movieLang']?>.</p><br><br>
      
      <p style="display: inline;">Release Date:</p> <p style="display: inline;margin-left: 85px;"> <i class="fas fa-calendar-day"></i> <?php echo $row1['movieDate']?></p><br><br>
      
      <p style="display: inline;">Movie Type:</p><p style="display: inline;margin-left: 102px;"> <?php echo $row1['movieType']?></p><br><br>
    </div><br><br>

      <div class = "details">

      <p>Cast</p>
      <div class = "cast" style = "width:20%">
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['mAct1Img']);?>" alt="Avatar" class="avatar img">
      <p style = "text-align: center;"><?php echo $row1['mAct1']?> as<br> <?php echo $row1['mchar1']?></p>
    </div>
    <div class = "cast" style = "width:20%">
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['mAct2Img']);?>" alt="Avatar" class="avatar">
      <p style = "text-align: center;"><?php echo $row1['mAct2']?> as <br> <?php echo $row1['mchar2']?></p>
    </div>
    <div class = "cast" style = "width:20%">
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['mAct3Img']);?>" alt="Avatar" class="avatar">
      <p style = "text-align: center;"><?php echo $row1['mAct3']?> as <br><?php echo $row1['mchar3']?></p>
    </div>
    <div class = "cast" style = "width:20%">
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['mAct4Img']);?>" alt="Avatar" class="avatar">
      <p style = "text-align: center;"><?php echo $row1['mAct4']?> as <br><?php echo $row1['mchar4']?></p>
    </div><br><br>
      <hr>
      <p>Crew</p>
      <div class = "cast" style = "width:20%">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['movieDirectorImg']);?>" alt="Avatar" class="avatar">
        <p style = "text-align: center; padding-left: 10px;">Director <br> <?php echo $row1['movieDirector']?></p>
      </div>
      <div class = "cast" style = "width:20%">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['movieProducerImg']);?>" alt="Avatar" class="avatar">
        <p style = "text-align: center;">Producer <br> <?php echo $row1['movieProducer']?></p>
      </div>
      <div class = "cast" style = "width:20%">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['movieWriterImg']);?>" alt="Avatar" class="avatar">
        <p style = "text-align: center;">Writer <br> <?php echo $row1['movieWriter']?></p>
      </div>
      <div class = "cast" style = "width:20%">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['movieDOPImg']);?>" alt="Avatar" class="avatar">
        <p style = "text-align: center;">Director of Photography <br> <?php echo $row1['movieDOP']?></p>
      </div>
    </div><br><br>

    <br><br><br>

    <div class = "footer">
      <img class = "imgf" src = "WhatsApp_Image_2021-03-14_at_7.37.57_PM-removebg-preview.png">
      <div style = "text-align: center;">
       <i class="fab fa-facebook-square"></i>
       <i class="fab fa-instagram"></i>
       <i class="fab fa-pinterest"></i>
       <i class="fab fa-twitter"></i>
       <i class="fab fa-youtube"></i>
       <i class="fab fa-linkedin"></i>   
      </div>
      <p style = "text-align: center; font-size: 10px;">
       Copyright 2021 © Bigtree Entertainment Pvt. Ltd. All Rights Reserved.
       The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.
      </p>
       </div>
    
  </body>
  </html>