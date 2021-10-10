<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CST - Find Tutor </title>

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
                                    <a class="navbar-brand" href="findtutor.php"><img src="assets/images/logo-icon.png" alt="" />CST</a>
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
							<li class="nav-item active">
								<a class="nav-link fa fa-search" href="findtutor.php"> Find a Tutor <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@ll-active">
								<a class="nav-link fa fa-database" href="largelib.php"> Large Library</a>
							</li>
							<li class="nav-item @@seminars-active">
								<a class="nav-link fa fa-laptop" href="tutorials 2.php"> Tutorials</a>
							</li>
							
							
						  <!--<li class="nav-item @@SC-active">
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

<section class="w3l-skill-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p class="fa fa-long-arrow-left">
           <?php $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT picture FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        
       // echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';
    
     ?>
          <a href="login.html">Logout</a> &nbsp; | &nbsp; 
          <img height="50px" src="upload/<?php echo $row['picture']; ?>" title="<?php f_name();?>" alt="" style="border-radius: 90%; border: solid; border-color: dimgrey;">
                     </p>
                     <?php
              }
}
              ?>
    </div>
  </div>
</section>
 <!--  Main banner section -->
 <section class="w3l-main-banner">
   <div class="companies20-content">
     <div class="companies-wrapper">
       <div class="container">
         <div class="banner-item"> </div>
       </div>
     </div>
   </div>
 </section>
 <!--  //Main banner section -->
	  <section class="w3l-subscribe">
  <div class="subscription-infhny">
    <div class="container-fluid">
      <div class="subscription-grids row">
        <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
          <div class="px-lg-5 py-md-0 py-3">
            <div class="header-section">
              <h3>Important <span>Note!</span></h3>
              <p class="mt-3"><i>Do ensure you're entering the correct course title and if no result found, try entering the course code.</i></p>
            </div>
              <form action="index.php" method="post" class="signin-form mt-lg-5 mt-4">
              <div class="forms-gds">
                <div class="form-input">
                    <input type="text" name="findtutor" placeholder="Enter course title" required="" style=" padding: 17px; width: 100%;">
                </div><br>
                <div class="form-input"><button class="btn btn-primary theme-button">Find tutor</button></div>
              </div>
            </form>
          </div>
        </div>
        <div class="subscription-left forms-25-info col-lg-6 ">

        </div>
      </div>
    </div>
</section>

 
<!-- stats -->

<!-- //stats -->
<!-- //subscribe -->
<section class="w3l-get-started"> </section>
<section class="w3l-testimonials" id="testimonials"> </section>

  <!-- footer -->
  <footer class="w3l-footer-29-main" id="footer">
<div id="footers14-block" class="py-3">
    <div class="container">
        <div class="footers14-bottom text-center">
          
          <div class="copyright mt-1">
            <p>&copy; 2021 CST. All Rights Reserved.| <strong>Developed by Yusuf K Turaki</strong></p>
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