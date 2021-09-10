
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
$idd=$_GET['id'];
$q="UPDATE `token` SET `status`='cancel' WHERE  tid='$idd'";
mysqli_query($con,$q);



?>
<script type="text/javascript">
alert("YOUR BOOKING IS CANCELLED");
window.location.href="my_booking.php";
</script>

</body>
</html>
