 <?php
if(isset($save))
 {
	$que=mysqli_query($con,"insert into results
	 values('','$stu','".$supRes['id']."','$sub','$res',now())");
	$err="<font color='green'>Results Added Successfully</font>";
 
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
	
	echo "<option value=$ff[id]>".$ff['name']."</option>";
	}
	?>
</select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Result Subject</label>
   <input type="text" placeholder="Enter Subejct Name" class="form-control" name="sub">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Subject marks</label>
   <input type="text" placeholder="Enter Subejct mark" class="form-control" name="res">
  </div> 
  
 	 
  
<br/>
<div class="form-group">
    <button name="save" class="btn  btn-success" type="submit">Add Results</button>
</div>
	</form>	
		</div>
