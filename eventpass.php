<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <title>Reserve My Show (Book tickets online)</title>
  <head>
    <link rel="stylesheet" href="http://localhost/Project/neweventpass.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/ec8d4bdaaf.js" crossorigin="anonymous"></script>
    <script src="http://localhost/Project/jquery.js"> </script>
   <script src="http://localhost/Project/script.js"> </script> 
  

  </head>
  <body>
    <?php
    
    $eventr = $_SESSION['eventid'];
    $query1 = mysqli_query($connection,"Select * from event where eventID= '$eventr'");
    $row1 = mysqli_fetch_array($query1);

    $query1 = mysqli_query($connection,"SELECT MAX(passID) from passbooking");
    $row2 = mysqli_fetch_array($query1);
    
    
    ?>
    <button id="down" style="cursor: pointer;background-color: darkred; border: none; height: 40px; width:120px; position: relative; top:50px; left: 1100px; color:white; border-radius: 5px; padding:5px">Download <i class="far fa-arrow-alt-circle-down"></i></button><br>

    <div id="pass">
    <img src="http://localhost/Project/Copy%20of%20black%20and%20red%20colors%20ticket%20template%20design%20-%20Made%20with%20PosterMyWall.jpg">
    
    <h1 style="font-size: 70px;left:230px;top:250px;">P-<?php echo $row2[0]?></h1>
    <h2 style="font-size: 30px;top:200px;left:260px;"><?php echo $_SESSION['username'];?></h4>
    <h2 id="company"><?php echo $row1['eventOrganiser']?></h2>
    <h1 id="ename" ><?php echo $row1['eventName']?></h1>
    <h1 id="oneliner"><?php echo $row1['eventCity']?></h1>
    <h2 id="date"><?php echo $row1['eventDate']?></h2>
    <h2 id="time" style="color: white; writing-mode: vertical-rl;left:890px;top:260px;"><?php echo $row1['eventTime']?></h2>
</div>
 

  </body>
</html>