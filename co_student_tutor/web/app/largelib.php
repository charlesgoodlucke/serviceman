<!doctype html>
<html lang="en">
  <head>
	  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CST - Library </title>

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
							<li class="nav-item active">
								<a class="nav-link fa fa-database" href="largelib.html"> Large Library</a>
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
    <div class="container-fluid">
     <center>
		  <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
          <div class="px-lg-5 py-md-0 py-3">
            <div class="header-section">
              <p class="fa carousel-fade"></p>
            </div>
              <form action="lib.php" method="post" class="signin-form mt-lg-5 mt-4">
              <div class="forms-gds">
                 
                <div class="form-input">
                  <input type="text" name="search" placeholder="ENTER BOOK TITLE " required="" style=" padding: 17px; width: 100%;">
                
                </div><br>
                <div class="form-input"><button class="btn btn-primary theme-button">SEARCH</button></div>
              </div>
            </form>
          </div>
		 </div>
		 
		 <div id="myOverlay" class="overlay">
		  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
		  <div class="overlay-content">
			
	<div class="container py-5 w3l-contacts-12" id="contact">
		<div class="contacts12-main py-md-3">
			
                    <form action="add_to_lib.php" method="post" enctype="multipart/form-data">
				<div class="main-input">
					
					<input type="text" name="title" placeholder="Book title" class="contact-input" required="" /><br><br>
					<input type="text" name="author" placeholder="Book Author" class="contact-input" required="" />
					<textarea class="contact-textarea contact-input" name="des" placeholder="Description" required></textarea>
                                        <i><h3 style="color: aliceblue">BOOK MUST BE <strong>PDF</strong> PLEASE!</h3></i><br><br>
					<label style="color: aliceblue">Select Book </label> <input type="file" id="myFile" name="book" class="contac-input" required><br />
				</div>
				<div class="text-right">
					<button class="btn-primary btn theme-button" style="background-color: darkgoldenrod;">Upload</button>
				</div>
			</form>
		</div>
	</div>
	

  </div>
</div>
		 <small>YOU CAN ALSO ADD A BOOK IF YOU WANT TO</small><BR>
		 <button class="openBtn fa fa-plus-circle " onclick="openSearch()"> ADD A BOOK</button>
		
		</center>

    </div>
</section>
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