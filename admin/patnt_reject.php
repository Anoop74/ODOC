<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$idd=$_GET['id'];
$q="UPDATE `patient_registration` SET status='reject' where id='$idd'";
mysqli_query($con,$q);
//header("Location:view_patient.php");
?> <script type="text/javascript">
 alert("Rejected successfully");
window.location.href="view_patient.php";
 </script>