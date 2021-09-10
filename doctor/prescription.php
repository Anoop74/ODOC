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
    <!--<link rel="stylesheet" href="../css/table.css">-->
    <link rel="stylesheet" href="../css/responsive.css">
    
   <script src="../jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(":button").click(function(){
$("<tr><td><input type='text' name='m[]'  class='form-control'></td><td><select  name='dy[]'class='form-control' ><option value='0'>--SELECT DAYS--</option><option>2 Days</option><option>3 Days</option><option>5 Day</option><option>10 Days</option></select></td><td><textarea name='dt[]'class='form-control' ></textarea></td></tr>").appendTo("#append");
});
});
</script>
</head>

<body>
<?php error_reporting(0);?>
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
									<li class="nav-item active" >
										<a class="nav-link" href="doctor_home.php">Home</a>
									</li>
                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ARTICLES</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="addarticle.php">health articles</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="view_article.php">view</a>
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
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exercise</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="addexercisedtls.php">add </a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="view_exercise.php">view</a>
											</li>
											
										</ul>
									</li>
                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">diet</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="adddiet.php">add</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="view_diet.php">view</a>
											</li>
											
										</ul>
									</li>
									 <li class="nav-item " >
										<a class="nav-link" href="view_symptom.php">Consultation</a>
									</li>
                                    <li class="nav-item " >
										<a class="nav-link" href="view_token_list.php">Appoinments</a>
									</li>
                                    <li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
										<ul class="dropdown-menu">
                                        <li class="nav-item">
												<a class="nav-link" href="profile.php">profile</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="emergency.php">Emergency</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="changepassword.php">change password</a>
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

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Consultation</h2>
                    <div class="page_link">
                        <a href="doctor_home.php">Home</a>
                        <a href="">Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
				
    <section class="contact_area p_120">
        <div class="container">
          <div class="row" style="margin-left:300px">
                
                
            <form method="post" enctype="multipart/form-data">
<table>
<tr><td>MEDICINE </td>
<td>DAYS </td>
<td>DETAILS </td></tr>
<tr><td><input type="text" name="m[]" id="m" class="form-control"></td>
<td><select name="dy[]" id="dy" class="form-control">
<option value="0">--SELECT DAYS--</option>
<option>2 Days</option>
<option>3 Days</option>
<option>5 Days</option>
<option>10 Days</option>
</select></td>
<td><textarea name="dt[]" id="dt"class="form-control" ></textarea></td></tr>

<tr><td><input type="text" name="m[]" id="m" class="form-control"></td>
<td><select name="dy[]" id="dy" class="form-control">
<option value="0">--SELECT DAYS--</option>
<option>2 Days</option>
<option>3 Days</option>
<option>5 Days</option>
<option>10 Days</option>
</select></td>
<td><textarea name="dt[]" id="dt" class="form-control"></textarea></td>
<td><textarea name="rp" id="rp" placeholder="Reply" class="form-control"></textarea></td></tr>
</table>
<table id="append">
</table>
<center><input  id="btn" type="button" name="+ADD" value="+ADD" class="genric-btn primary circle">


<input type="submit" name="SEND" value="SEND" onClick="return validation()" class="btn submit_btn"></center>
</form>

<?php
if(isset($_POST['SEND']))
{
   $con=mysqli_connect("localhost","root","","find_my_doctor");
  session_start();
   $a=$_GET['id'];
   $md=$_POST['m'];
   $rp=$_POST['rp'];
   $dt=date("y-m-d");
  $count=1;
 $pdf="";
    $q="SELECT * FROM `doctor_registration` where id='".$_SESSION['uid']."'";
	$qq=mysqli_query($con,$q);
	
	
	
  if($k=mysqli_fetch_array($qq))
   {
   
   $h="SELECT * FROM `hospital`";
	$hs=mysqli_query($con,$h);
	$hst=mysqli_fetch_array($hs);
   
	    $hsptl=$hst[1];
		$name=$k[1];
		$qlf=$k[10];
		$cn=$k[5];
	     $id=$k[1];
	
  	  if(file_exists("prescription/$id.txt"))
	{
	  $id=$id.rand(000,999);
	  }  


  $p=fopen("prescription/$id.txt","w");
  
  $b="SELECT * FROM `consultation` WHERE id='$a'";
  $bc=mysqli_query($con,$b);
  if($r=mysqli_fetch_array($bc))
  {
     
	 foreach($md as $i=>$mc)
	 {
	  
	  $d=$_POST['dy'][$i];
	  $ds=$_POST['dt'][$i];
	  
	$pdf=$pdf."<tr><td>$count</td><td>$mc</td><td>$d</td><td>$ds</td></tr>";
	
	 fwrite($p,$count.":MEDICINE=".$mc.",DAYS=".$d.",DETAILS=".$ds);
	 fwrite($p,"\n");
	 $count++;
	} 
	
	
	
  
	
   ?>
   <script type="text/javascript">
   alert("Sending...");
   </script>
<?php

 $html = "<p align='center'><h1>Hospital :$hsptl</h1></p>
<h2>Doctor :$name(contact:$cn)</h2>

 <table border='1' cellspacing='0' width='1000' cellpadding='10'>
<tr><td><td>MEDICINE</td></td><td>DAYS</td><td>DETAILS</td></tr>$pdf</table>

";

 include '../MPDF_6_0/mpdf60/mpdf.php';

$mpdf=new mPDF(); 

$mpdf->PDFA = true;
$mpdf->PDFAauto = true;//INSERT INTO `prescription`(`PID`, `PATIENT`, `PRESCRIPTION`) VALUES ('null','$q','".$_POST['prs']."')")
$mpdf->WriteHTML($html);

$mpdf->Output("prescription/".$id.".pdf" , 'F');
$sql="INSERT INTO `prescription`(`pid`, `id`, `patient`, `doctor`, `prescription`, `reply`, `date`) VALUES ('','".$r[1]."','".$r[2]."','".$_SESSION['uid']."','$id.pdf','$rp','$dt')";
mysqli_query($con,$sql);
//header("location:prescriptionfile/".$id.".pdf");
exit;


}
	} 
}



?> 
</div>
        </div>
    </section>
    <!--================Blog Area =================-->

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