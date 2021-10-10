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
//        move_uploaded_file($_FILES["cover"]["tmp_name"],"upload/" . $_FILES["cover"]["name"]);			
//        $cp=$_FILES["cover"]["name"];
        move_uploaded_file($_FILES["book"]["tmp_name"],"upload/" . $_FILES["book"]["name"]);			
        $bk=$_FILES["book"]["name"];
        
        
        $des = $_POST['des'];
        $bt = $_POST['title'];
        $auth = $_POST['author'];
        
        date_default_timezone_set("Africa/Lagos");
        $today = date("F j, Y, g:i a");
        
        include 'connectDB.php';
        
        $allowed = array('pdf');
        $ext = pathinfo($bk, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            echo "<script>alert('Only PDF books are allowed'); window.location='largelib.php'</script>";
        }
        else{
            
             $sql = "INSERT INTO library (author, book_title, description, book)
            VALUES ('$auth', '$bt', '$des', '$bk')";

            if ($conn->query($sql) === TRUE) {



              echo "<script>alert('You have added a book!!!'); window.location='largelib.php'</script>";


                header( 'refresh:5;url=findtutor.php' );
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;

            }

            
        }
        
       
    

    $conn->close();
        ?>
    </body>
</html>
