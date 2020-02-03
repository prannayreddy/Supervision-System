 <?php

 if(isset($updpass))
 {
	$que=mysqli_query($con,"select * from student where email='$student'");
	$row= mysqli_fetch_array($que);

	 if($row[3]==$op)
	 {
		if($np==$cp)
		{
		mysqli_query($con,"update student set pass='$np' where email='$student'");
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
 <div class="col-lg-10 well">
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
 
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" class="form-control" name="op" id="exampleInputPassword1" placeholder="Old Password">
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" name="np" id="exampleInputPassword1" placeholder="New Password">
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="cp" id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
  
  

<br/>
<div class="form-group">
    <button name="updpass" class="btn  btn-primary" type="submit">Update Profile</button>
</div>
	</form>	
	</div>