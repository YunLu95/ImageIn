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
            
         $resultSql = new mysqli("localhost","root","","ImageIn");
        if($resultSql->connect_errno){
            echo "error connecting to database <br>";
        } else{ 
            echo "Connected to Database <br>";}
        
         $query1 = "INSERT INTO Login(Username, Password) VALUES ('$username','$password')";   
         
         if($resultSql->query($query1)==TRUE){echo $username.", You Have Successfully Registered!";}
         else{ echo $username." Already Exists";}
         
         $resultSql->close();
         ?>
       </body>
</html>
