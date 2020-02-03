 <?php
extract($_POST);
extract($_GET);
extract($_SESSION); 

 if(isset($assign))
 {
	$que=mysqli_query($con,"insert into remainder values('','$stu','$supervisior','$msg',now())");
	$err="<font color='blue'>New Remainder sent to student</font>";
 
 }
 ?>
 
<div class="col-sm-10 well">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Select Student</label>
 
  <?php
   $quer=mysqli_query($con,"select id from supervisor where email='$supervisior'");
	$f=mysqli_fetch_array($quer);
	$sid=$f[0];
   ?>
   <select class="form-control" name="stu" required>
  <option value="" selected="selected" disabled="disabled">Select Student</option>
 	<?php 
	
	$stu=mysqli_query($con,"select * from assign_supervisior where super_id='$sid'");
	while($rr=mysqli_fetch_array($stu))
	{
	$q=mysqli_query($con,"select * from student where id=$rr[stu_id]");
	$ff=mysqli_fetch_array($q);
	
	echo "<option value=$ff[email]>".$ff['name']."</option>";
	}
	?>
</select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Message</label>
   <textarea class="form-control" name="msg" rows="3" required></textarea>
  </div> 
  
 	 
  
<br/>
<div class="form-group">
    <button name="assign" class="btn  btn-success" type="submit">Set Remainder</button>
</div>
	</form>	
		</div>
