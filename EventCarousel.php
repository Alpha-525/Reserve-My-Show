<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <title>Reserve My Show (Book tickets online)</title>
  <head> 
    <link rel="stylesheet" href="eventcarousel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/ec8d4bdaaf.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
    
    $eventr = $_SESSION['eventid'];
    $query1 = mysqli_query($connection,"Select * from event where eventID= '$eventr'") or die(mysqli_error($connection));
    $row1 = mysqli_fetch_array($query1);
  
    ?>
    <div class="navbar">
        <span style="color:white;font-size:20px;cursor:pointer; padding-left: 10px; padding-top: 7px; float: left;" onclick="openNav()">&#9776;</span>    
    </div>
    <img src = "http://localhost/Project/WhatsApp_Image_2021-03-14_at_7.37.57_PM-removebg-preview.png" style="height: 80px; width:200px; margin-left: auto; margin-right: auto; display: block;">
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

        <div>
            <h1>Events in Bangalore</h1>
            <form action="Form.php" method="POST">
            <div class="divi"><br>
                <img src="http://localhost/Project/Events/sunburn.jpg" alt="Loading..">
                <div class="details">
                    <h3>Sunburn Holi Weekend ft Vini Vici</h3>
                    <h4><span>DJ Night |</span></h4>
                    <h4><span>Mon 10 May 2021 |</span></h4>
                    <h4><i class="fas fa-rupee-sign"></i> 2000</h4><br>
                    <input type="hidden" name="eventid" value="event02"></input>
                <button style="font-size: 20px;height:50px;width:200px;background-color: darkred; color: white; border: none; border-radius: 3px; padding:5px;cursor: pointer; transition: all 0.5s;margin-left:20px;" name="event">Book Passes </span></button> 
             </div>
               </div><br>
            <hr><br>
          </form>
          <form action="Form.php" method="POST">
            <div class="divi"><br>
                <img src="http://localhost/Project/pottery-workshops-for-skill-building-and-therapy.jpg" alt="Loading..">
                <div class="details">
                    <h3>Pottery Workshops for Skill-building and Therapy ft. Madhvi</h3>
                    <h4>Workshop<span> |</span></h4>
                <h4><span>Thu 20 May 2021 |</span></h4>
                <h4><i class="fas fa-rupee-sign"></i> 1000</h4><br>
                <input type="hidden" name="eventid" value="event03"></input>
                <button style="font-size: 20px;height:50px;width:200px;background-color: darkred; color: white; border: none; border-radius: 3px; padding:5px;cursor: pointer; transition: all 0.5s;margin-left:20px;" name="event"><span>Book Passes </span></button>
                </div>
            </div><br>
            <hr><br>
            </form>
            <form action="Form.php" method="POST">
            <div class="divi"><br>
                <img src="http://localhost/Project/punchliners-comedy-show-ft-daniel-fernandes.jpg" alt="Loading..">
                <div class="details">
                    <h3>Punchliners Comedy Show</h3>
                    <h4>Comedy<span> |</span></h4>
                <h4>Fri 28 May 2021<span> |</span></h4>
                <h4><i class="fas fa-rupee-sign"></i> 1000</h4><br>
                <input type="hidden" name="eventid" value="event04"></input>
                <button style="font-size: 20px;height:50px;width:200px;background-color: darkred; color: white; border: none; border-radius: 3px; padding:5px;cursor: pointer; transition: all 0.5s;margin-left:20px;" name="event"><span>Book Passes </span></button>  
            </div>
              
            </div><br>
            <hr><br>
            </form>
            <form action="Form.php" method="POST">
            <div class="divi"><br>
                <img src="http://localhost/Project/carnival-of-dusk.jpg" alt="Loading..">
                <div class="details">
                    <h3>Carnival of Dusk</h3>
                    <h4>MusicalPerformance<span> |</span></h4>
                <h4>Tue 25 May 2021 <span> |</span></h4>
                <h4><i class="fas fa-rupee-sign"></i> 2000</h4><br>
                </div>
                <input type="hidden" name="eventid" value="event01"></input>
                <button style="font-size: 20px;height:50px;width:200px;background-color: darkred; color: white; border: none; border-radius: 3px; padding:5px;cursor: pointer; transition: all 0.5s;margin-left:350px;" name="event"><span>Book Passes </span></button>
            </div><br>
            <hr><br>
            </form>
            <form action="Form.php" method="POST">
            <div class="divi"><br>
                <img src="http://localhost/Project/baking-jokes-stand-up-comedy.jpg" alt="Loading..">
                <div class="details">
                    <h3>Baking Jokes</h3>
                    <h4>Comedy<span> |</span></h4>
                <h4>Fri 20 April 2021<span> |</span></h4>
                <h4><i class="fas fa-rupee-sign"></i> 500</h4><br>
                </div>
                <input type="hidden" name="eventid" value="event05"></input>
                <button style="font-size: 20px;height:50px;width:200px;background-color: darkred; color: white; border: none; border-radius: 3px; padding:5px;cursor: pointer; transition: all 0.5s;margin-left:350px;" name="event"><span>Book Passes </span></button>
            </div>
            </form>
  </body>
</html>
