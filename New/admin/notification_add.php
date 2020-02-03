 <?php
extract($_POST);
extract($_SESSION); 
 if(isset($send))
 {

	$que=mysqli_query($con,"insert into notification values('','$admin','$sup','$msg',now())");
	//$err="<font color='blue'>Message send successfully</font>";
 echo "<script>alert('Notification sent')</script>";
 }
 ?>
 <div class="row">
<div class="col-sm-10 well">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Select Supervisior</label>
   <select class="form-control" name="sup">
  <option value="" selected="selected" disabled="disabled">Select Supervisior</option>
 	<?php 
	$sql=mysqli_query($con,"select * from supervisor");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value=$r[email]>".$r['name']."</option>";
	}
	?>
</select>
  </div> 

  
<div class="form-group">
    <label for="exampleInputEmail1">Add Notification</label>
   <textarea class="form-control" name="msg" rows="3" placeholder="Message" required></textarea>
  </div> 
<!-- programme end-->
<br/>
<div class="form-group">
    <button name="send" class="btn btn-success " type="submit">Send Notification</button>
</div>
	</form>	
		</div>
	</div>
</div>

	