
<?php
session_start();
$_SESSION['id'] = ($_GET['id']);
$id = $_SESSION['id'];
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
        
        
        //$type = $_GET['tutorial_type'];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE id= '$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $t_id = $row['id'];
        $c_t = $row['c_title'];
        $t = $row['name'];
        $type = $row['tutorial_type'];
        
        // put your code here
        $phone = $_SESSION["phone"];
        //$csc = $_POST['cc'];
        
        //$uname = $_POST['name'];
        
        date_default_timezone_set("Africa/Lagos");
        $today = date("F j, Y, g:i a");
        
        //include 'connectDB.php';
        
    /*   $sql1 = "INSERT INTO take_tutorial (c_title, tutor, t_type, phone, tutorial_id)
    VALUES ('$c_t', '$t', '$type', '$today', '$phone', '$t_id')";
   
        $conn->query($sql1);*/
            
            
               if ($type == 'Video')
           {
                    
               header('Location: video.php');
           }
           else if ($type == 'Audio')
           {
               
               header('Location: audio.php');
           }
        else {
               header('Location: one.php');
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
