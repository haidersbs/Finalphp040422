<?php

if(file_exists(dirname (__FILE__)."./config.php"))
    require_once(dirname (__FILE__)."./config.php");


// if($mama){
//     echo "yes";
// }

            $emailaddress = isset( $_POST['email']) ?  $_POST['email'] : NULL;
            $password = isset( $_POST['password']) ?  $_POST['password'] : NULL;

            if(isset($_POST['submit'])){

                $kaka = "INSERT INTO student(email,pass) VALUES ('$emailaddress','$password')";

                if(mysqli_query($mama,$kaka)){
                    echo "thikmoto joma hoise";
                }else{
                    echo "hoyni";
                }
                mysqli_close($mama);


                if($emailaddress == NULL){
                    $emaileror = "age email den";
                }

                if($password == NULL){
                    $passworderror = "pass not match";
                }


            }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP PAGE</title>
</head>
<body>

<form action="" method="POST">
        <input type="email" name="email"><br>
        <?php
            if(isset( $emaileror)){
                echo "<span>". $emaileror . "</span>"."<br>";
            }
        
        
        ?>
        <input type="password" name="password"><br>

       

       <?php
       if(isset($passworderror)){
           echo "<span>" .$passworderror. " </span>" ."<br>";
       }
       
       ?>
      
        <input type="submit" name="submit">
</form>
    
</body>
</html>