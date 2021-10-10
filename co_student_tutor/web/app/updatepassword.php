<?php 

session_start();

?>

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
        
        <style>
            
            body{
                background-color: white;
            } 
            
        .alert {
          padding: 20px;
          background-color: #f44336;
          color: white;
        }
        .alertgreen {
          padding: 20px;
          background-color: green;
          color: white;
        }

        .closebtn {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
        }

        .closebtn:hover {
          color: black;
        }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        $phone = $_SESSION["phone"];
    $old = $_POST['oldpword'];
    
    include 'connectDB.php';
    
    $sql = "SELECT * FROM login WHERE phone= '$phone' AND password= '$old'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    
         $new = $_POST['newpword'];
        
        
        
        include 'connectDB.php';
        
    
        $sql1 = "UPDATE login SET password='$new' WHERE phone='$phone' AND password='$old'";

        if ($conn->query($sql1) === TRUE) {
            
          echo '<div class="alertgreen">
          <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
          <strong>Great!</strong> Your password has been changed.
        </div> <br><br><br>
        <center><image src="assets/images/tenor.gif" height="60%" width="" /></center>
        ';
        header( 'refresh:5;url=login.html' );
        } else {
                    echo '<div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
                    <strong>Sorry!</strong> wrong password supplied.
                  </div> <br><br><br>
                  <center><image src="assets/images/tenor2.gif" height="40%" width="40%"  /></center>
                  ';
                  header( 'refresh:5;url=profile.php' );
        }

        
    
    
    
}
else {
                    echo '<div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
                    <strong>Sorry!</strong>wrong password supplied.
                  </div> <br><br><br>
                  <center><image src="assets/images/tenor2.gif" height="40%" width="40%" /></center>
                  ';
                  header( 'refresh:5;url=profile.php' );
        }
        
        $conn->close();
        ?>
    </body>
</html>
