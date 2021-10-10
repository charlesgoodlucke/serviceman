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
    </head>
    <body>
        <?php
        // put your code here
        $id = $_SESSION["id"];
        $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE id= '$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        $ct = $row['c_title'];
        $tt = $row['name'];
        
        $sql1 = "SELECT * FROM profile WHERE phone= '$phone' ";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0)
        {
            while($row1 = $result1->fetch_assoc()) {
                
                $sn = $row1['f_name'] . " " . $row1['l_name'];
                
            }
            
            
        $comment = $_POST['comment'];
        
        
        date_default_timezone_set("Africa/Lagos");
        $today = date("F j, Y, g:i a");
        
        include 'connectDB.php';
        
        $sql2 = "INSERT INTO comment (c_title, tutor, stud_name, date_commented, stud_comment, com_id)
    VALUES ('$ct', '$tt', '$sn', '$today', '$comment', '$id')";
   //$sql3 = "INSERT INTO profile (f_name, l_name, department, level, email, matric_no, phone, picture)
    //VALUES ('$fname', '$lname', '', '', '', '$matno', '$phon', '')";
        
       
        
        
        


       

    if ($conn->query($sql2) === TRUE) {
      echo '<div class="alertgreen">
          
        </div> <br><br><br>
        <center><image src="assets/images/tenor.gif" height="60%" width="" /></center>
        ';
        header( 'refresh:5;url=video.php' );
    } else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
      
    }

    
        }
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
        
        

   
        
        ?>
    </body>
</html>
