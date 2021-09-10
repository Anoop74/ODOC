<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../img/favicon.png" type="image/png">
	<title>Kare Charity</title>
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
   
<script type="text/javascript">
function mul()
{
var a=document.getElementById("p").value;
var b=document.getElementById("dy").value;
var c=parseInt(a)*parseInt(b);
document.getElementById("t").style="inline";
document.getElementById("t").value=c;

}


 
   function price(c,p)
  {
  alert(c);
  if(window.XMLHttpRequest) //chrome,firefox,safari,opera
  {
  obj=new XMLHttpRequest();
  }
  else //IE 7.0 greater
  {
  obj=new ActiveXobject("Microsoft.XMLHTTP");
  }
  obj.onreadystatechange=function()
  {
 
  if(obj.readyState==4 && obj.status==200)
  {
  //alert(obj.responseText);
   document.getElementById("t").value=obj.responseText;
  }
  }
   obj.open("GET","calcprice.php?cal="+c+"&pr="+p,true);
   obj.send();
  }
</script> 
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
session_start();
$a=$_GET['id'];
$b="SELECT * FROM `medicine` WHERE id='$a'";
$x=mysqli_query($con,$b);
if($r=mysqli_fetch_array($x))
{
  ?>
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
							<a href="login.html">
								<i class="lnr lnr-phone-handset"></i>
								012-6532-568-9746
							</a>
						</li>
						<li>
							<a href="#">
								<i class="lnr lnr-envelope"></i>
								emergency@colorlib.com
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
						<img src="../img/logo.png" alt="">
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
									
                                    <li class="nav-item submenu dropdown">
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
                                    <li class="nav-item submenu dropdown active">
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
                <div class="banner_content text-center">
                    <h2>Medicine</h2>
                    <div class="page_link">
                        <a href="patient_home.php">Home</a>
                        <a href="medicine_booking.php">Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--================End Banner Area =================-->

	
	
                    <form method="post" enctype="multipart/form-data">

<table align="center" style="margin-top:50px">
  <tr><td>Medicine Name :</td><td><?php echo $r[1];?></td></tr>
  <tr><td>Used For:</td><td><?php echo $r[3];?></td></tr>
  <tr><td>Mfg.Date :</td><td><?php echo $r[5];?></td></tr>
  <tr><td>Expiry.Date :</td><td><?php echo $r[6];?></td></tr>
  <tr><td>MRP Rs :</td><td><input type="text" value="<?php echo $r[2];?>" id="p" disabled class="form-control"></td></tr>
  <!--<tr><td>Upload Prescription :</td><td><input type="file" name="ps" id="ps" onChange="preview(event)"></td></tr>

  <tr><td>No of Days Needed :</td><td>As per Prescription<input type="radio" name="no" id="as" value="As per Prescription" onClick="checkprs('<?php //echo $r[2];?>','<?php //echo $r[1];?>')" />Others<input type="radio" name="no" id="ot" value="Others" onClick="days(this.value,'<?php //echo $r[0];?>')"  /></td><td id="d"></td></tr>-->
 <tr><td>No of Days :</td><td><input type="text" name="dy" id="dy" onChange="mul();" required="required" class="form-control"/></td></tr>
  <tr><td>Total Amount :</td><td><input type="text" name="t" id="t" required="required" class="form-control"/></td></tr>
   <tr><td><td><input type="submit" name="BOOK" value="BOOK" id="sbmt" class="btn submit_btn"  onClick="return validation()" style="margin-bottom:50px; margin-top:10px"></td></td></tr></table>
   
   
<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
if(isset($_POST['BOOK']))
{

   
  $tp=$_POST['t'];
 $dy=$_POST['dy'];
  $dt=date("y-m-d");


  $sql="INSERT INTO `medicine_booking`(`id`, `mid`, `pid`, `days`, `total_price`, `date`, `status`) VALUES  ('','".$r[0]."','".$_SESSION['uid']."','$dy','$tp','$dt','pending')";
  mysqli_query($con,$sql);
  //$source=$_FILES['ps']['tmp_name'];
  //$des="../ADMIN/prescription/".$ps;
 //move_uploaded_file($source,$des);
  ?>
 <script type="text/javascript">
 alert("Booked Successfully");
 window.location.href="medicine_booking.php";
 </script>
 <?php
 }
 }
 ?>
              
              
              
	<!-- End Align Area -->

	<!--================ Start Footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Me</h6>
						<p>
							Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
						
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/stellar.js"></script>
	<script src="../vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="../vendors/isotope/isotope-min.js"></script>
	<script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="../vendors/jquery-ui/jquery-ui.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="../js/mail-script.js"></script>
	<!-- <script src="js/theme.js"></script> -->
	<script src="../js/custom.js"></script>
</body>

</html>