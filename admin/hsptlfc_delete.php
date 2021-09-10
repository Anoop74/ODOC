<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$idd=$_GET['id'];
$v="DELETE FROM `hospital_facilities` WHERE id='$idd'";
mysqli_query($con,$v);
?>
<script type="text/javascript">
 alert("deleted successfully");
 window.location.href="addfacilities.php";
 </script>