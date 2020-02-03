<?php
if(isset($submit))
 {
 $stuid=$stuRes['id'];
 
 
	$que=mysqli_query($con,"select * from assign_supervisior  where stu_id='".$stuid."' ");
	
	
	$row= mysqli_num_rows($que);

	 if($row)
	 {
		$err="<font color='red'>You have already assigned your Supervisior !</font>";
		}
		else
		{
			$que1=mysqli_query($con,
			"select * from supervisior_request  where
			 stu_id='".$stuid."' ");
			
			
	$row1= mysqli_num_rows($que1);
		if($row1)
		{
		$err="<font color='red'>You have already requrested for Supervisior wait for approval By Admin</font>";
		}
		else
		{
		mysqli_query($con,"insert into supervisior_request 
		values('','".$stuRes['id']."','".$superID."','1',now())");
		
	
		$err="<font color='green'>Your Request has send to Admin for Supervisior Selection Wait for Approval</font>";
		}
		
		}
	 
}
 ?>
 
 <div class="col-lg-10 well">
 <form method="post">
   <div class="form-group">
    <a href="index.php?option=submit_title" class="btn btn-success">Back</a>
   
  </div>
 
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
 
  <div class="form-group">
    <label for="exampleInputPassword1">Select Your Supervisior</label>
    <select class="form-control" name="superID">
		<option value="">Select Supervisior</option>
		<?php 
		$que=mysqli_query($con,"select * from  supervisor");
		while($row= mysqli_fetch_array($que))
		{
		echo "<option value='".$row['id']."'>".$row['name']."</option>";
		}
		?>
	</select>
  </div>
  
   
  

<br/>
<div class="form-group">
    <button name="submit" class="btn  btn-success" type="submit">
	Submit Request</button>
</div>
	</form>	
	</div>
	
	