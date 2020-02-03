 <?php 
 extract($_POST);
 error_reporting(1);
 if(isset($signup))
 {
 
	 $que=mysqli_query($con,"select email from supervisor where email='$e'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
		$err="<font color='red'>This Supervisor already exists</font>";
	 }
	 else
	 {
	 $pass=md5($pass);
	 mysqli_query($con,"insert into supervisor values('','$n','$e','$pass','$mob','$gen','$prog','$course','0')");
	$err="<font color='green'>New Supervisor created </font>";
	 }
	
 
 }
 ?>

<div class="row">

<div class="col-sm-12">

<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title" style="color:#0099FF"  align="center">Add New Instructor</h3>
</div>
<div class="panel-body well">

 <form method="post">
	<div class="form-group">
	<div class="row">
	 <div class="col-lg-2"></div>
     <div class="col-lg-4">
	<h4><?php echo @$err;?></h4>
	</div>
	</div>
	</div>
  
	 <div class="form-group">
	 <div class="row">
	 <div class="col-lg-2"><label for="exampleInputEmail1">Name</label></div>
     <div class="col-lg-4">
    <input type="text" class="form-control" name="n" value="<?php echo $n;?>"  placeholder="Enter name" pattern="[a-z A-Z]*" required>
	</div>
	
<div class="col-lg-2"><label for="exampleInputEmail1">Email address</label></div>
     <div class="col-lg-4">
   <input type="email" value="<?php echo $e;?>" class="form-control" name="e" id="exampleInputEmail1" placeholder="Enter email" required>
	</div>
  </div> 
  </div>
  
  
  <div class="form-group">
  <div class="row">
	 <div class="col-lg-2">
    <label for="exampleInputEmail1">Password</label></div>
     <div class="col-lg-4"> <input type="password" class="form-control" name="pass" id="exampleInputPassword1"  value="<?php echo $pass;?>"placeholder="Password" >
	 </div>
	 
	 <div class="col-lg-2">
    <label for="exampleInputEmail1">Mobile</label></div>
     <div class="col-lg-4"> <input type="text" class="form-control" name="mob" maxlength="13" required value="<?php echo $mob;?>" pattern="[0-9 + ]*"  placeholder="Enter Mobile" >
	 </div>
  </div>
  </div>
  
  
   <div class="form-group">
  <div class="row">
	 <div class="col-lg-2">
    <label for="exampleInputEmail1">Gender</label></div>
     <div class="col-lg-4">   <select class="form-control" name="gen">
  <option>Male</option>
  <option>Female</option>
  </select>
	 </div>
	 
	 <div class="col-lg-2">
    <label for="exampleInputEmail1">Programme</label></div>
     <div class="col-lg-4"><select class="form-control" name="prog">
  <option>M.Tech</option>
  <option>B.Tech</option>
  <option>BCA</option>
  <option>MCA</option>
  <option>Other</option>
</select>
	 </div>
  </div>
  </div>
  
  
 


<div class="form-group">
<div class="row">
	 <div class="col-lg-2">
    <label for="exampleInputEmail1">Course</label></div>
   <div class="col-lg-4"> <select class="form-control" name="course">
  <option>Course1</option>
  <option>Course2</option>
  <option>Course3</option>
  <option>Course4</option>
  <option>Course5</option>

</select>
</div>
</div>
  </div> 

  
 <div class="form-group">
<div class="row">
	 <div class="col-lg-2"></div>
	 <div class="col-lg-4">
         <button name="signup" class="btn btn-primary " type="submit">Add New Instructor</button>
</form>	
</div>
</div>
</div>


	</div>
	</div>
</div>

	</div>