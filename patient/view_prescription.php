<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../img/favicon.png" type="image/png">
	<title>O Doc</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../vendors/linericon/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="../vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/table.css">
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
session_start();
   
$a="SELECT  distinct id FROM `consultation`  where patient_id='".$_SESSION['uid']."'";
$aa=mysqli_query($con,$a);
$count=mysqli_num_rows($aa);


	while($r=mysqli_fetch_array($aa))
	{ 
			 
		$l="SELECT  * FROM `prescription`  where id='".$r[0]."'";
		$ll=mysqli_query($con,$l);
		
		 if(mysqli_num_rows($ll)>0)
		 {?>
	<!--================Header Menu Area =================-->
<header class="header_area">
	  <div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="left_side">
						<li>
							<a href="#">
								<i class="fa fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="#">
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
					<a class="navbar-brand logo_h" href="#">
						<img src="../img/logo1.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item " >
										<a class="nav-link" href="patient_home.php">Home</a>
									</li><li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">health</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="healtharticle.php">health  articles</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="exercise.php">exercise details</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="view_diet.php">diet details</a>
											</li>
										</ul>
									</li>
									<!--<li class="nav-item">
										<a class="nav-link" href="departments.html">Departments</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="doctors.html">Doctors</a>
									</li>-->
									
                                    <li class="nav-item submenu dropdown active">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">consultation</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="addsymptom.php">consultation</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="view_prescription.php">prescription</a>
											</li>
											
										</ul>
									</li>
                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">medicine</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="medicine_booking.php">booking</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="medicine_status.php">status</a>
											</li>
											
										</ul>
									</li>
									 <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">appoinment</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="view_doctor.php">appoinment booking</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="my_booking.php">my appoinments</a>
											</li>
											
										</ul>
									</li>
                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
										<ul class="dropdown-menu">
                                        <li class="nav-item">
												<a class="nav-link" href="profile.php">profile</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="emergency.php">notification</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="changepassword.php">change password</a>
											</li>
                                           
											<li class="nav-item">
												<a class="nav-link" href="feedback.php">feedback</a>
											</li>
										</ul>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="../logout.php">logout</a>
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

	<!--================ Banner Area =================-->
	<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Prescription</h2>
                    <div class="page_link">
                        <a href="patient_home.php">Home</a>
                        <a href="view_prescription.php">Prescription</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--================End Banner Area =================-->


<section class="button-area"></section>
	<!-- End Button -->
	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container">
		  <div class="section-top-border">
				<h3 class="mb-30 title_color">PRESCRIPTION DETAILS</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
                    <form method="post">
<center><table border="1">	


        	 <tr><th>SNO</th>
            <th>DATE</th>
            <th>DOCTOR</th>
            <th>REPLAY</th>
            <th>PRESCRIPTION</th>
            </tr><?php
		 $i=1;
			 while($h=mysqli_fetch_array($ll))
			  {
			  
					$q="SELECT * FROM `doctor_registration` where id='".$h[3]."'";
					$qq=mysqli_query($con,$q);
					$k=mysqli_fetch_array($qq);
			  ?>
				
				   
				  <tr><td><?php echo $i;?></td>
				  <td><?php echo $h['date'];?></td>
				  <td><?php echo $k['name'];?></td>
				  <td><?php echo $h['reply'];?></td>
				   <td><a href="../doctor/prescription/<?php echo $h[4];?>" class="genric-btn success circle">Download</a></td></tr>
				   
					 <?php
					 $i=$i+1;
				}
		   }
		   else
		   {
		   $i=1;
				while($h=mysqli_fetch_array($ll))
			  {
			  
					$q="SELECT * FROM `doctor_registration` where id='".$h[3]."'";
					$qq=mysqli_query($con,$q);
					$k=mysqli_fetch_array($qq);
			  ?>
				
				   
				  <tr><td><?php echo $i;?></td>
				  <td><?php echo $h['date'];?></td>
				  <td><?php echo $k['name'];?></td>
				  <td><?php echo $h['reply'];?></td>
				 <td><font color="red">Pending.....</font></td></tr>
				   
					 <?php
				}
				$i=$i+1;
			}
			
			  
		}
	
		?>
  
   
  </table>
  
  </form>
              
              
              
              
						</div>
					</div>
				</div>
			</div>
			<div class="section-top-border">
			  <div class="row"></div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<!--================ Start Footer Area  =================-->
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
						<h4><a href="../index.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="../about.php">About Us</a></h4>
                        
                        <h4><a href="../department.php">Departments</a>&nbsp;&nbsp;&nbsp;<a href="../logout.php">Logout</a></h4>
                      
                        <h4><a href="../contact.php">Contact Us</a></h4>
						
					
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