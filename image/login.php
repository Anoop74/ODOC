<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Acme Web Deisgn | Services</title>
    <link rel="stylesheet" href="css/index1.css">
	<link rel="stylesheet" href="css/log1.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Pick</span> Me</h1>
        </div>
        <nav>
		          <ul>
            <li class="current"><a href="inde.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
			<li><a href="about.html">Feedback</a></li>
			<li><a href="about.html">Contact</a></li>
			<li><a href="about.html">About</a></li>
          </ul>

        </nav>
      </div>
    </header>

    <section id="main">
      <div class="container">
       <aside id="sidebar">
        <div class="login-box">
    <img src="bgimg/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form method="post">
            <p>Username</p>
            <input type="text" name="un" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login"> 
            <a href="#">Forget Password</a>
            <a href="register/register.php">click here for register</a>
			<?php
$con=mysqli_connect("localhost","root","","pick_me");
if(isset($_POST['submit']))
{
 $name=$_POST['un'];
 $pwd=$_POST['pwd'];
  $sql="select * from login where email='$name' && password='$pwd'";
  $exe=mysqli_query($con,$sql);
  $fetch=mysqli_fetch_array($exe);
  $count=mysqli_num_rows($exe);
  if($count>0)
  {
  session_start();
  $idd=$fetch['rid'];
  $_SESSION['uid']=$idd;
  $type=$fetch['type'];
  if($type=="emp")
  {
  header("location:employee/employee.php");
  }
  elseif($type=="admin")
  {
    header("location:admin/admin.php");
	}
	 elseif($type=="company")
    {
    header("location:company/company.php");
	}
	}
	else
	{
	echo "incorrect user or pass";
	}
 }
 ?>
            </form>
        
        
        </div>

        </aside>
      </div>
    </section>
  </body>
</html>
