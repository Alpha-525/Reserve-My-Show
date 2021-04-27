<?php 
    session_start();
    include('config.php');
?>
<html>
<title>Reserve My Show (Book Tickets Online)</title>
<head>
    <link rel="stylesheet" type="text/css" href="style3.css"/>
    <script src="https://kit.fontawesome.com/ec8d4bdaaf.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <?php
    
    $eventr = $_SESSION['eventid'];
    $query1 = mysqli_query($connection,"Select * from event where eventID= '$eventr'");
    $row1 = mysqli_fetch_array($query1);
  
    ?>
<div class="card">
    <div class="card-body">
        <div class="row upper"></div>
        <div class="row">
            <div class="col-md-5">
                <div class="right border">
                    <div class="header" style="font-size: 50px;">Booking Summary</div>
                    <hr>
                    <div class="row item">
                        <div class="col-8">
                            <div style = "font-size:x-large;"class="row"><b><?php echo $row1['eventName'];?></b></div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-8">
                            <div style="font-size: x-small; color: dimgrey;" class="row text-muted">1 Ticket only.</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row lower">
                        <div class="col text-left"style = "font-size:large; display: inline-block"><b> <?php echo $row1['eventDate'];?></b></div>
                        <span style = "font-size:large;"> at </span>
                        <div class="col text-left"style = "font-size:large; display: inline-block"><b> <?php echo $row1['eventTime'];?></b></div>
                    </div><br><hr>
                    <div class="row lower">
                        <div class="col text-left"><p style="float: left;">Sub Total</b></div>
                        <div class="col text-right"><p style="float: right;"><i class="fas fa-rupee-sign"></i> <?php echo $row1['eventPrice'];?></p></div>
                    </div><br><br>
                    <div class="row lower"  style="display: inline;">
                        <div class="col text-left"> <p style="float: left;position: absolute; left:442px;">Total Amount</p></div>
                        <div class="col text-right"><p style="float: right;position: absolute; top:345px; right:442px"><i class="fas fa-rupee-sign"></i> <?php echo $row1['eventPrice'];?></p></div><br><br>
                    </div>
                    <a href="payment.php"><button class="btn">Proceed</button></a>
                </div>
            </div>
        </div>
    </div>
    <div> </div>
</div>
</body>
</html>