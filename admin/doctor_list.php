<
<?php
$con=mysqli_connect("localhost","root","","find_my_doctor");
$id=$_GET['sid'];
?>
<select name="dr"  >
	<option value="">DOCTOR</option>
<?php
	$sql="select * from doctor_registration where specialization='$id'";
	$exe=mysqli_query($con,$sql);
	while($fetch=mysqli_fetch_array($exe))
	{
?>
		<option value="<?php echo $fetch['id'];?>"><?php echo $fetch['name'];?></option>
<?php
	}
?>
</select>


