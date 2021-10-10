
<?php
// Start the session

session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <title></title>
    </head>
    <body>
        <?php

        
    $_SESSION['phone'] = ($_POST['phone']);
    $phon = $_POST['phone'];
    $pword = $_POST['password'];
    
    include 'connectDB.php';
    
    $sql = "SELECT * FROM login WHERE phone= '$phon' AND password= '$pword'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    
    echo '<div class="">
          
        </div> <br><br><br>
        <center><image src="assets/images/tenor.gif" height="60%" width="" /></center>
        ';
        header( 'refresh:5;url=findtutor.php' );
  }
 else {
   
    
      echo '<div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
          <strong>Sorry!</strong> User not found.
        </div> <br><br><br>
        <center><image src="assets/images/tenor2.gif" height="80%" /></center>
        ';
        header( 'refresh:5;url=login.html' );
     

    
}
    $conn->close();
       
?>

    </body>
</html>


