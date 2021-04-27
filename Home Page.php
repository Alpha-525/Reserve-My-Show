<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html lang="en">
    <head>
      <meta name='viewport', content='width=device-width', initial-scale='1.0'>
      <title>Reserve My Show (Book tickets online)</title>
      <link rel = "stylesheet" href="Home Page.css">
      <script src="https://kit.fontawesome.com/ec8d4bdaaf.js" crossorigin="anonymous"></script>
      <script>
        function openNav() {
          document.getElementById("myNav").style.width = "100%";
        }
        
        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
        }
        </script>
    </head>
    <body>
        <div class="navbar">
          
            <i class="fas fa-bars" onclick = "openNav()" style = "color: white;cursor: pointer; margin-top:10px; margin-left: 10px;"></i>
            <p style="color: white; display: inline-block; margin-left: 30px;"><i class="fas fa-user">&nbsp;&nbsp; </i>Hi,<span><b><?php echo $_SESSION['username'];?></b></span></p>
            <p class="glow" style="display: inline-block ; color: white; text-align: center; margin-left: 320px; font-size: 20px;">ReserveMyShow</p>
           
            <div id = "myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div style = "color: white;" class="overlay-content">
                <a href="initial.html">HOME</a>
                <a href="About.html">ABOUT US</a>
                <a href="t&c.html">TERMS & CONDITIONS</a>
                <a href="Contact.html">CONTACT US</a>
              </div>
            </div>
       
  

            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

            <div id="id01" class="modal">
              <form class="modal-content animate" action="Form.php" method="POST">
                <div class="container">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <h1>Sign Up</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
                  <label for="username"><b>Create a user name</b></label>
                  <input type="text" placeholder="Enter your name" name="uname" required>

                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>
            
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
            
                  <p>By creating an account you agree to our <a href="t&c.html" style="color:dodgerblue">Terms & Conditions</a>.</p>
            
                  <div class="clearfix">
                    <button type="submit" name="signup" class="signupbtn" style="background-color: darkred; position: relative;">Sign Up</button>
                   </div>
                </div>
              </form>
            </div>
            
            <script>
            
            var modal = document.getElementById('id01');
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script> 
           
           <button onclick="document.getElementById('lid01').style.display='block'" style="width:auto;">Login</button>

           <div id="lid01" class="lmodal">
             
             <form class="modal-content animate" action="Form.php" method="post" style = "width:30%">
               <div>
                 <span onclick="document.getElementById('lid01').style.display='none'" class="lclose" title="Close Modal">&times;</span>
               </div>
               <div class="lcontainer">
                 <h1>Login</h1>
                 <hr>
                 <label for="uname"><b>Username</b></label>
                 <input type="text" placeholder="Enter your Email-ID" name="uname" required>
                 <label for="psw"><b>Password</b></label>
                 <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit" style="background-color: darkred; position: relative; left:10px" name="login" onclick="logout()">Login</button>&nbsp;
                <a style = "color: white;"href="#"onclick="forgot()" style="width:auto; position: absolute; top:120px">Forgot password?</a>
               </div>
             </form>
           </div>
           <script>
            // Get the modal
            var modal1 = document.getElementById('lid01');
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
            }

            function logout(){

              document.getElementByID('lid01').value = "Log Out";
            }
            function forgot(){
              document.getElementById('lid01').style.display='none';
              document.getElementById('fid01').style.display='block';
              document.getElementById('fid01').style.height="80%";

            }
            </script>

<div id="fid01" class="lmodal">
             
  <form class="modal-content animate" action="/action_page.php" method="post" style = "width:30%">
    <div class="imgcontainer">
      <span onclick="document.getElementById('fid01').style.display='none'" class="lclose" title="Close Modal">&times;</span>
    </div>

    <div class="lcontainer">
      <label for="uname"><b>Email-ID</b></label><br><br>
      <input type="text" placeholder="Enter your Email-ID" name="uname" required>
      <button type="submit" style="background-color: darkred;position: relative; left:10px" onclick="sent()">Send Link</button>
    
    </div>
  </form>
  <script>
    function sent(){
      alert("Check your email for the link!");
     
    }
    var modal2 = document.getElementById('fid01');
     window.onclick = function(event) {
                if (event.target == modal2) {
                    modal2.style.display = "none";
                }
            }
  </script>
</div>
</div>

        
        <div class = "row ">
          <div class = "column ">
           <img src = "http://localhost/Project/wp4016022.jpg" alt = "Loading.... "style="height: 100%; width: 100%;" >
           <button class = "btn button"><b><a href="MoviesCarasoul.php" style="color: black; text-decoration: none;">Book Tickets</a></b></button>
         </div>
         <div class = "column">
           <img class = "img" src = "http://localhost/Project/photo-1518890569493-668df9a00266.jpeg" alt = "Loading...."style="height: 100%; width: 100%;">
           <button class = "btn button"><b><a href="EventCarousel.php" style="color: black; text-decoration: none;">Book Tickets</a></b></button>
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