 <?php
 extract($_POST);
 extract($_SESSION);
 
 if(isset($updpass))
 {
	$que=mysqli_query($con,"select * from admin where email='$admin'");
	$row= mysqli_fetch_array($que);

	 if($row['pass']==$op)
	 {
		if($np==$cp)
		{
		mysqli_query($con,"update admin set pass='$np' where email='$admin'");
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
<div class="row">
<div class="col-sm-10 well">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
 
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" class="form-control" name="op" id="exampleInputPassword1" value="<?php echo @$op;?>" placeholder="Old Password" required>
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" value="<?php echo @$np;?>" name="np" id="exampleInputPassword1" placeholder="New Password" required>
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="cp" id="exampleInputPassword1" value="<?php echo @$cp;?>" placeholder="Confirm Password" required>
  </div>
  
  

<br/>
<div class="form-group">
    <button name="updpass" class="btn btn-success" type="submit">Update Password</button>
</div>
	</form>	
		</div>
	</div>
</div>
