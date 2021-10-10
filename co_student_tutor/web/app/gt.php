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
        $csc = $_POST['cc'];
        $cst = $_POST['ct'];
        $csl = $_POST['cl'];
        $csd = $_POST['dpt'];
        $cstt = $_POST['ctt'];
        //$cscp = $_POST['cp'];
        //$csctc = $_POST['ctc'];
        $des = $_POST['t_des'];
        $uname = $_POST['name'];
        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
        $img=$_FILES["image"]["name"];
        move_uploaded_file($_FILES["content"]["tmp_name"],"upload/" . $_FILES["content"]["name"]);			
        $cont=$_FILES["content"]["name"];
        
        
        date_default_timezone_set("Africa/Lagos");
        $today = date("F j, Y, g:i a");
        
        include 'connectDB.php';
        
        $sql = "INSERT INTO give_tutorial (name, c_code, c_title, c_level, c_dpartment, tutorial_type, t_cover_page, t_content, tutorial_des, date_created, phone_no)
    VALUES ('$uname', '$csc', '$cst', '$csl', '$csd', '$cstt', '$img', '$cont', '$des', '$today', '$phone')";
   //$sql3 = "INSERT INTO profile (f_name, l_name, department, level, email, matric_no, phone, picture)
    //VALUES ('$fname', '$lname', '', '', '', '$matno', '$phon', '')";
        
        
        
       
        //echo "<script>alert('Successfully Updated!!!'); window.location='profile.php'</script>";

    if ($conn->query($sql) === TRUE) {
        
         
        
      echo '<div class="alertgreen">
          <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
          <strong>Tutorial</strong> created successfully.
        </div> <br><br><br>
        <center><image src="assets/images/tenor.gif" height="60%" width="" /></center>
        ';
      
      
        header( 'refresh:5;url=findtutor.php' );
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      
    }

    

    $conn->close();
        
        ?>
    </body>
</html>
