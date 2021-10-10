
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

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $matno = $_POST['mat_no'];
    $phon = $_POST['phone'];
    $pword = $_POST['password'];
    
    include 'connectDB.php';
    
    $sql = "SELECT first_name, last_name, matric_no, phone FROM login WHERE phone= '$phon'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    
    echo'<div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display= none;">&times;</span> 
          <strong>Sorry!</strong> User already exist.
        </div>     <br><br><br>
        
        ';
        header( 'refresh:5;url=signup.html' );
  }
 else {
   $sql2 = "INSERT INTO login (first_name, last_name, matric_no, phone, password)
    VALUES ('$fname', '$lname', '$matno', '$phon', '$pword')";
   $sql3 = "INSERT INTO profile (f_name, l_name, department, level, email, matric_no, phone, picture)
    VALUES ('$fname', '$lname', '', '', '', '$matno', '$phon', '')";

    if ($conn->query($sql2) && $conn->query($sql3) === TRUE) {
      echo '<div class="alertgreen">
          <span class="closebtn" onclick="this.parentElement.style.display= "none";>&times;</span> 
          <strong>Congratulation!</strong> Your account has been created.
        </div> <br><br><br>
        <center><image src="assets/images/tenor.gif" height="60%" width="" /></center>
        ';
        header( 'refresh:5;url=login.html' );
    } else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
      echo "Error: " . $sql3 . "<br>" . $conn->error;
    }

    
}
    $conn->close();
       
?>

    </body>
</html>


