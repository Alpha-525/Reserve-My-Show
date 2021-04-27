<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html lang="en">
<head>
    <link rel="stylesheet" href="forms.css">
    <meta name='viewport', content='width=device-width', initial-scale='1.0'>
    <style>
        button{
        border: none; background-color: darkred; width:100px; height:40px; cursor: pointer; border-radius: 4px; color: white;
        }
        </style>
</head>

<body>
<div style = "background-image:url(photo-1501281668745-f7f57925c3b4.jpeg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <form action = "Form.php" method="POST" enctype="multipart/form-data">
            <label for = "eventid">Event ID:</label><br>
            <input type = "text" id = "eventid" name = "eventid" placeholder = "Enter the ID" value="<?php echo $_SESSION['eventID'];?>">&nbsp;<button name="checke">Check</button><br><br>
            <label for = "eventname">Event Name:</label><br>
            <input type = "text" id = "eventname" name = "eventname" placeholder = "Enter the event name" value="<?php echo $_SESSION['eventName'];?>"><br><br>
            <label for = "eventdesc">Event Description:</label><br>
            <input type="text" id = "eventdesc" name = "eventdesc" placeholder = "Enter the description" style = "height: 50px"value="<?php echo $_SESSION['eventDesc'];?>"><br><br>
            <label for = "eventdatetime">Event Date</label><br>
            <input type = "text" id = "eventdate" name = "eventdate" placeholder = "Enter the date" value="<?php echo $_SESSION['eventDate'];?>"><br><br>
            <label for = "eventdatetime">Event Time:</label><br>
            <input type = "text" id = "eventtime" name = "eventtime" placeholder = "Enter the time" value="<?php echo $_SESSION['eventTime'];?>"><br><br>
            <label for = "eventgen">Event Genre:</label><br>
            <select id = "eventgen" name = "eventgen">
            <option value = "Comedy"<?php if($_SESSION['eventGenre']=="Workshop") echo 'selected="selected"'; ?>>Workshop</option>
                <option value="Workshop"<?php if($_SESSION['eventGenre']=="Comedy") echo 'selected="selected"'; ?>>Comedy</option>
                <option value="Drama"<?php if($_SESSION['eventGenre']=="Drama") echo 'selected="selected"'; ?>>Drama</option>
                <option value="Music Band"<?php if($_SESSION['eventGenre']=="Music Band") echo 'selected="selected"'; ?>>Music Band</option>
                <option value="DJ Night"<?php if($_SESSION['eventGenre']=="DJ Night") echo 'selected="selected"'; ?>>DJ Night</option>
                <option value="Musical Performance"<?php if($_SESSION['eventGenre']=="Musical Performance") echo 'selected="selected"'; ?>>Musical Performance</option>
                <option value="TED Talk"<?php if($_SESSION['eventGenre']=="TED Talk") echo 'selected="selected"'; ?>>TED Talk</option>
            </select><br><br>

            <label for = "eventprice">Event Price(Incl tax):</label><br>
            <input type = "number" id = "eventprice" name = "eventprice" placeholder = "Enter the price" value="<?php echo $_SESSION['eventPrice'];?>"><br><br>
            <label for = "eventname">Event City:</label><br>
            <input type = "text" id = "eventcity" name = "eventcity" placeholder = "Enter the event's city" value="<?php echo $_SESSION['eventCity'];?>"><br><br>
            <label for = "eventloc">Event Location:</label><br>
            <input type = "text" id = "eventloc" name = "eventloc" placeholder = "Enter the event's location" value="<?php echo $_SESSION['eventLocation'];?>"><br><br>
            <label>Event Organizer</label><br>
            <input type = "text" id = "eventorg" name = "eventorg" placeholder = "Enter the organizer's name" value="<?php echo $_SESSION['eventOrganiser'];?>"><br><br><br>
            <label>Guest's Name:</label><br>
            <input type = "text" id = "eventguest1" name = "eventguest1" placeholder = "Enter the guest's name" value="<?php echo $_SESSION['eventGuest1'];?>"><br><input type = "file" id = "guest1" name = "guest1" placeholder = "Upload" ><br><br>
            <label for = "eventtc">Event Terms & Conditions:</label><br>
            <input type="text" id = "eventtc" name = "eventnc" placeholder = "Enter the terms & condiotions" style="height: 50px;" value="<?php echo $_SESSION['eventTnC'];?>"><br><br>
            <label for = "eventpost">Event Poster:</label><br>
            <input type = "file" id = "eventpost" name = "eventpost" placeholder = "Upload"><br><br>
           <div style="margin-left: 450px;"> 
            <button type="submit" name = "inserte">Insert</button>&nbsp;
            <button type="submit" name="updatee">Update</button>&nbsp;
            <button type="submit" name="deletee" >Delete</button>
        </div>
</body>
</html>