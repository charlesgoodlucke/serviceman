
<?php 

session_start();

?>
<!DOCTYPE html>

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
         $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $lvl = $_POST['level'];
        $dpt = $_POST['udpartment'];
        $em = $_POST['uemail'];
        
        
        
        include 'connectDB.php';
        
    
        $sql = "UPDATE profile SET f_name='$fn', l_name='$ln', department='$dpt', level='$lvl', email='$em' WHERE phone='$phone'";
        $sql1 = "UPDATE login SET first_name='$fn', last_name='$ln' WHERE phone='$phone'";

        if ($conn->query($sql) && $conn->query($sql1) === TRUE) {
            
          echo '<div class="alertgreen">
          <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
          <strong>Great!</strong> Your profile has been updated.
        </div> <br><br><br>
        <center><image src="assets/images/tenor.gif" height="60%" width="" /></center>
        ';
        header( 'refresh:5;url=profile.php' );
        } else {
                    echo '<div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
                    <strong>Sorry!</strong> something went wrong, please try again.
                  </div> <br><br><br>
                  <center><image src="assets/images/tenor2.gif" height="40%" width="40%" /></center>
                  ';
                  header( 'refresh:5;url=editprofile.php' );
        }

        
    $conn->close();
         
       
       
        
        
        ?>
    </body>
</html>

