<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CST - Tutorials Given </title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
	  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/logo-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/logo-icon.png">
	  
	  <style>
		  
		  * {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 90%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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
							<li class="nav-item @@ft-active">
								<a class="nav-link fa fa-search" href="findtutor.php"> Find a Tutor <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@ll-active">
								<a class="nav-link fa fa-database" href="largelib.php"> Large Library</a>
							</li>
							<li class="nav-item active">
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
        <p class="fa fa-home"><a href="findtutor.php">Home</a> &nbsp; | &nbsp; <p></p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<section class="w3l-offered-courses">
	
  
    <div class="container py-lg-5">
      <div class="header-section text-center">
        <h3 class="mb-2">All Tutorials</h3>
		  <small>GIVEN BY YOU</small>
      </div>
</div>
		
		<!--Tutorials taken-->
		
	<center> <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Course Code" title="Type in a name">

<?php
        // put your code here
       
    
    
    $phone = $_SESSION["phone"];
    include 'connectDB.php';
    
    $sql = "SELECT * FROM give_tutorial WHERE phone_no='$phone' ";
    $result = $conn->query($sql);
?>
      

  <div class="blog py-5" id="blog">
      <div class="container pb-lg-5">
      <table id="myTable">
  <tr class="header">
      <th >Course Code</th>
    <th >Course Title</th>
    <th >Tutor</th>
	<th >Department</th>
	<th >Tutorial Level</th>
        <th >Tutorial Type</th>
        <th >Date Created</th>
        <th >Tutorial Description</th>
         <?php 
         
         if ($result)
         {
         if ($result->num_rows > 0) {
    $courses = array();
    while ($course =  mysqli_fetch_assoc($result))
    {
        $courses[] = $course;
    }
    foreach ($courses as $course)
    {
?>
        
  </tr>
  <tr>
      <td><?php echo $course['c_code']; ?></td>
      <td><?php echo $course['c_title']; ?></td>
      <td><?php echo $course['name']; ?></td>
      <td><?php echo $course['c_dpartment']; ?></td>
      <td><?php echo $course['c_level']; ?></td>
      <td><?php echo $course['tutorial_type']; ?></td>
      <td><?php echo $course['date_created']; ?></td>
      <td><?php echo $course['tutorial_des']; ?></td>
      <td><a href="check.php?id=<?= $course['id']; ?>">Check Comment(s)</a></td>
      
      </tr>
	
  <?php
    }
         }
         else
         {
             echo'<div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display= "none"";">&times;</span> 
          <strong>Sorry!</strong> NO RESULT FOUND.
        </div>     <br><br><br>';
         }
         }
 else {
        echo "Error in ".$sql."".$conn->error; 
 }
?>
  
		</table></center>
	<br><br>
		
		
		<!--end-->
		
		<!--Turtorials given-->
		
		
		<!--end-->
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
	  
	  <!--TABLE SCRIPT-->
	  
	  <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

	  
	  <!--END-->

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