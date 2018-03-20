<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
                <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
            
         $resultSql = new mysqli("localhost","root","","imagedatabase");
        if($resultSql->connect_errno){
            echo "error connecting to database";
        } else{ 
            echo "Connected To Database";}
        
            $query1= "SELECT password FROM `login` WHERE username = '$username' and password = '$password'";
            
            if(mysqli_num_rows($resultSql->query($query1))==1){echo $username.", You Have Successfully Logged In!";}
         else{ echo" Incorrect Username or Password";
         }
         $resultSql->close();
        
        ?>
    </body>
</html>
