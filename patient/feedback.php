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
    <script type="text/javascript">
function validation()
{
  var symptom=/^[a-zA-Z ]+$/;
  var des=/^[a-zA-Z .]+$/;
 
  if(document.getElementById('sym').value.length==0)
 {
   alert("please enter your symptoms..");
   document.getElementById('at').focus();
   return false;
   }
   else if(!document.getElementById('sym').value.match(symptom))
   {
     alert(" does not match...please enter correctly...");
	 document.getElementById('at').focus();
	 return false;
   }
  
 else if(document.getElementById('ql').value=="0")
 {
   alert("please select specialization");
   document.getElementById('ql').focus();
   return false;
   }
   else if(document.getElementById('dr').value=="0")
 {
   alert("please select doctor");
   document.getElementById('dr').focus();
   return false;
   }

    else
  {
    return true;
  }
}
</script>

    
    <script language="javascript" >
document.getElementById("ql").onchange=function()
{

	if(window.XMLHttpRequest)
		xhttpobj=new XMLHttpRequest();
	else
		xhttpobj=new ActiveXObject("Microsoft.XMLHTTP")


      xhttpobj.onreadystatechange=function()
       {
 
	if(this.readyState==4 && this.status==200)
     	{
			 
		document.getElementById("dr").innerHTML=this.responseText;
	    } 
 };
 xhttpobj.open('post','doctor_list.php',true);
 xhttpobj.setRequestHeader('content-type','application/x-www-form-urlencoded');
 data="sp="+document.getElementById("ql").value;
 xhttpobj.send(data);
};
</script>
    
    
</head>

<body>
<?php 
				$con=mysqli_connect("localhost","root","","find_my_doctor");
				session_start();
				$a="SELECT * FROM `patient_registration` WHERE id='".$_SESSION['uid']."'";
				$e=mysqli_query($con,$a);
				$r=mysqli_fetch_array($e);
				
				if(isset($_POST['post']))
				{
				$dt=date("yy-m-d");
				$q="INSERT INTO `feedback`(`id`, `uid`, `comment`, `date`) VALUES ('','".$_SESSION['uid']."','".$_POST['cmnt']."','$dt')";
				mysqli_query($con,$q);
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
									<li class="nav-item " >
										<a class="nav-link" href="patient_home.php">Home</a>
									</li><li class="nav-item submenu dropdown ">
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
                                    <li class="nav-item submenu dropdown active">
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

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Feedback</h2>
                    <div class="page_link">
                        <a href="patient_home.php">Home</a>
                        <a href="">Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
				
    <section class="blog_area single-post-area p_120">
        <div class="container">
          <div class="row" style="margin-left:150px">
                <div class="col-lg-8 posts-list">
                  
                    <div class="comment-form" style="margin-top:-70px">
                        
                        <form method="post">
                        <?php
						$sql="select * from specialization";
						$ex=mysqli_query($con,$sql);
						?>
						
                        
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-12 ">
                                
                                <textarea name="cmnt" placeholder="comments" class="form-control" cols="8"></textarea>
								<input type="submit" name="post" value="POST"  class="btn submit_btn"  style="margin-top:30px; margin-left:200px">
                                </div>
                                
                            </div>
                            
                    </div>
                    
                   <?php
		$b="SELECT * FROM `feedback` WHERE uid='".$_SESSION['uid']."'";
		$ex=mysqli_query($con,$b);
		$count=mysqli_num_rows($ex);
		if($count>0)
		{?>

             <table align="center" border="1">
             <tr><th>#</th>
             <th>POSTED ON</th>
             <th>FEEDBACK</th>
             </tr>
                <?php
                $i=1;
                    while($m=mysqli_fetch_array($ex))
                    {?>
                    <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $m['date'];?></td>
                    <td><?php echo $m['comment'];?></td>
                    </tr>
                    <?php
                    $i=$i+1;
                    }?>
                    </table>
                    <?php
}?>
		 

                            
                        </form>
                    
                </div>
          </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================ start footer Area =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-6">
                    <div class="single-footer-widget">
                        <h6>Top Products</h6>
                        <ul class="footer-nav">
                            <li>
                                <a href="#">Managed Website</a>
                            </li>
                            <li>
                                <a href="#">Manage Reputation</a>
                            </li>
                            <li>
                                <a href="#">Power Tools</a>
                            </li>
                            <li>
                                <a href="#">Marketing Service</a>
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
                        <h3>012-6532-568-9746</h3>
                        <h3>012-6532-568-97468</h3>
                    </div>
                </div>
                <div class="col-lg-6  col-md-12">
                    <div class="single-footer-widget newsletter">
                        <h6>Newsletter</h6>
                        <p>You can trust us. we only send promo offers, not a single spam.</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="form-group row">
                                    <div class="col-lg-7 col-md-6 col-sm-12">
                                        <input name="EMAIL" placeholder="Your Email Address" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Your Email Address '"
                                            required="" type="email">
                                    </div>

                                    <div class="col-lg-5 col-md-12">
                                        <button class="nw-btn main_btn circle">get started
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
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
    </footer>
    <!--================ End footer Area =================-->




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
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="../js/theme.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$con=mysqli_connect("localhost","root","","find_my_doctor");
session_start();
$a="SELECT * FROM `patient_registration` WHERE id='".$_SESSION['uid']."'";
$e=mysqli_query($con,$a);
$r=mysqli_fetch_array($e);
?>
<form method="post" enctype="multipart/form-data">
<table align="center">

<tr><td><textarea name="cmnt" placeholder="comments"></textarea></td></tr>
<tr><td><input type="submit" name="post" value="POST" /></td></tr>
</table>
<?php
$b="SELECT * FROM `feedback` WHERE uid='".$_SESSION['uid']."'";
$ex=mysqli_query($con,$b);
$count=mysqli_num_rows($ex);
if($count>0)
{?>

 <table align="center" border="1">
 <tr><th>#</th>
 <th>POSTED ON</th>
 <th>FEEDBACK</th>
 </tr>
	<?php
	$i=1;
		while($m=mysqli_fetch_array($ex))
		{?>
        <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $m['date'];?></td>
        <td><?php echo $m['comment'];?></td>
        </tr>
        <?php
		$i=$i+1;
		}?>
        </table>
        <?php
}?>
		 

</form>
<?php
if(isset($_POST['post']))
{
$dt=date("yy-m-d");
$q="INSERT INTO `feedback`(`id`, `uid`, `comment`, `date`) VALUES ('','".$_SESSION['uid']."','".$_POST['cmnt']."','$dt')";
mysqli_query($con,$q);
}
?>
</body>
</html>
