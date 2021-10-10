<?php
// Start the session

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
	  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CST - Profile </title>

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
		  

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #fbc02d;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #fbc02d;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #fbc02d;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
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
							<li class="nav-item @@-active">
								<a class="nav-link fa fa-search" href="findtutor.php"> Find a Tutor <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@-active">
								<a class="nav-link fa fa-database" href="largelib.php"> Large Library</a>
							</li>
							<li class="nav-item @@seminars-active">
                                                            <a class="nav-link fa fa-laptop" href="tutorials 2.php"> Tutorials</a>
							</li>
							
							
						  <!--<li class="nav-item @@SC-active">
								<a class="nav-link fa fa-newspaper-o" href="news.html"> News</a>
							</li>-->
							<li class="nav-item active">
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
           <p class="fa fa-home"><a href="findtutor.php">Home</a> &nbsp; | &nbsp; <!--<p class="fa fa-plus-circle"><a href="tutorials 2.html">ADD A BOOK</a></p>-->
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

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
               <?php $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT picture FROM profile WHERE phone= '$phone' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        
       // echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';
    
     ?>
              <a href="#">
                 
    <img src="upload/<?php echo $row['picture']; ?>" >
        
              </a>
              <?php
              }
}
              ?>
              <h1><?php displayefname();?> <?php displayelname();?></h1> 
              <p><?php displayemail();?></p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <!--<li class="@@--active"><a href="#"> <i class="fa fa-lock"></i> Change Password</a></li>-->
              <!--<li ><a href="#"> <i class="fa fa-calendar"></i> Recent Activity </span></a></li>-->
              <li ><button class="openBtn fa fa-edit " style="color: black; border: none;" onclick="openSearch()"> Edit Profile</button></li>
             <li ><button class="openBtn fa fa-key " style="color: black; border: none;" onclick="openSearch1()"> Change Password</button></li>
          </ul>
      </div>
  </div>
  <div class="profile-info col-md-9">
      <div class="panel">
          <form action="uploadpic.php" method="post" enctype="multipart/form-data">
              <!--<textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>-->
          
          <footer class="panel-footer">
              <input type="file" name="image" id="fileToUpload">
					  <p><small>Upload profile picture</small></p>
              <button type="submit" name="submit" class="btn btn-warning pull-right">Upload</button>
              <ul class="nav nav-pills">
                  
                  <li>
                      
                  </li>
                  
                 
              </ul>
			  </form>
          </footer><br>
	  </div>
      <div class="panel">
          <br>
          <div class="panel-body bio-graph-info">
              <h1>Bio </h1><br>
              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span>: <?php displayefname(); ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span>: <?php displayelname(); ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Department </span>: <?php displayedpt(); ?></p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Level </span>: <?php displayelvl(); ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email </span>: <?php displayeemail(); ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Matric No. </span>: <?php displayematno(); ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Phone </span>: <?php displayephone(); ?></p>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              
                          </div>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              
                          </div>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"></div>
                          </div>
                          <div class="bio-desk">
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
		  <br><br><br>
<!-- USER SETTING -->
		  
		  <div id="myOverlay" class="overlay">
		  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
		  <div class="overlay-content">
			
	<div class="container py-5 w3l-contacts-12" id="contact">
		<div class="contacts12-main py-md-3">
			
                    <form action="editpro.php" method="post" class="">
				<div class="main-input">
					
					<br><br>
					
                                        <input type="text" name="fname" placeholder="Firt Name" class="contact-input" value="<?php displayefname(); ?>"  required="" />
                                        <input type="text" name="lname" placeholder="Last Name" class="contact-input" value="<?php displayelname(); ?>" required="" />
                                        <input type="text" name="level" placeholder="Level" class="contact-input" value="<?php displayelvl(); ?>" required="" />
                                        <input type="text" name="udpartment" placeholder="Department" class="contact-input" value="<?php displayedpt(); ?>" required="" />
                                        <input type="text" name="uemail" placeholder="Email" class="contact-input" value="<?php displayemail(); ?>" required="" />
					
                                        
                                        <br />
				</div>
                            <div class="text-right">
					<button class="btn-primary btn theme-button" style="background-color: darkgoldenrod; margin-right: 50%;">Update</button>
				</div>
			</form>
		</div>
	</div>
	

  </div>
</div>

<!-- //END -->

<!-- CHANGE PASSWORD -->
		  
		  <div id="myOverlay1" class="overlay">
		  <span class="closebtn" onclick="closeSearch1()" title="Close Overlay">×</span>
		  <div class="overlay-content">
			
	<div class="container py-5 w3l-contacts-12" id="contact">
		<div class="contacts12-main py-md-3">
			
                    <form action="updatepassword.php" method="post" class="">
				<div class="main-input">
					
					<br><br>
					
					<input type="password" name="oldpword" placeholder="Old Password" class="contact-input" required="" />
					<input type="password" name="newpword" placeholder="New Password" class="contact-input" required="" />
					
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

 <section class="w3l-index5" id="about">
  <div class="new-block py-5">
   <center> <div class="container py-lg-3">
<div class="list-single-view mt-5"> </div>
      <div class="list-single-view mt-3">
        <div class="row">
         </center>
        </div>
      </div>
      <div class="list-single-view mt-3"> </div>
      <div class="list-single-view mt-3"> </div>
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
	  
	  <!--Full screen script-->
	  <script>
  function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
function openSearch1() {
  document.getElementById("myOverlay1").style.display = "block";
}

function closeSearch1() {
  document.getElementById("myOverlay1").style.display = "none";
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
  
  function displayname()
  {
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT name FROM login WHERE phone= '$phone' ";
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
  
  
  //this function displays the email
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
  
  
  //this function displays fname
  function displayefname()
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
  
  
  //this function displays fname
  function displayelname()
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
  
  
  //this function displays department
  function displayedpt()
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
  
  
  //this function displays fname
  function displayelvl()
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
  
  
  //this function displays fname
  function displayeemail()
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
  
  
  //this function displays fname
  function displayematno()
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
  
  
  //this function displays phone
  function displayephone()
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