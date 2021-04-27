<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html lang="en">
<head>
    <meta name='viewport', content='width=device-width', initial-scale='1.0'>
    <style>
        body{
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .div{
            height:550px;
            width:400px;
            background-color: rgb(32, 32, 32);
            padding:10px;
            margin-left: 410px;
            text-align: center;

        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        button {
            background-color: darkred;
            font-size: 15px;
            color: white;
            padding: 14px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            }
        
        .inner{
            text-align: center;
        }

    </style>
    
</head>
<body>
 
    <img class = "img" src = "WhatsApp_Image_2021-03-14_at_7.37.57_PM-removebg-preview.png" style="height: 100px; width:250px; margin-left: auto;
 margin-right: auto; display: block;">

    <div class= "div" id = "form">
        <form action="Form.php" method="POST">
       
        <label id="uname" for="uname"><b>Username</b></label><br>
        <input id="uname1" type="text" placeholder="Enter Username" name="uname"  required><br>
  
        <label id="psd" for="psw"><b>Password</b></label><br>
        <input id="psd1" type="password" placeholder="Enter Password" name="psw" ><br>

        <label id="psdr" style="display: none;" for="psw"><b>Retype the Password</b></label><br>
        <input id="psdr1"style="display: none;"type="password" placeholder="Enter the password again" name="repsw"><br>
          
        <hr><br>
            
            <a id="link" style = "color: white;"href="#">Forgot password?</a></span><br><br>
            <a id="main" style = "color: white;"href="#" onclick="main()">Don't have an account? SignUp!</a></span><br><br>
        
            <button id = "signup" type="submit" name="signupa">Sign Up</button><br><br>
            <a href="Admin DB.html"><button id = "login" type="submit" name="logina" >Login</button></a>
         
        </form>
        
        
         
       </div>
    <script>

        function main(){
            var x = document.getElementById("main").innerHTML;
            
            if(x == "Don't have an account? SignUp!"){
                document.getElementById("uname").innerHTML="Email ID";
                document.getElementById("psd").innerHTML="Password";
                document.getElementById("psdr").style.display ="block";
                document.getElementById("psdr1").style.display = "block";
                document.getElementById("main").innerHTML="Already a user? Log in!";
                document.getElementById("link").style.display="none";
                


            }

            else if( x == "Already a user? Log in!"){
                document.getElementById("uname").innerHTML="Username";
                document.getElementById("psd").innerHTML="Password";
                document.getElementById("psdr").style.display ="none";
                document.getElementById("psdr1").style.display = "none";
                document.getElementById("link").style.display="block";
                document.getElementById("link").innerHTML="Forgot Password?";
                document.getElementById("main").innerHTML="Don't have an account? SignUp!"
            }
           
        }
        
    </script>
</body>
</html>