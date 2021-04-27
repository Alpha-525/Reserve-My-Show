<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html lang="en">
<head>
    <link rel="stylesheet" href="forms.css">
    <meta name='viewport', content='width=device-width', initial-scale='1.0'>
    <style>
        input[type=text],textarea{
            width: 40%;
            padding: 15px;
            margin: 5px 0 22px 5px;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        option{
            width:40%;
        }

        button{
        border: none; background-color: darkred; width:100px; height:40px; cursor: pointer; border-radius: 4px; color: white;
        }

    </style>
</head>
<body>
    <div style = "background-image: url(15-155717_16mm-film-reel-photos-background-wallpaper-film.jpg)";>
        <form action = "Form.php" method="POST" enctype="multipart/form-data">
 
            <label for = "movieid">Movie ID:</label><br>
            <input type = "text" id = "movieid" name = "movieid" placeholder = "Enter the ID" value="<?php echo $_SESSION['movieID'];?>">&nbsp;<button name = "checkm">Check</button><br><br>
            <label for = "movname">Movie Name:</label><br>
            <input type = "text" id = "movname" name = "movname" placeholder = "Enter the movie name" value="<?php echo $_SESSION['movieName'];?>" ><br><br>
            <label for = "movdesc">Movie Description:</label><br>
            <input type="text" id = "movdesc" name = "movdesc" placeholder = "Enter the movie description" style="height: 50px;" value="<?php echo $_SESSION['movieDesc'];?>"><br><br>
            <label for = "movdate">Movie Release Date:</label><br>
            <input type = "date" id = "movdate" name = "movdate" placeholder = "Enter the release date" value="<?php echo $_SESSION['movieDate'];?>"><br><br>
            <label for = "movtype">Movie Type:</label><br>
            <input type = "text" id = "movt ype" name = "movtype" placeholder = "Enter the movie type" value="<?php echo $_SESSION['movieType'];?>"><br><br>
            
            <label for = "movgen">Movie Genre:</label><br>
            <select id = "movgen" name = "movgen">
                <option value="Action" <?php if($_SESSION['movieGenre']=="Action") echo 'selected="selected"'; ?>>Action</option>
                <option value="Comedy" <?php if($_SESSION['movieGenre']=="Comedy") echo 'selected="selected"'; ?> >Comedy</option>
                <option value="Romantic"<?php if($_SESSION['movieGenre']=="Romantic") echo 'selected="selected"'; ?> >Romantic</option>
                <option value="Thriller"<?php if($_SESSION['movieGenre']=="Thriller") echo 'selected="selected"'; ?>>Thriller</option>
                <option value="Ficitional"<?php if($_SESSION['movieGenre']=="Fictional") echo 'selected="selected"'; ?>>Fictional</option>
                <option value="Horror"<?php if($_SESSION['movieGenre']=="Horror") echo 'selected="selected"'; ?>>Horror</option>
                <option value="BioPic"<?php if($_SESSION['movieGenre']=="Bio Pic") echo 'selected="selected"'; ?>>Bio Pic</option>
            </select><br><br>

            
            <label for = "movdur">Movie Duration:</label><br>
            <input type = "text" id = "movdur" name = "movdur" placeholder = "Enter the movie duration" value="<?php echo $_SESSION['movieDuration'];?>"><br><br>
            <label for = "movdirec"> Director:</label><br>
            <input type = "text" id = "movdirec" name = "movdirec" placeholder = "Enter the name of the director" value="<?php echo $_SESSION['movieDirector'];?>"><br>
            <input type = "file"  name = "movdirimg" placeholder = "Upload"><br><br>
            
            <label for = "movpro"> Producer:</label><br>
            <input type = "text" id = "movpro" name = "movpro" placeholder = "Enter the name of the producer" value="<?php echo $_SESSION['movieProducer'];?>"><br>
            <input type = "file"  name = "movproimg" placeholder = "Upload"><br><br>
            
            <label for = "writer">Writer:</label><br>
            <input type = "text" id = "writer" name = "movwri" placeholder = "Enter the name of the writer" value="<?php echo $_SESSION['movieWriter'];?>"><br>
            <input type = "file" name = "movwriimg" placeholder = "Upload"><br><br>
          
            <label for ="dp">Director of Photography:</label><br>
            <input type = "text" id = "dp" name = "movdop" placeholder = "Enter the name of the DOP" value="<?php echo $_SESSION['movieDOP'];?>"><br>
            <input type = "file"  name = "movdopimg" placeholder = "Upload"><br><br>
           
            
            
            
            <label>Actor Name:</label><label style="margin-left: 400px;">Character Name:</label><br>
            <input type = "text" id = "movact1" name = "movact1" placeholder = "Enter the name of the actor" value="<?php echo $_SESSION['mAct1'];?>"><input type = "text" id = "char1" name = "char1" placeholder = "Enter the character played" value="<?php echo $_SESSION['mchar1'];?>"> <input type = "file" id = "act1img" name = "act1img" placeholder = "Upload"><br><br>
            <input type = "text" id = "movact2" name = "movact2" placeholder = "Enter the name of the actor" value="<?php echo $_SESSION['mAct2'];?>"><input type = "text" id = "char2" name = "char2" placeholder = "Enter the character played" value="<?php echo $_SESSION['mchar2'];?>"> <input type = "file" id = "act2img" name = "act2img" placeholder = "Upload"><br><br>
            <input type = "text" id = "movact3" name = "movact3" placeholder = "Enter the name of the actor" value="<?php echo $_SESSION['mAct3'];?>"><input type = "text" id = "char3" name = "char3" placeholder = "Enter the character played" value="<?php echo $_SESSION['mchar3'];?>"> <input type = "file" id = "act3img" name = "act3img" placeholder = "Upload"><br><br>
            <input type = "text" id = "movact4" name = "movact4" placeholder = "Enter the name of the actor" value="<?php echo $_SESSION['mAct4'];?>"><input type = "text" id = "char4" name = "char4" placeholder = "Enter the character played" value="<?php echo $_SESSION['mchar4'];?>"> <input type = "file" id = "act4img" name = "act4img" placeholder = "Upload"><br><br>
            <br><br>
        
            <label for = "movtrail">Movie Trailer Link:</label><br>
            <input type = "text" id = "movtrail" name = "movtrail" placeholder = "Enter the link" value="<?php echo $_SESSION['movieTrailer'];?>"><br><br>
            <label for = "movlang">Available in Languages:</label><br>
            <input type = "text" id = "movlang" name = "movlang" placeholder = "Enter the languages" value="<?php echo $_SESSION['movieLang'];?>"><br><br>
            <label for = "movpos">Movie Poster</label><br>
            <input type = "file" id = "movpos" name = "movpos" placeholder = "Upload"><br><br>
            <div style="margin-left: 450px;"> 
                <button id="butt" type="submit" style="border: none; background-color: darkred; width:100px; height:40px; cursor: pointer; border-radius: 4px; color: white;"name="insertm">Insert</button>&nbsp;
                <button id="butt" type="submit" style="border: none; background-color: darkred; width:100px; height:40px; cursor: pointer; border-radius: 4px; color: white;"name="updatem">Update</button>&nbsp;
                <button id="butt" type="submit" style="border: none; background-color: darkred; width:100px; height:40px; cursor: pointer; border-radius: 4px; color: white;"name="deletem">Delete</button>
            </div>
        </form>

    </div>
</body>
</html>
