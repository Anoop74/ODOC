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
    <link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
        <style>
/* The container */
.cont {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.cont input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
  
}

/* On mouse-over, add a grey background color */
.cont:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.cont input:checked ~ .checkmark {
  background-color:#0099FF;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.cont input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.cont .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.inpt-file-container {
  position: relative;
  width: 550px;
} 
.js .inpt-file-trigger {
  display: block;
  padding: 14px 45px;
  background:#0099FF;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
.js .inpt-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
.js .inpt-file:hover + .inpt-file-trigger,
.js .inpt-file:focus + .inpt-file-trigger,
.js .inpt-file-trigger:hover,
.js .inpt-file-trigger:focus {
  background: #34495E;
  color: #39D2B4;
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}

/* Useless styles, just for demo styles */


</style>
</head>

<body>

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
									<li class="nav-item active">
										<a class="nav-link" href="../index.php">Home</a>
									</li>
											<li class="nav-item">
												<a class="nav-link" href="../services.php">Services</a>
											</li>
                                    <li class="nav-item ">
										<a class="nav-link" href="../about.php">About Us</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="../department.php">Departments</a>
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
										<a class="nav-link" href="../login.php">Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../contact.php">Contact</a>
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
                    <h2>Sign Up</h2>
                    <div class="page_link">
                        <a href="../index.php">Home</a>
						<a href="patient_reg.php">Sign up</a></div>
                </div>
            </div>
        </div>
</section>
    <!--================End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
          <div class="row">
                <div class="col-lg-3">
                  <div class="contact_info"></div>
                </div>
                <div class="col-lg-9">
                <?php
	$con=mysqli_connect("localhost","root","","find_my_doctor");
	if(isset($_POST['submit']))
	{
	
	$u=$_POST['n'];
	
	$a=$_POST['a'];
	$g=$_POST['g'];
	$add=$_POST['add'];
	$ph=$_POST['ph'];
	$e=$_POST['em'];
	$img=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$img);
	$un=$_POST['un'];
	$pwd=$_POST['pm'];
	$d="INSERT INTO `patient_registration` VALUES ('','$u','$un','$a','$g','$add','$ph','$e','$pwd','$img','pending')";
	mysqli_query($con,$d);
	//$idd=mysqli_insert_id($con);

    //$b="INSERT INTO `login`(`uid`,`username`, `password`, `type`) VALUES ('$idd','$un,'$pwd','patient')";
    //mysqli_query($con,$b);
	}
	?>
                    <form class="row contact_form"  method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="n"  placeholder="Enter Your Name">
                            </div>
                           <div class="form-group">
                                <input type="text" class="form-control" id="name" name="a"  placeholder="Enter Your Age">
                            </div>
                             <div class="form-group">
                            <label class="cont" style="margin-top:20px">Male<input type="radio" checked="checked" name="g" value="Male"><span class="checkmark"></span></label>
							<label class="cont">Female<input type="radio" name="g" value="Female"><span class="checkmark"></span></label>
							</div>
                            <div class="form-group">
                            <div class="inpt-file-container">  
                                <input class="inpt-file" name="img" id="pic"  type="file">
                                <label tabindex="0" for="my-file" class="inpt-file-trigger">Select Image...</label>
                            </div><br><p class="file-return"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="name" name="add"  placeholder="Enter Your Address"></textarea>
                            </div>
                        
                        <div class="form-group">
                                <input type="text" class="form-control" id="name" name="ph"  placeholder="Enter Your Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="em"  placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="un"  placeholder="Enter Your Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="name" name="pm"  placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="name" name="cp"  placeholder="Confirm Password">
                            </div>
                        <div class="col-md-12">
                            <input type="submit" value="SIGN UP"  name="submit" class="btn submit_btn"  style="margin-left:110px">
                        </div>
                        </div>
            </div>                    </form>
                </div>

        </div>
    </section>
    <!--================Contact Area =================-->

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
						<h4><a href="../index.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="../about.php">About Us</a></h4>
                        
                        <h4><a href="../department.php">Departments</a>&nbsp;&nbsp;&nbsp;<a href="../login.php">Login</a></h4>
                      
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