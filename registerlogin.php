<?php

    session_start();
    include('config.php');


   if(! $connection)
   {
      die('Could not connect: ' . mysqli_error());
   }

   if(isset($_POST['signup']))
    {
        $name=$_POST['uname'];
        $email=$_POST['email'];
        $psw=$_POST['psw'];
       

        $retval = mysqli_query($connection,"INSERT into user(Name,Email,Password) VALUES('$name','$email','$psw')");
    
    if($retval)
    {
        echo'<script>window.alert("You have successfully registered")</script>';
        header("location: Home Page.php");
        
    }
}


    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $check = mysqli_query($connection,"SELECT Name from user WHERE Email='$email' AND Password='$psw' ");
        $row = mysqli_fetch_array($check);
        $no = mysqli_num_rows($check);

        if($no > 0)
        {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $check;
            header("location:Home Page.php");
            
        }
        else
        {
            echo "User does not Exits";
        }
    }


?>
