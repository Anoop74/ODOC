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
    <script type="text/javascript">
function dis()
{
document.getElementById("file").style="inline";
document.getElementById("f").style.display="none";
}
</script>
</script>
        <style>
/* The container */
.cont {
  display: block;
  position: relative;
  padding-left:50px;
  margin-bottom: 20px;
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
<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
session_start();
if(isset($_POST['UPDATE']))
{
 $img=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$img);

 $pic=$_FILES['pic']['name'];
move_uploaded_file($_FILES['pic']['tmp_name'],"../image/".$pic);

if($pic=="" || $img=="")
{


$up="UPDATE `doctor_registration` SET `name`='".$_POST['n']."',`specialization`='".$_POST['ql']."',`age`='".$_POST['a']."',`gender`='".$_POST['g']."',`address`='".$_POST['add']."',`phone number`='".$_POST['ph']."',`email`='".$_POST['em']."',`qualification`='".$_POST['q']."',`username`='".$_POST['un']."' WHERE id='".$_SESSION['uid']."'";
mysqli_query($con,$up);

$upd="UPDATE `login` SET `username`='".$_POST['un']."' WHERE rid='".$_SESSION['uid']."'and type='doctor'";
mysqli_query($con,$upd);
header("Location:profile.php");
  }
  else
  {
  $up="UPDATE `doctor_registration` SET `name`='".$_POST['n']."',`specialization`='".$_POST['ql']."',`age`='".$_POST['a']."',`gender`='".$_POST['g']."',`address`='".$_POST['add']."',`phone number`='".$_POST['ph']."',`email`='".$_POST['em']."',`upload_certificate`='$pic',`image`='$img',`qualification`='".$_POST['q']."',`username`='".$_POST['un']."' WHERE id='".$_SESSION['uid']."'";
mysqli_query($con,$up);

$upd="UPDATE `login` SET `username`='".$_POST['un']."' WHERE rid='".$_SESSION['uid']."'and type='doctor'";
mysqli_query($con,$upd);
header("Location:profile.php");

  }
  
   ?>

 <script type="text/javascript">
 alert("updated successfully");
 //window.location.href="view_login_D.php";
 </script>
 <?php
 }
 ?>
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

    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Profile</h2>
                    <div class="page_link">
                        <a href="patient_home.php">Home</a>
                        <a href="profile.php">Profile</a>
                    </div>
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
                
               
     
               
               
               
               
               
               
               
               
   <div class="comment-form" style="margin-top:-100px">            
 <form  method="post" id="f" enctype="multipart/form-data">
<?php

$c="select * from  doctor_registration where id='".$_SESSION['uid']."'";
$e=mysqli_query($con,$c);
$r=mysqli_fetch_array($e);
?>
<table align="center">
<tr><td><img src="../image/<?php echo $r['image'];?>" height="150" width="150" style="border-radius:100px"/></td></tr>
</table>
<table align="center">
<tr><td>NAME :</td><td><?php echo $r['name'];?></td></tr>

<tr>
<td>AGE </td>
<td><?php echo $r['age'];?></td>
</tr>
<tr><td>GENDER </td><td><?php echo $r['gender'];?></td></tr>


<tr>

<tr><td>ADDRESS </td>
<td><?php echo $r['address'];?></td>
</tr>
<tr>
<td>PHONE NUMBER </td>
<td><?php echo $r['phone number'];?></td>
</tr>
<tr>
<td>EMAIL </td>
<td><?php echo $r['email'];?></td>
</tr>
<tr>
<td>SPECIALIZATION :</td><td><?php echo $r['specialization'];?></td>
</tr>
<tr>
<td>QUALIFICATION :</td><td><?php echo $r['qualification'];?></td>
</tr>
<tr>
<td>USERNAME </td>
<td><?php echo $r['username'];?></td>
</tr>
<tr><td>CERTIFICATE :</td><td><img src="../image/<?php echo $r['upload_certificate'];?>" height="50" width="50"/></td></tr>

<tr><td><input type="button" onClick="dis();" value="EDIT" class="btn submit_btn"></td></tr>
</table>
</form>
<form method="post" id="file" style="display:none" enctype="multipart/form-data">
<?php

$q="select * from  doctor_registration where id='".$_SESSION['uid']."'";
$x=mysqli_query($con,$q);
$f=mysqli_fetch_array($x);
?>
<table align="center">
<tr>
<td>NAME</td>
<td><input type="textbox" name="n" value="<?php echo $f['name'];?>" class="form-control"></td>
</tr>

<tr>
<td>AGE</td>
<td><input type="textbox" name="a" value="<?php echo $f['age'];?>" class="form-control"></td>
</tr>
<tr><td>GENDER</td><td>MALE&nbsp;&nbsp;<input type="radio" name="g" id="gm" value="male" <?php if($f['gender']=="male") echo "checked";?> />&nbsp;&nbsp;FEMALE&nbsp;&nbsp;<input type="radio" name="g" id="gf" value="female" <?php if($f['gender']=="female") echo "checked";?>/></td></tr>
<tr><td>IMAGE</td><td><input type="file" name="img" id="img" /><img src="../image/<?php echo $f['image'];?>" height="50" width="50"/></td></tr>

<tr>
<tr><td>ADDRESS</td>
<td><textarea name="add" class="form-control"><?php echo $f['address'];?></textarea></td>
</tr>
<tr>
<td>PHONE NUMBER</td>
<td><input type="textbox" name="ph" value="<?php echo $f['phone number'];?>" class="form-control"></td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="textbox" name="em" value="<?php echo $f['email'];?>" class="form-control"></td>
</tr>
<tr>
<td>SPECIALIZATION :</td>
<td><select name="ql" class="form-control">
<option><?php echo $f['specialization'];?></option>
<?php

$sql="select * from specialization";
$exe=mysqli_query($con,$sql);
while($ft=mysqli_fetch_array($exe))
{
?>
<option><?php echo $ft[1];?></option>
<?php
}?>
</select>
</td>
</tr>
<tr>
<td>QUALIFICATION :</td>
<td><input type="textbox" name="q" value="<?php echo $f['qualification'];?>" class="form-control"></td>
</tr>
<tr>
<td>USERNAME</td>
<td><input type="textbox" name="un" value="<?php echo $f['username'];?>" class="form-control"></td>
</tr>

<tr><td>UPLOAD CERTIFICATE :</td><td><input type="file" name="pic" id="pic" /><img src="../image/<?php echo $f['upload_certificate'];?>" height="50" width="50"/></td></tr>
<tr>
<td><input type="submit" name="UPDATE" value="UPDATE" class="btn submit_btn"></td></tr>
</table></form>
                </div>

        </div>
    </section>
    <!--================Contact Area =================-->

    <!-- start footer Area -->
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