<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>oDoc</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<style>
	.login-box12{
    width: 320px;
    height: 550px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 1 2px;
    text-align: center;
    font-size: 22px;
}
.login-box12 p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box12 input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box12 input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 20px;
    color: #fff;
    font-size: 16px;
}
.login-box12 input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box12 input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box12 a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box12 a:hover
{
    color: #39dc79;
}
	</style>
	
</head>
	<form method="post">
	<section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="col-lg-12">
    <div class="login-box12">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
           
            <p>Username</p>
            <input type="text" name="un" required="required" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pwd" required="required" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">			
        <center>
<a href="patient/patient_reg.php" style="text-decoration:none">PATIENT SIGNUP</a></center>
            
        

<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
if(isset($_POST['submit']))
{
 $name=$_POST['un'];
 $pwd=$_POST['pwd'];
  $sql="select * from login where username='$name' && password='$pwd'";
  $exe=mysqli_query($con,$sql);
  $fetch=mysqli_fetch_array($exe);
  $count=mysqli_num_rows($exe);
  if($count>0)
  {
  session_start();
  $idd=$fetch['rid'];
  
  $_SESSION['uid']=$idd;
  $type=$fetch['type'];
  if($type=="admin")
  {
  header("location:admin/admin_home.php");
  }
  elseif($type=="patient")
  {
    header("location:patient/patient_home.php");
	}
	 elseif($type=="doctor")
    {
    header("location:doctor/doctor_home.php");
	}
	}
	else
	{
	echo "Incorrect username or password";
	}
 }
 ?>
<body>


        
        </div>
           

 
					</div>
				</div>
			</div>
		</div>
	</section></form>
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="left_side">
						<li>
							<a href="login.html">
								<i class="fa fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-behance"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="login.php">
								<i class="lnr lnr-phone-handset"></i>
								012-6532-568-9746
							</a>
						</li>
						<li>
							<a href="#">
								<i class="lnr lnr-envelope"></i>
								odoc@gmail.com
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="img/logo1.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="index.php">Home</a>
									</li>
											<li class="nav-item">
												<a class="nav-link" href="services.php">Services</a>
											</li>
                                    <li class="nav-item ">
										<a class="nav-link" href="about.php">About Us</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="department.php">Departments</a>
									</li>
									<!--<li class="nav-item ">
										<a class="nav-link" href="doctors.html">Doctors</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="about.html">About</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="services.html">Services</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="elements.html">Elements</a>
											</li>
										</ul>
									</li>-->
                                    
									<li class="nav-item ">
										<a class="nav-link" href="login.php">Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.php">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ Home Banner Area =================-->

	
	<!--================ End Home Banner Area =================-->

	

<!--================ start footer Area =================-->
	<footer class="footer-area section_gap">
		<div class="container" style="height:150px">
			<div class="row">
				<div class="col-lg-2  col-md-6">
					<div class="single-footer-widget">
						<h6></h6>
						<ul class="footer-nav">
							<li>
								<a href="#"></a>
							</li>
							<li>
								<a href="#"></a>
							</li>
							<li>
								<a href="#"></a>
							</li>
							<li>
								<a href="#"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Contact Us</h6>
						<p>
							56/8, Santa bullevard, Rocky beach, San fransisco, Los angeles, USA
						</p>
						<h3>1234567890</h3>
						<h3>0458-2258741</h3>
					</div>
				</div>
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget newsletter">
						<h4><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="about.php">About Us</a></h4>
                        
                        <h4><a href="department.php">Departments</a>&nbsp;&nbsp;&nbsp;<a href="login.php">Login</a></h4>
                      
                        <h4><a href="contact.php">Contact Us</a></h4>
						
					
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between" style="margin-top:-50px">
				<p class=" footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
				</p>
				<div class=" footer-social" style="margin-left:100px">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area =================-->



	<!--================ Optional JavaScript =================-->
	<!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>