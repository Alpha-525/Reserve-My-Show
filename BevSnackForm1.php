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
    <div style=" background-image: url(snacks-90a.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <form action = "Form.php" method="POST" enctype="multipart/form-data">
            <label for = "mealid">Meal ID:</label><br>
            <input type = "text" id = "mealid" name = "mealid" placeholder="Enter the ID" value="<?php echo $_SESSION['bevsnackID']?>">&nbsp;
            <button type="submit" name="checkb">Check</button><br><br>
            <label for = "mealname">Meal Name:</label><br>
            <input type = "text" id = "mealname" name = "mealname" placeholder="Enter the meal name" value="<?php echo $_SESSION['bevsnackName']?>" ></input><br><br>
            <label for = "mealtype">Meal Type:</label><br>
            <input type = "radio" id = "veg" name = "Type" value="Veg"<?php echo $_SESSION['bevsnackType'] == "Veg" ? print 'checked = "checked"': '';?>><img src="http://localhost/Project/Bev&Snack/veg.png" style="height:15px;"><label for = "veg">Veg</label>
            <input type = "radio" id = "nonveg" name = "Type" value="Non Veg"<?php echo $_SESSION['bevsnackType'] == "Non Veg" ? print 'checked = "checked"': '';?> ><img src="http://localhost/Project/Bev&Snack/nonveg.png" style="height:15px;"/><label for = "nonveg">Non Veg</label><br><br>
            <label for = "mealdesc">Meal Description:</label><br>
            <input type="text" id = "mealdesc" name = "mealdesc" placeholder = "Enter the description" style = "height: 50px" value="<?php echo $_SESSION['bevsnackDesc']?>" ><br><br>
            <label for = "mealprice">Meal Price:(Incl tax)</label><br>
            <input type = "text" id = "mealprice" name = "mealprice" placeholder="Enter the meal price" value="<?php echo $_SESSION['bevsnackPrice']?>"><br><br>
            <label for = "mealpos">Meal Image:</label><br>
            <input type = "file" id = "mealpos" name = "image" placeholder="Enter the meal image"value=""><br><br>
            <div style="margin-left: 450px;"> 
                <button type="submit" name="insertb">Insert</button>&nbsp;
                <button type="submit" name="updateb">Update</button>&nbsp;
                <button type="submit" name="deleteb">Delete</button>
            </div>
            <br>
        </form>
    </div>
</body>
</html>
