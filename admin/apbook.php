<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$id=$_GET['id'];
$q=$_GET['q'];
$qt=$_GET['qt'];
$mid=$_GET['mid'];

 	if($q > $qt || $q == 0)
 	{
  	?>
		  <script type="text/javascript">
          var x=confirm("out of stock....Do you want to add?");
          if(x==true)
          {
           window.location.href="medicine_edit.php?id=<?php echo $id;?>";
           }
          </script>
  	<?php
  
 	}
 	else
 	{
		 $up="UPDATE `medicine_booking` SET `status`='APPROVE' WHERE id='$id'";
		 mysqli_query($con,$up);
		
		 $stock=$qt;
		 $qnty=$q;
		 $diff=$stock-$qnty;
		 $upd="UPDATE `medicine` SET `quantity`='$diff' where id='$mid'";
		 mysqli_query($con,$upd);
		 ?>
		  <script type="text/javascript">
		 alert("Approved");
		 window.location.href="view_medicine_booking.php";
		 </script>
 	<?php
 	}

