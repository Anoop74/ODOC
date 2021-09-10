<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$mid=$_GET['id'];
$v="DELETE FROM `medicine` WHERE id='$mid'";
mysqli_query($con,$v);
?>
<script type="text/javascript">
 alert("deleted successfully");
 window.location.href="addmedicine.php";
 </script>