<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$idd=$_GET['id'];
$sql="delete  from doctor_details  where id='$idd'";
mysqli_query($con,$sql);
//header("location:doctor_schedule.php");
?>

 <script type="text/javascript">
 alert("Deleted successfully");
window.location.href="doctor_schedule.php";
 </script>

</body>
</html>
