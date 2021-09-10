<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$id=$_GET['id'];
//$q=$_GET['q'];
//$qt=$_GET['qt'];
//$mid=$_GET['mid'];

 	$up="UPDATE `medicine_booking` SET `status`='REJECT' WHERE id='$id'";
		 mysqli_query($con,$up);
		 ?><script type="text/javascript">
             alert("Request rejected");
           window.location.href="view_medicine_booking.php";
                     </script>