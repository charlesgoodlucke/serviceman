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
        
        //$phone = $_SESSION["phone"];
    $ft = $_POST['findtutor'];
    include 'connectDB.php';
    
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE c_title LIKE '%{$ft}%' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['f_name']. " " .$row['l_name'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  
  
        ?>
    </body>
</html>
