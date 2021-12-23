<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    




    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

        <input type="text" name="name" placeholder="Type your name"><br><br>
        <input type="email" placeholder="Type your email" name="email"><br><br>
        <input type="Password" placeholder="Type your password" name="pass"><br><br>
        <textarea name="comment" placeholder="comment" cols="30" rows="10"></textarea>
        <br><br>
        <input type="radio" value="male" name="gender">Male
        <input type="radio" value="male" name="gender">Female
        <br><br>
        <input type="submit" name="submit">
    </form>



    <?php
    
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name  =   val($_POST["name"]);
            $email  =   val($_POST["email"]);
            $pass  =   val($_POST["pass"]);
            $comment  =   val($_POST["comment"]);
            $gender  =   val($_POST["gender"]);

            echo $name, '<br/>';
            echo $email, '<br/>';
            echo $pass, '<br/>';
            echo $comment, '<br/>';
            echo $gender, '<br/>';
        }
    

        function val($data){
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }



    ?>




</body>
</html>