<?php

    session_start();
    include('config.php');


   if(! $connection)
   {
      die('Could not connect: ' . mysqli_error());
   }

 //<<------------- ADDING movies Details TO DATABASE --------------------->>

     if(isset($_POST['insertm']))
    {
        $status = 'error';
        if(!empty($_FILES["movdirimg"]["name"]))
        {
            $fileName = basename($_FILES["movdirimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movdirimg']['tmp_name'];
            $imgContent1 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movproimg"]["name"]))
        {
            $fileName = basename($_FILES["movproimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movproimg']['tmp_name'];
            $imgContent2 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movwriimg"]["name"]))
        {
            $fileName = basename($_FILES["movwriimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movwriimg']['tmp_name'];
            $imgContent3 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movdopimg"]["name"]))
        {
            $fileName = basename($_FILES["movdopimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movdopimg']['tmp_name'];
            $imgContent4 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act1img"]["name"]))
        {
            $fileName = basename($_FILES["act1img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act1img']['tmp_name'];
            $imgContent5 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act2img"]["name"]))
        {
            $fileName = basename($_FILES["act2img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act2img']['tmp_name'];
            $imgContent6 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act3img"]["name"]))
        {
            $fileName = basename($_FILES["act3img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act3img']['tmp_name'];
            $imgContent7 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act4img"]["name"]))
        {
            $fileName = basename($_FILES["act4img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act4img']['tmp_name'];
            $imgContent8 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movpos"]["name"]))
        {
            $fileName = basename($_FILES["movpos"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movpos']['tmp_name'];
            $imgContent9 = addslashes(file_get_contents($image));
        }
       
        $movieID=$_POST['movieid'];
        $movieName=$_POST['movname'];
        $movieDes=$_POST['movdesc'];
        $movieDate=$_POST['movdate'];
        $movieType=$_POST['movtype'];
        $movieGenre=$_POST['movgen'];
        $movieDuration=$_POST['movdur'];
        $movieDirector=$_POST['movdirec'];
        $movieProducer=$_POST['movpro'];
        $movieWriter=$_POST['movwri'];
        $movieDOP=$_POST['movdop'];
        $mAct1=$_POST['movact1'];
        $mchar1=$_POST['char1'];
        $mAct2=$_POST['movact2'];
        $mchar2=$_POST['char2'];
        $mAct3=$_POST['movact3'];
        $mchar3=$_POST['char3'];
        $mAct4=$_POST['movact4'];
        $mchar4=$_POST['char4'];
        $movieTrailer=$_POST['movtrail'];
        $movieLang=$_POST['movlang'];
        

        $retval = mysqli_query($connection,"INSERT into movie(movieID,movieName,movieDesc,movieDate,movieType,movieGenre,movieDuration,movieDirector,movieDirectorImg,movieProducer,movieProducerImg,movieWriter,movieWriterImg,movieDOP,movieDOPImg,mAct1,mchar1,mAct1Img,mAct2,mchar2,mAct2Img,mAct3,mchar3,mAct3Img,mAct4,mchar4,mAct4Img,movieTrailer,movieLang,moviePos) VALUES('$movieID','$movieName','$movieDes','$movieDate','$movieType','$movieGenre','$movieDuration','$movieDirector','$imgContent1','$movieProducer','$imgContent2','$movieWriter','$imgContent3','$movieDOP','$imgContent4','$mAct1','$mchar1','$imgContent5','$mAct2','$mchar2','$imgContent6','$mAct3','$mchar3','$imgContent7','$mAct4','$mchar4','$imgContent8','$movieTrailer','$movieLang','$imgContent9')");
        header("location: MovieForm.php");
            

        }
//<<------------- Checking  Details from DATABASE --------------------->>

        if(isset($_POST['checkm']))
    {
        $movieID=$_POST['movieid'];
        $query =mysqli_query($connection,"SELECT * from movie where movieID = '$movieID' ");
        $row = mysqli_fetch_array($query);
        $_SESSION['movieID'] = $row['movieID'];
        $_SESSION['movieName'] = $row['movieName'];
        $_SESSION['movieDesc'] = $row['movieDesc'];
        $_SESSION['movieDate'] = $row['movieDate'];
        $_SESSION['movieType'] = $row['movieType'];
        $_SESSION['movieGenre'] = $row['movieGenre'];
        $_SESSION['movieDuration'] = $row['movieDuration'];
        $_SESSION['movieDirector'] = $row['movieDirector'];
        $_SESSION['movieProducer'] = $row['movieProducer'];
        $_SESSION['movieWriter'] = $row['movieWriter'];
        $_SESSION['movieDOP'] = $row['movieDOP'];
        $_SESSION['mAct1'] = $row['mAct1'];
        $_SESSION['mchar1'] = $row['mchar1'];
        $_SESSION['mAct2'] = $row['mAct2'];
        $_SESSION['mchar2'] = $row['mchar2'];
        $_SESSION['mAct3'] = $row['mAct3'];
        $_SESSION['mchar3'] = $row['mchar3'];
        $_SESSION['mAct4'] = $row['mAct4'];
        $_SESSION['mchar4'] = $row['mchar4'];
        $_SESSION['movieTrailer'] = $row['movieTrailer'];
        $_SESSION['movieLang'] = $row['movieLang'];
        $_SESSION['moviePos'] = $row['moviePos'];
        header("location: MovieForm.php");
    }


//<<------------- Deleting Details from DATABASE --------------------->>

if(isset($_POST['deletem']))
{
    $movieID=$_POST['movieid'];
    $query =mysqli_query($connection,"DELETE from movie where movieID = '$movieID' ");
    header("location: MovieForm.php");
    
}

//<<------------- Updating Details from DATABASE --------------------->>
if(isset($_POST['updatem']))
    {
        
        $movieID=$_POST['movieid'];
        $movieName=$_POST['movname'];
        $movieDes=$_POST['movdesc'];
        $movieDate=$_POST['movdate'];
        $movieType=$_POST['movtype'];
        $movieGenre=$_POST['movgen'];
        $movieDuration=$_POST['movdur'];
        $movieDirector=$_POST['movdirec'];
        $movieProducer=$_POST['movpro'];
        $movieWriter=$_POST['movwri'];
        $movieDOP=$_POST['movdop'];
        $mAct1=$_POST['movact1'];
        $mchar1=$_POST['char1'];
        $mAct2=$_POST['movact2'];
        $mchar2=$_POST['char2'];
        $mAct3=$_POST['movact3'];
        $mchar3=$_POST['char3'];
        $mAct4=$_POST['movact4'];
        $mchar4=$_POST['char4'];
        $movieTrailer=$_POST['movtrail'];
        $movieLang=$_POST['movlang'];

        $status = 'error';
        if(!empty($_FILES["movdirimg"]["name"]))
        {
            $fileName = basename($_FILES["movdirimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movdirimg']['tmp_name'];
            $imgContent1 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movproimg"]["name"]))
        {
            $fileName = basename($_FILES["movproimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movproimg']['tmp_name'];
            $imgContent2 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movwriimg"]["name"]))
        {
            $fileName = basename($_FILES["movwriimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movwriimg']['tmp_name'];
            $imgContent3 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movdopimg"]["name"]))
        {
            $fileName = basename($_FILES["movdopimg"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movdopimg']['tmp_name'];
            $imgContent4 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act1img"]["name"]))
        {
            $fileName = basename($_FILES["act1img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act1img']['tmp_name'];
            $imgContent5 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act2img"]["name"]))
        {
            $fileName = basename($_FILES["act2img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act2img']['tmp_name'];
            $imgContent6 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act3img"]["name"]))
        {
            $fileName = basename($_FILES["act3img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act3img']['tmp_name'];
            $imgContent7 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["act4img"]["name"]))
        {
            $fileName = basename($_FILES["act4img"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['act4img']['tmp_name'];
            $imgContent8 = addslashes(file_get_contents($image));
        }
        if(!empty($_FILES["movpos"]["name"]))
        {
            $fileName = basename($_FILES["movpos"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['movpos']['tmp_name'];
            $imgContent9 = addslashes(file_get_contents($image));
        }

   
        $query =mysqli_query($connection,"UPDATE movie SET movieID='$movieID',movieName='$movieName',movieDes='$movieDes',movieDate='$movieDate',movieType='$movieType',movieGenre='$movieGenre',movieDuration='$movieDuration',movieDirector='$movieDirector',movieDirectorImg='$imgContent1',movieProducer='$movieProducer',movieProducerImg='$imgContent2',movieWriter='$movieWriter',movieWriterImg='$imgContent3',movieDOP='$movieDOP',movieDOPImg='$imgContent4',mAct1='$mAct1',mchar1='$mchar1',mAct1Img='$imgContent5',mAct2='$mAct2',mchar2='$mchar2',mAct2Img='$imgContent6',mAct3='$mAct3',mchar3='$mchar3',mAct3Img='$imgContent7',mAct4='$mAct4',mchar4='$mchar4',mAct4Img='$imgContent8',movieTrailer='$movieTrailer',movieLang='$movieLang', moviePos='$imgContent9' WHERE movieID = '$movieID'");
        header("location: MovieForm.php");
   
    }


//<<------------- Retrieving Details from DATABASE --------------------->>
if(isset($_POST['movie']))
{
    $movieID = $_POST['movieid'];
    $_SESSION['movieid'] = $movieID;
    header("location: MovieDisplay.php");        
    
}

//<<------------- ADDING events Details TO DATABASE --------------------->>

    if(isset($_POST['inserte']))
        {
            $status = 'error';
            if(!empty($_FILES["guest1"]["name"]))
            {
                $fileName = basename($_FILES["guest1"]["name"]);
                $fileType = pathinfo($fileName);
                $image = $_FILES['guest1']['tmp_name'];
                $imgContent1 = addslashes(file_get_contents($image));
            }
           
            if(!empty($_FILES["eventpost"]["name"]))
            {
                $fileName = basename($_FILES["eventpost"]["name"]);
                $fileType = pathinfo($fileName);
                $image = $_FILES['eventpost']['tmp_name'];
                $imgContent4 = addslashes(file_get_contents($image));
            }
        
                $eventID=$_POST['eventid'];
                $eventName=$_POST['eventname'];
                $eventLocation=$_POST['eventloc'];
                $eventCity=$_POST['eventcity'];
                $eventDate=$_POST['eventdate'];
                $eventTime=$_POST['eventtime'];
                $eventOrganiser=$_POST['eventorg'];
                $eventGuest1=$_POST['eventguest1'];
                $eventPrice=$_POST['eventprice'];
                $eventGenre=$_POST['eventgen'];
                $eventDesc=$_POST['eventdesc'];
                $eventTnC=$_POST['eventnc'];
            
                $retval = mysqli_query($connection,"INSERT into event(eventID,eventName,eventCity,eventLocation,eventDate,eventTime,eventOrganiser,eventGuest,eventGuestImg,eventPoster,eventPrice,eventGenre,eventDesc,eventTnC) VALUES('$eventID','$eventName','$eventCity','$eventLocation','$eventDate','$eventTime','$eventOrganiser','$eventGuest1','$imgContent1','$imgContent4','$eventPrice','$eventGenre','$eventDesc','$eventTnC')");
        
        if($retval)
            {
                header("location: EventForm.php");
            }

        }

//<<------------- Checking  Details from DATABASE --------------------->>

        if(isset($_POST['checke']))
    {
        $eventID=$_POST['eventid'];
        $query =mysqli_query($connection,"SELECT * from event where eventID = '$eventID' ");
        $row = mysqli_fetch_array($query);
        $_SESSION['eventID'] = $row['eventID'];
        $_SESSION['eventName'] = $row['eventName'];
        $_SESSION['eventLocation'] = $row['eventLocation'];
        $_SESSION['eventCity']=$row['eventCity'];
        $_SESSION['eventDate'] = $row['eventDate'];
        $_SESSION['eventTime'] = $row['eventTime'];
        $_SESSION['eventOrganiser'] = $row['eventOrganiser'];
        $_SESSION['eventGuest1'] = $row['eventGuest'];       
        $_SESSION['eventPrice'] = $row['eventPrice'];
        $_SESSION['eventGenre'] = $row['eventGenre'];
        $_SESSION['eventDesc'] = $row['eventDesc'];
        $_SESSION['eventTnC'] = $row['eventTnC'];
        header("location: EventForm.php");
    }

    //<<------------- Retrieving Details from DATABASE --------------------->>
if(isset($_POST['event']))
{
    $eventID = $_POST['eventid'];
    $_SESSION['eventid'] = $eventID;
    header("location: EventDisplay.php");        
    
}
 //<<------------- Deleting Details from DATABASE --------------------->>

if(isset($_POST['deletee']))
{
    $eventID=$_POST['eventid'];
    $query =mysqli_query($connection,"DELETE from event where eventID = '$eventID' ");
    header("location: EventForm.php");
    
}

//<<------------- Updating Details from DATABASE --------------------->>

if(isset($_POST['updatee']))
        {
            $status = 'error';
            if(!empty($_FILES["guest1"]["name"]))
            {
                $fileName = basename($_FILES["guest1"]["name"]);
                $fileType = pathinfo($fileName);
                $image = $_FILES['guest1']['tmp_name'];
                $imgContent1 = addslashes(file_get_contents($image));
            }
            if(!empty($_FILES["eventpost"]["name"]))
            {
                $fileName = basename($_FILES["eventpost"]["name"]);
                $fileType = pathinfo($fileName);
                $image = $_FILES['eventpost']['tmp_name'];
                $imgContent4 = addslashes(file_get_contents($image));
            }
        
                $eventID=$_POST['eventid'];
                $eventName=$_POST['eventname'];
                $eventLocation=$_POST['eventloc'];
                $eventCity=$_POST['eventcity'];
                $eventDate=$_POST['eventdate'];
                $eventTime=$_POST['eventtime'];
                $eventOrganiser=$_POST['eventorg'];
                $eventGuest1=$_POST['eventguest1'];
                $eventPrice=$_POST['eventprice'];
                $eventGenre=$_POST['eventgen'];
                $eventDesc=$_POST['eventdesc'];
                $eventTnC=$_POST['eventnc'];

                $query =mysqli_query($connection,"UPDATE event SET eventID='$eventID',eventName='$eventName',eventCity='$eventCity',eventLocation='$eventLocation',eventDate='$eventDate',eventTime='$eventTime',eventOrganiser='$eventOrganiser',eventGuest='$eventGuest1',eventGuestImg='$imgContent1',eventPoster='$imgContent4',eventPrice='$eventPrice',eventGenre='$eventGenre',eventDesc='$eventDesc',eventTnC='$eventTnC' WHERE eventID = '$eventID'");
                header("location: EventForm.php");

        }



//<<------------- ADDING Bevsnack Details TO DATABASE --------------------->>

if(isset($_POST['insertb']))
    {
        $status = 'error';
        if(!empty($_FILES["image"]["name"]))
        {
            $fileName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
        }

        $bevsnackID=$_POST['mealid'];
        $bevsnackName=$_POST['mealname'];
        $bevsnackType=$_POST['Type'];
        $bevsnackDesc=$_POST['mealdesc'];
        $bevsnackPrice=$_POST['mealprice'];
        

        $retval = mysqli_query($connection,"INSERT into bevsnack(bevsnackID,bevsnackName,bevsnackType,bevsnackDesc,bevsnackPrice,bevsnackImg) VALUES('$bevsnackID','$bevsnackName','$bevsnackType','$bevsnackDesc','$bevsnackPrice','$imgContent')");
    
        
        if($retval)
        {
            header("location: BevSnackForm1.php");
        }
    }

//<<------------- Checking  Details from DATABASE --------------------->>
if(isset($_POST['checkb']))
{
    $bevsnackID=$_POST['mealid'];
    $query =mysqli_query($connection,"SELECT * from bevsnack where bevsnackID = '$bevsnackID' ");
    $row = mysqli_fetch_array($query);
    $_SESSION['bevsnackID'] = $row['bevsnackID'];
    $_SESSION['bevsnackName'] = $row['bevsnackName'];
    $_SESSION['bevsnackType'] = $row['bevsnackType'];
    $_SESSION['bevsnackDesc'] = $row['bevsnackDesc'];
    $_SESSION['bevsnackPrice'] = $row['bevsnackPrice'];
    header("location: BevSnackForm1.php");
}

//<<------------- Deleting Details from DATABASE --------------------->>

if(isset($_POST['deleteb']))
{
    $bevsnackID=$_POST['mealid'];
    $query =mysqli_query($connection,"DELETE from bevsnack where bevsnackID = '$bevsnackID' ");
    header("location: BevSnackForm1.php");
    
}
   
//<<------------- Updating Details from DATABASE --------------------->>

if(isset($_POST['updateb']))
{
    $bevsnackID=$_POST['mealid'];
    $bevsnackName=$_POST['mealname'];
    $bevsnackType=$_POST['Type'];
    $bevsnackDesc=$_POST['mealdesc'];
    $bevsnackPrice=$_POST['mealprice'];
    
    $status = 'error';
    if(!empty($_FILES["image"]["name"]))
    {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName);
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    }

    $query =mysqli_query($connection,"UPDATE bevsnack SET bevsnackID='$bevsnackID',bevsnackName='$bevsnackName',bevsnackType='$bevsnackType',bevsnackDesc='$bevsnackDesc',bevsnackPrice='$bevsnackPrice',bevsnackImg='$imgContent' WHERE bevsnackID = '$bevsnackID'");
    header("location: BevSnackForm1.php");
}


//<<------------- ADDING Admin Details TO DATABASE --------------------->>

if(isset($_POST['signupa']))
        {
        
        $user=$_POST['uname'];
        $password=$_POST['psw'];
        $repass = $_POST['repsw'];
   
        $auth = substr($user,-17);
        
        if($auth == 'reservemyshow.com' && $password == $repass)
        {    
            $retval = mysqli_query($connection,"INSERT into admin(email, password) VALUES('$user', '$password')");
            header("location:AdminSign-Log.php");
        }
        
        else
        {
            echo'
            <script>
            alert("Wrong credentials! ");
            location.href = "AdminSign-Log.php"
            </script>';
           
        }
        }

//<<------------- CHECKING Admin LOGIN DETAILS from DATABASE --------------------->>

if(isset($_POST['logina']))
{
    $email = $_POST['uname'];
    $password=$_POST['psw'];
    $check= mysqli_query($connection,"SELECT * from admin WHERE email='$email'");
    $row = mysqli_fetch_array($check);
    if($row['password'] == $password)
        {
            session_start();
            $_SESSION["loggedin"] = true;
            header("location: Admin DB.html");
        }
        else
        {
            echo "User does not Exits";
            echo'
            <script>
            alert("Wrong credentials! ");
            location.href = "AdminSign-Log.php"
            </script>';

        }
}

//<<------------- ADDING user Details TO DATABASE --------------------->>

if(isset($_POST['signup']))
{
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $phone=$_POST['phone'];

    $retval = mysqli_query($connection,"INSERT into user(Name,Email,Password,Phone) VALUES('$name','$email','$psw','$phone')");

if($retval)
{
    header("location: HomePage.php");
    
}
}

//<<------------- CHECKING User LOGIN DETAILS from DATABASE --------------------->>

if(isset($_POST['login']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['psw'];
    $check= mysqli_query($connection,"SELECT * from user WHERE Name='$uname' and Password='$pass'");
    $row= mysqli_fetch_array($check);
    if($check)
        {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $row['Name'];
            header("location: Home Page.php");
           
        }
        else
        {
            echo "User does not Exits";
        }
}




/*
//<<------------- ADDING MovieBooking Details TO DATABASE --------------------->>

if(isset($_POST['insert']))
        {
        
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
      
        $retval = mysqli_query($connection,"INSERT into () VALUES()");

        if($retval)
            {
                header("location: .php");
            }

        }


*/
//<<------------- ADDING PassBooking Details TO DATABASE --------------------->>
if(isset($_POST['passdet']))
        {
        
        $eventr = $_SESSION['eventid'];
        $query =mysqli_query($connection,"SELECT * from event where eventID = '$eventr'");
        $row1 = mysqli_fetch_array($query);
        
        $passID=$_POST['ticketpass'];
        $userID=$_SESSION['username'];
        $eventID=$row1['eventID'];
        $eventName=$row1['eventName'];
        $eventCity=$row1['eventCity'];
        $eventDate=$row1['eventDate'];
        $eventTime=$row1['eventTime'];
        $eventPrice=$row1['eventPrice'];
        
        $passID1 = $passID + 1;
        $retval = mysqli_query($connection,"INSERT into passbooking(passID,userID,eventID,eventName,eventCity,eventDate,eventTime,eventPrice) VALUES('$passID1','$userID','$eventID','$eventName','$eventCity','$eventDate','$eventTime','$eventPrice')");

        if($retval)
            {
                header("location: eventpass.php");
            }

        }

/*
//<<------------- ADDING Review Details TO DATABASE --------------------->>

if(isset($_POST['insert']))
        {
        
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
        $=$_POST[''];
      
        $retval = mysqli_query($connection,"INSERT into () VALUES()");

        if($retval)
            {
                header("location: .php");
            }

        }

*/
?>
