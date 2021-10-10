<?php
session_start();
//$_SESSION['id'] = ($_GET['id']);
$id = $_SESSION['id'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CST - Video</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
	   <link rel="apple-touch-icon" sizes="76x76" href="assets/images/logo-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/logo-icon.png">
  </head>
  <body>
<!-- header -->
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
					<a class="navbar-brand" href="index.html"><img src="assets/images/logo-icon.png" alt="" />CST</a>
					<!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.html">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item @@ft-active">
								<a class="nav-link fa fa-search" href="findtutor.php"> Find a Tutor <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@ll-active">
								<a class="nav-link fa fa-database" href="largelib.php"> Large Library</a>
							</li>
							<li class="nav-item @@tutorial-active">
								<a class="nav-link fa fa-laptop" href="tutorials 2.php"> Tutorials</a>
							</li>
							
						  <!--<li class="nav-item active">
								<a class="nav-link fa fa-newspaper-o" href="news.html"> News</a>
							</li>-->
							<li class="nav-item @@SC-active">
								<a class="nav-link fa fa-user-circle" href="profile.php"> Profile</a>
							</li>
						</ul>
						<div class="form-inline ml-lg-3">
							<a href="givetutorial.php" class="btn btn-primary theme-button">Give a Tutorial</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- //header -->
<!-- breadcrum -->
<section class="w3l-skill-breadcrum">
  <div class="breadcrum">
    <div class="container">
       <p class="fa fa-home"><a href="findtutor.php">Home</a> &nbsp; | &nbsp; <!--<p class="fa fa-long-arrow-left"><a href="news.html">Back</a></p>-->
    </div>
  </div>
</section>
<!-- // breadcrum -->
<section class="w3l-blog-single pt-5">
  <!-- galleries -->
  <section class="w3l-galleries-9">
    <div class="main-w3 py-3">
      <div class="container">
        <div class="gallery-img">
          <div class="blog-single-header-section text-left mb-4">
              <h3><?php c_title(); ?></h3>
              <p class="mt-2"><?php date_created(); ?> - <a href="#"> <?php name();?></a></p>
          </div>
            <?php //$i_d = $_SESSION["id"];
    include 'connectDB.php';
    
    $sql = "SELECT t_content FROM give_tutorial WHERE id= '$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        
       // echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';
    
     ?>
          <video class="img-fluid" alt="" conntrols/>
			<source src="upload/<?php echo $row['t_content']; ?>" type="video/mp4">
			<source src="ADS.ogg" type="video/ogg">
			</video>
            <?php
              }
}
              ?>
        </div>
      </div>
    </div>
  </section>
  <!-- //galleries -->

  <!-- text-style-17 -->
  <section class="w3l-text-style-17">
    <div class="text-style-17_sur py-3">
      <div class="container">
        <div class="text-style-17-tp">
          <div class="text-style-17-top_sur">
            <div class="text-top-left1_sur">
              <h5>Course Description
                </h5>
                <p><?php t_des();?> </p>
            </div>
            <div class="text-top-left2_sur">
              <!--<div class="form-inline ml-lg-3">
							<a href="signup.html" class="btn btn-primary theme-button" style="margin-left: 26%;">DOWNLOAD</a>
					  </div>-->
            </div>
          
      </div>
    </div>
  </section>
  <!-- //text-style-17 -->


  <!-- /content-5-->
  <div class="w3l-content-5">
    <div class="content py-3">
      <div class="container"> </div>
    </div>
  </div>
  <!-- //content-5 -->

  <section class="w3l-content-3">
    <div class="grid py-3 background">
      <div class="container"> </div>
    </div>
  </section>

  <section class="w3l-text-18"> </section>

  <!-- text-styles-31 -->
  <section class="w3l-text-styles-31">
    <div class="text-styles-31_sur py-3">
      <div class="container">
        <div class="text-styles-top-31 mt-5">
          <h3>Comments</h3>
          
          <?php
        // put your code here
        
        //$phone = $_SESSION["phone"];
    //$ft = $_POST['findtutor'];
    
    
    //$phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM comment WHERE com_id='$id' ";
    $result = $conn->query($sql);
?>
      <?php 
         if ($result->num_rows > 0) {
    $comments = array();
    while ($coment =  mysqli_fetch_assoc($result))
    {
        $comments[] = $coment;
    }
    foreach ($comments as $coment)
    {
?>
          <div class="comments">
            <div class="media mt-3">
                
              <div class="img-circle">
                  <img src="assets/images/chat.png" class="img-fluid" alt="...">
              </div>
              <div class="media-body">
                  
                <a href="#" class="name mt-0 mb-2 d-inline-block"><?php echo $coment['stud_name']; ?></a> <br>
                <ul class="time-rply mb-2">
                  <li><?php echo $coment['date_commented']; ?>
                    <i>|</i>
                  </li>
                  <li> </li>
                </ul>
                <?php echo $coment['stud_comment']; ?>
              </div>
            </div>

            <?php
    }
         }
         else
         {
             echo'<div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display= "none"";">&times;</span> 
          <strong>NO</strong> COMMENTS YET.
        </div>     <br><br><br>';
         }
?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /text-styles-31 -->

  <!-- form 29 block -->
  <section class="w3l-forms-29 pb-5 mt-4" id="reply">
    <div class="form-29 py-3">
      <div class="container">
        <div class="form-main-cont-29">
          <div class="content-29-form">
            <h3 class="title-cont-foem29">Leave a Comment</h3>
            <form action="comment.php" method="post" class="forms-29-form">
              <div>
                  <input type="text" name="text" placeholder="Name*" required="" value="<?php f_name();?>" readonly>
              </div>
              <!--<div>
                <input type="email" name="email" placeholder="Email*" required="">
              </div>-->
              <div>
                <textarea name="comment" placeholder="Comment*" required=""></textarea>
              </div>
              <div class="text-right">
                <button type="submit" class="theme-button btn btn-primary">Post Comment</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //form 29 block -->
</section>
  <!-- footer -->
  <footer class="w3l-footer-29-main" id="footer">
<div id="footers14-block" class="py-3">
    <div class="container">
        <div class="footers14-bottom text-center">
          
          <div class="copyright mt-1">
            <p>&copy; 2021 CST. All Rights Reserved. | <strong>Developed by Yusuf K Turaki</strong></p>
          </div>
        </div>
      </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->

  </footer>
  <!-- Footer -->

  <!-- jQuery and Bootstrap JS -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->

  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->


  <!-- testimonials owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>

  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for owlcarousel -->
  <!-- //testimonials owlcarousel -->

  <!-- script for courses -->
  <script>
    $(document).ready(function () {
      $('.owl-two').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for courses -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- gallery lightbox -->
  <script src="assets/js/smartphoto.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sm = new SmartPhoto(".js-img-viwer", {
        showAnimation: false
      });
      // sm.destroy();
    });
  </script>
  <!-- gallery lightbox -->

  </body>

  </html>
  
  <?php
  function c_title()
  {
    $id = $_SESSION["id"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE id= '$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['c_title'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  
  function date_created()
  {
    $id = $_SESSION["id"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE id= '$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['date_created'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  function name()
  {
    $id = $_SESSION["id"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE id= '$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['name'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  function t_des()
  {
    $id = $_SESSION["id"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE id= '$id' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['tutorial_des'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  
  function f_name()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM profile WHERE phone= '$phone' ";
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
       
  }
  
  ?>