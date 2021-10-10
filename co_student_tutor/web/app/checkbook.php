<?php
session_start();
$_SESSION['book_id'] = ($_GET['book_id']);
$bookid = $_SESSION['book_id'];

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
        //$id = $_SESSION["id"];
        //$phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM library WHERE book_id= '$bookid' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        $bk = $row['book'];
        //$tt = $row['name'];
        
       
        
        
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
        
        header('Content-type: application/pdf'); 
        header('Content-Disposition: inline; filename=upload/"' .$bk. '"'); 
        header('Content-Transfer-Encoding: binary'); 
        header('Accept-Ranges: bytes'); 
        @readfile('upload/'.$bk);  

   
        
        ?>
       
    </body>
</html>





