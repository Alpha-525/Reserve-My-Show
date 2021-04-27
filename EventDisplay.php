<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <title>Reserve My Show (Book tickets online)</title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href = "eventdisplay.css">
    <script src="https://kit.fontawesome.com/ec8d4bdaaf.js" crossorigin="anonymous"></script>
   
</head>
<body>
  <?php
    
    $eventr = $_SESSION['eventid'];
    $query1 = mysqli_query($connection,"Select * from event where eventID= '$eventr'");
    $row1 = mysqli_fetch_array($query1);
  
    ?>
    <div class="navbar">
        <span style="color:white;font-size:20px;cursor:pointer; padding-left: 10px; padding-top: 7px; float: left;" onclick="openNav()">&#9776;</span>    
    </div>

    <img style = "height: 95px; display: block; margin-left: auto; margin-right: auto;" src = "http://localhost/Project/WhatsApp_Image_2021-03-14_at_7.37.57_PM-removebg-preview.png">
  
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
    <div class = "img0" style = "width: 80%;">
        <img class = "img1" src = "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['eventPoster']);?>" alt = "Loading....">
        <img class = "img2" src = "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['eventPoster']);?>" alt = "Loading....">
    </div>

    <a href="summary.php"><button class='butt' name="book"><span>Book Now !</span></button></a><br>
   
    <div class = "info">
        <h1> <?php echo $row1['eventName'];?> </h1>
        <p> <?php echo $row1['eventGenre'];?> | English | 18yrs+ |  <?php echo $row1['eventOrganiser'];?>  </p><br>
        <hr>
        <p> <?php echo $row1['eventDate'];?> at <?php echo $row1['eventTime'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> GYLT: <?php echo $row1['eventCity'];?>  | <i class="fas fa-rupee-sign"></i>  <?php echo $row1['eventPrice'];?> </p>
    </div>

    <div class="group">
        <div class="artist">
            <h4>Artist</h4>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['eventGuestImg']);?>" alt="Avatar" class="avatar">
            <?php echo $row1['eventGuest'];?> 
        </div>
        <div class="about">
            <h4>About</h4>
            <p style = "text-align: justify;"> <?php echo $row1['eventDesc'];?> </div>
        <div class="location">
            <h4>Location</h4>&nbsp;&nbsp;&nbsp;&nbsp;
             <?php echo $row1['eventLocation'];?></div>
        <div class="social">
          <h4>Share this event</h4>
          <a href="https://www.facebook.com/"><i style = "padding-left: 50px; color: white;" class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/accounts/login/"> <i style = "padding-left: 40px; color: white;" class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/login?lang=en-gb"><i style = "padding-left: 50px; color: white;" class="fab fa-twitter"></i></a>
       </div>
       
    <div class="tnc">
      <p style = "text-align: center;">Terms & Conditions</p>
      <p>
        <ul>
          <li> <?php echo $row1['eventTnC'];?> </li>
        </ul>
      </p>
    </div>
    </div>
<div class = "footer">
  <img class = "img" src = "WhatsApp_Image_2021-03-14_at_7.37.57_PM-removebg-preview.png">
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
