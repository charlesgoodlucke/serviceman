<?php

session_start();
?>

<!doctype html>
<html lang="en">
  <head>
	  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CST - GT </title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	  
	  <!--FOR FULL SCREEN FORM-->
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  <!--END-->

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
	  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/logo-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/logo-icon.png">
	  
	  <style>
* {
  box-sizing: border-box;
}

body {
  
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: darkorange;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: black;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: darkorange;
}
</style>
	  
  </head>
  <body>
<!-- header -->
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
					<a class="navbar-brand" href="index.php"><img src="assets/images/logo-icon.png" alt="" />CST</a>
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
							<li class="nav-item @@-active">
								<a class="nav-link fa fa-search" href="findtutor.html"> Find a Tutor <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@-active">
								<a class="nav-link fa fa-database" href="largelib.html"> Large Library</a>
							</li>
							<li class="nav-item @@seminars-active">
								<a class="nav-link fa fa-laptop" href="tutorials.html"> Tutorials</a>
							</li>
							
							
						  <!--<li class="nav-item @@SC-active">
								<a class="nav-link fa fa-newspaper-o" href="news.html"> News</a>
							</li>-->
							<li class="nav-item @@SC-active">
							  <a class="nav-link fa fa-user-circle" href="profile.html"> Profile</a>
							</li>
						</ul>
						<div class="form-inline ml-lg-3">
							<!--<a href="signup.html" class="btn btn-primary theme-button">Give a Tutorial</a>-->
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
      <p class="fa fa-home"><a href="index.php">Home</a> &nbsp; | &nbsp; <!--<p class="fa fa-plus-circle"><a href="tutorials 2.html">ADD A BOOK</a></p>-->
		  <button class="openBtn fa fa-key " style="color: black; border: none;" onclick="openSearch()"> Change Password</button>
    </div>
  </div>
</section>
<!-- //breadcrum -->
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
    
</section>

	
 <form id="regForm" action="editpro.php">
  <h1>Edit Profile</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Bio:
      <p><input placeholder="First Name" oninput="this.className = ''" name="fname" value="<?php displayfname();?>"></p>
      <p><input placeholder="Last Name" oninput="this.className = ''" name="lname" value="<?php displaylname(); ?>"></p>
  </div>
  <div class="tab">Bio
      <p><input placeholder="Level" oninput="this.className = ''" name="level" value="<?php displaylevel(); ?>"></p>
	  
      <p><input placeholder="Department" oninput="this.className = ''" name="udpartment" value="<?php displaydepart(); ?>"></p>
  </div>
  <div class="tab">Bio
      <p><input type="email" placeholder="Email" oninput="this.className = ''" name="uemail" value="<?php displayemail(); ?>"></p>
      <p><input placeholder="Matric No." oninput="this.className = ''" name="umatricno" value="<?php displaymatno(); ?>"></p>
      <p><input placeholder="Phone" oninput="this.className = ''" name="uphone" value="<?php displayphone(); ?>"></p>
	  
  </div>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
     
  </div>
</form>
<!-- CHANGE PASSWORD -->
		  
		  <div id="myOverlay" class="overlay">
		  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
		  <div class="overlay-content">
			
	<div class="container py-5 w3l-contacts-12" id="contact">
		<div class="contacts12-main py-md-3">
			
			<form action="/A" method="post" class="">
				<div class="main-input">
					
					<br><br>
					
					<input type="password" name="pword" placeholder="Old Password" class="contact-input" required="" />
					<input type="password" name="pword1" placeholder="New Password" class="contact-input" required="" />
					
					<br />
				</div>
				<div class="text-right">
					<button class="btn-primary btn theme-button" style="background-color: darkgoldenrod;">Change</button>
				</div>
			</form>
		</div>
	</div>
	

  </div>
</div>

<!-- //END -->
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
	  
	  <!--Full screen script-->
	  <script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
	  
	  <!--end-->
	  
	  <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
	  
	  <!--Full screen script-->
	  <script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
	  
	  <!--end-->
	  
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
  
  //this function displays fname
  function displayfname()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT f_name FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['f_name'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  
  function displaylname()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT l_name FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['l_name'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  function displaylevel()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT level FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['level'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  function displaydepart()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT department FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['department'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  function displayemail()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT email FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['email'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  function displaymatno()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT matric_no FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['matric_no'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  function displayphone()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT phone FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    
    while($row = $result->fetch_assoc()) {
        
        echo "" .$row['phone'];
    }
    
        
  }
 else {
   
    
      echo 'None';
        
     

    
}
    $conn->close();
       
  }
  
  
  
  ?>