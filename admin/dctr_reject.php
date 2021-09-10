<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$idd=$_GET['id'];
$q="UPDATE `doctor_registration` SET status='reject' where id='$idd'";
mysqli_query($con,$q);
header("Location:viewdctrapproved.php");
?>