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
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/responsive.css">
    

</head>

<body>
 <?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
session_start();
 if(isset($_POST['ADD']))
{
   $dt=date("y-m-d");
   $about=$_POST['at'];
     $dscrpn=$_POST['ds'];
	 $img=$_FILES['image']['name'];
	
		move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$img);


	 
	 $q="INSERT INTO `diet`(`id`, `did`, `date` , `about`, `description`, `image`) VALUES ('','".$_SESSION['uid']."','$dt','$about','$dscrpn','$img')";
	 mysqli_query($con,$q);
	 ?>
 <script type="text/javascript">
 alert("inserted successfully");
 window.location.href="adddiet.php";
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

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Diet Details</h2>
                    <div class="page_link">
                        <a href="doctor_home.php">Home</a>
                        <a href="">Diet</a>
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
            
            <tr><td>DIET :</td><td><input type="text" name="at" id="at" class="form-control" ></td></tr>
            <tr><td>DESCRIPTION :</td><td><textarea name="ds" id="ds" rows="5"  class="form-control"></textarea></td></tr>
            <tr><td>IMAGE :</td><td><input type="file" name="image"  id="img" class="form-control"/></td></tr>
            <center><input type="submit" name="ADD" value="ADD" onClick="return validation()" class="btn submit_btn"  style="margin-top:20px"/></center>
           
            
 
            
       </div>
<table align="center" border="1" style="margin-top:50px">

			<?php
            
            $c="select * from  diet where did='".$_SESSION['uid']."'";
			$e=mysqli_query($con,$c);
            $count=mysqli_num_rows($e);
            if($count>0)
            {?>
                <tr>
                <th>SLNO</th>
                <th>DATE</th>
                <th>DIET</th>
                <th>DESCRIPTION</th>
                <th>IMAGE</th>
                <th colspan="2">ACTION</th>
                </tr>
				<?php
                $i=1;
                while($r=mysqli_fetch_array($e))
				{
				?>
				<tr><td><?php echo $i;?></td>
				<td><?php echo $r['date'];?></td>
				<td><?php echo $r['about'];?></td>
				
				<td><?php echo $r['description'];?></td>
				<td><img src="../image/<?php echo $r['image'];?>" height="50" width="50"/></td>
				<td><a href="edit_diet.php?id=<?php echo $r[0];?>" class="genric-btn success circle">EDIT</a></td>
				<td><a href="delete_diet.php?id=<?php echo $r[0];?>" class="genric-btn danger circle">DELETE</a></td>
				</tr>
				<?php
				$i=$i+1;
				}

			}
			?>
			</table>
            </form>
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
