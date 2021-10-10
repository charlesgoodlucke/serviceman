

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

        $phone = $_SESSION["phone"];
        
      include 'connectDB.php';
        
       
        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
        $img=$_FILES["image"]["name"];


       // $conn->query($sql);
        $sql = "UPDATE profile SET picture ='$img' WHERE phone = '$phone' ";

        $conn->query($sql);
        echo "<script>alert('Successfully Updated!!!'); window.location='profile.php'</script>";
?>

        </body>
</html>
