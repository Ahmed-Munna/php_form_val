<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    
        <input type="text" placeholder="Type your name" name="name"><br><br>
        <input type="email" placeholder="Type your email" name="email"><br><br>
        <input type="text" placeholder="Your website website link" name="website"><br><br>
        <textarea name="Comment" placeholder="Comment" cols="30" rows="5"></textarea>
        <br><br>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">FeMale
        <br><br>
        <input type="submit" name="Submit">
    </form>






    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $name    =     valid($_POST["name"]);
        $email   =     valid($_POST["email"]);
        $website =     valid($_POST["website"]);
        $Comment =     valid($_POST["Comment"]);
        $gender  =     valid($_POST["gender"]);

        // $name  = stripslashes($name);
        // $email = stripslashes($email);
        // $website = stripslashes($website);
        // $Comment = stripslashes($Comment);
        // $gender = stripslashes($gender);

        // $name  = htmlspecialchars($name);
        // $email = htmlspecialchars($email);
        // $website = htmlspecialchars($website);
        // $Comment = htmlspecialchars($Comment);
        // $gender = htmlspecialchars($gender);

        // $name    = trim($name);
        // $email   = trim($email);
        // $website = trim($website);
        // $Comment = trim($Comment);
        // $gender  = trim($gender);


        echo $name,'<br>';
        echo $email,'<br>'; 
        echo $website,'<br>';  
        echo $gender,'<br>';
        echo $Comment,'<br>'; 
        
    }
    function valid($sequer){
        $sequer = htmlspecialchars($sequer);
        $sequer = trim($sequer);
        $sequer = stripslashes($sequer);
        return $sequer;
    }

    ?>






</body>
</html>