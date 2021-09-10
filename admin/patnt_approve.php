<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$idd=$_GET['id'];
$q="UPDATE `patient_registration` SET status='approve' where id='$idd'";
mysqli_query($con,$q);

$v="select * from patient_registration where id='$idd' and status='approve'";
$f=mysqli_query($con,$v);
$g=mysqli_fetch_array($f);
$u=$g['user name'];
$w=$g['password'];

$b="insert into login values('','$idd','$u','$w','patient')";
 mysqli_query($con,$b);
?><script type="text/javascript">
 alert("Approved successfully");
window.location.href="view_patient.php";
 </script>