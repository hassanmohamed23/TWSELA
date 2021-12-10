<?php  include ('database2.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>TWSELA</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="./index.html" class="site-logo"><img style =" width: 80px; " src="./img/logojpg.jpg" alt=""></a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="nav-warp">
			<div class="user-panel">
				<a href="mahmoud.html">Log out 
				
			</div>
			<ul class="main-menu">
				<li><a href="./index.html">Home</a></li>
				<li><a href="./about.html">About us</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="./blog.html">News</a></li>
				<li><a href="./contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<h2>Services</h2>
			
			<div class="site-breadcrumb">
				<a href="home">Home Services</a> 
			</div>
		</div>
	</section>
	<!-- Page Top section end -->


	<!-- Faq section -->
	<section class="faq-section spad">
		<div class="container">
			<div class="section-title">
				<img src="./img/logojpg.jpg" style="width:100px; height:100px;"  alt="#">
				<p>The best out there</p>
				<h2>SERVICES</h2>
			</div>
			<div id="accordion" class="accordion-area faq-accordion">
				<div class="panel">
					<div class="panel-header" id="headingFour">
						<button class="panel-link active" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse3">Hospitals and Pharmacies</button>
					</div>
          <?php 
               
                    $q= "SELECT * FROM hospitals " ;

  $rows=$db->getRows($q,array());
                      if(count($rows)>0)
{
      foreach($rows as $row)
{
				echo "<div id='collapse4'class='collapse show' aria-labelledby='headingFour' data-parent='#accordion'>
						<div class='panel-body'>
							<div class='row'>
								<div class='col-lg-10 offset-lg-1'>
									<div class='row'>
										<div class='col-lg-6'>
											<h4>".$row['name']."</h4>
											<p>".$row['description']."</p>
                                            <div class='blog-post'>
                                            <a href='".$row['location']."'>LOCATION</a>
                                            </div>
										</div>
										<div class='col-lg-6'>
											<img src='".$row['image']."' alt=''>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				";
      }}
				?>
                    </div>
				<div class="panel">
					<div class="panel-header" id="headingThree">
						<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse1">Housing for Student
						</button>
					</div>
					<?php 
               
                    $q= "SELECT * FROM hospitals " ;

  $rows=$db->getRows($q,array());
                      if(count($rows)>0)
{
      foreach($rows as $row)
{
				echo "<div id='collapse3' class='collapse'' aria-labelledby='headingThree' data-parent='#accordion'>
						<div class='panel-body'>
							<div class='row'>
								<div class='col-lg-10 offset-lg-1'>
									<div class='row'>
										<div class='col-lg-6'>
											<h4>".$row['name']."</h4>
											<p>".$row['description']."</p>
                                            <div class='blog-post'>
                                            <a href='".$row['location']."'>LOCATION</a>
                                            </div>
										</div>
										<div class='col-lg-6'>
											<img src='".$row['image']."' alt=''>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				";
      }}
				?>
				</div>
				<div class="panel">
					<div class="panel-header" id="headingOne">
						<button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse2">University and Study</button>
					</div>
				 <?php 
               
                    $q= "SELECT * FROM hospitals " ;

  $rows=$db->getRows($q,array());
                      if(count($rows)>0)
{
      foreach($rows as $row)
{
				echo "<div id='collapse1'class='collapse show' aria-labelledby='headingOne' data-parent='#accordion'>
						<div class='panel-body'>
							<div class='row'>
								<div class='col-lg-10 offset-lg-1'>
									<div class='row'>
										<div class='col-lg-6'>
											<h4>".$row['name']."</h4>
											<p>".$row['description']."</p>
                                            <div class='blog-post'>
                                            <a href='".$row['location']."'>LOCATION</a>
                                            </div>
										</div>
										<div class='col-lg-6'>
											<img src='".$row['image']."' alt=''>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				";
      }}
				?>
				</div>
				<div class="panel">
					<div class="panel-header" id="headingTwo">
						<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse5">WorkSpaces & Lecture halls</button>
					</div>
					<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div class="row">
										<div class="col-lg-6">
											<h4>Our goal</h4>
											<p>Places of study and study halls that help the student to accomplish his tasks</p>
										</div>
										<div class="col-lg-6">
											<img src="./img/study.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel">
					<div class="panel-header" id="headingSix">
						<button class="panel-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Craftsmen</button>
					</div>
					<div id="collapse6" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div class="row">
										<div class="col-lg-6">
											<h4>our goal</h4>
											<p>Craftsmen and their various fields</p>
										</div>
										<div class="col-lg-6">
											<img src="./img/craftman.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><div class="panel">
					<div class="panel-header" id="headingFive">
						<button class="panel-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Restaurants and Cafes</button>
					</div>
					<div id="collapse5" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div class="row">
										<div class="col-lg-6">
											<h4>our goal</h4>
											<p>Restaurants and cafeterias are available 24 hours a day and their numbers</p>
										</div>
										<div class="col-lg-6">
											<img src="./img/rest.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Faq section end -->

	


	<!-- Service box section -->
	<section class="service-box-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-6 p-0 service-box">
					<div class="service-box-text text-white">
						<h4>Our Mission</h4>
						<p>Provide services for students that helps Students to choose Trusted Pharmacies, Hospitals , Student housing , Exams and Data ,Restaurants and Cafés , and Trusted craftsman such as plumbers, Electricians and Carpenters.
</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 p-0 service-box">
					<div class="service-box-text text-white">
						<h4>Our Vission</h4>
						<p>When Student first visit the website he Must signup in website then website add student username and password to database and when student login he will be able to access our services and find what is he need. He can surf between different services </p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 p-0 service-box">
					<div class="service-box-image text-white">
						<img src="img/bg.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service box section end -->


	

	


	<!-- Footer top section -->
	<section class="footer-top-section text-white spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget about-widget">
						<img style ="width:50px;" src="./img/logojpg.JPG" alt="logo">
						<p>When Student first visit the website he Must signup in website then website add student username and password to database and when student login he will be able to access our services and find what is he need. He can surf between different services .
And when he choose suitable service He will provides him information about this Service.
 </p>
						<div class="fw-social social">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">services</h4>
						<div class="row">
							<div >
								<ul>
									<li><a href="">housing for student </a></li>
									<li><a href="">hospitals and pharmacies </a></li>
                                    <li><a href="">univeristy and study </a></li>
									<li><a href="">cafe and resturant </a></li>
									<li><a href="">workspace </a></li>
									<li><a href="">craftman</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Footer top section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			
		</div>
	</footer>
	<!-- Footer top section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
