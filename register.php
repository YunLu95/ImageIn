<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
                <meta http-equiv="refresh" content="2;url=index.html">
        <title></title>
    </head>
    <body>
        <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        
         $resultSql = new mysqli("localhost","root","","imagedatabase");
        if($resultSql->connect_errno){
            echo "error connecting to database <br>";
        } else{ 
            echo "Connected to Database <br>";}
        
         $query1 = "INSERT INTO Login(Username, Password, Email) VALUES ('$username','$password', '$email')";   
         
         if($resultSql->query($query1)==TRUE){
         echo $username.", <h2>You Have Successfully Registered!</h2>";}
         else{ echo $username." Already Exists";}
         
         $resultSql->close();
         ?>
        
                <h2 align="center">Redirecting Back to Login...</h2>

       </body>
</html>
