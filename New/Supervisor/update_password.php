 <?php
 if(isset($updpass))
 {
 $pass=md5($op);
 
	$que=mysqli_query($con,"select * from supervisor where email='$supervisior' and pass='$pass'");
	$row= mysqli_num_rows($que);

	 if($row)
	 {
		if($np==$cp)
		{
		$npass=md5($np);
		mysqli_query($con,"update supervisor set pass='$npass' where email='$supervisior'");
		
		$err="<font color='green'>Password Update Successfully !</font>";
		}
		else
		{
		$err="<font color='red'>New Password and Confirm not matched</font>";
		}
	 }
	 else
	 {
	  $err="<font color='red'>Old Password doesn't match</font>";
	 }
 
 }
 ?>

<div class="col-lg-12 well">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
 
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" class="form-control" value="<?php echo @$op; ?>" name="op" id="exampleInputPassword1" placeholder="Old Password" required>
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" value="<?php echo @$np; ?>" class="form-control" name="np" id="exampleInputPassword1" placeholder="New Password" required>
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" value="<?php echo @$cp; ?>" class="form-control" name="cp" id="exampleInputPassword1" placeholder="Confirm Password" required>
  </div>
  
  

<br/>
<div class="form-group">
    <button name="updpass" class="btn btn-success" type="submit">Update Password</button>
</div>
	</form>	
		</div>
	