<?php
session_start();
require('include/header.php');
require('include/config.php');
if(isset($login))
 {
$pass=md5($pass);
	$que=mysqli_query($con,"select email,pass from student where email='$Email' and pass='$pass'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
		$_SESSION['student']=$Email;
		echo "<script>window.location='student'</script>";
	 }
	 else
	 {
	  $err="<font color='red'>Invalid Student Login</font>";
	 }
	}
	
 ?>
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script src="js/ValidationFormScript.js"></script>
 
		<!-- Page Title -->
		<div class="section section-breadcrumbs" style="background:#000000">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Student Login</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	        <div class="container">
	        	
	        	<div class="row">
	        		<div class="col-md-8 well">
					
        			<form class="form-horizontal" id="form1" method="post">
  <fieldset>
    
    <!-- Form Name -->
    <legend>
   
    </legend>
    
    <!-- Text input-->
	<div class="form-group">
      <div class="col-md-4"></div>
	   <div class="col-md-5"><strong><?php echo @$err; ?></strong></div>
	</div>
	
    <div class="form-group">
      <label class="col-md-4 control-label" for="Email">Email</label>
      <div class="col-md-5">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
          <input id="Email" name="Email" type="text" value="<?php echo @$Email;?>" placeholder="Enter Your Email" class="form-control input-md">
        </div>
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Password">Password</label>
      <div class="col-md-5">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input id="password" name="pass" value="<?php echo @$pass;?>" type="password" placeholder="Enter Your Password" class="form-control input-md">
        </div>
      </div>
    </div>
    
   
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Submit"></label>
      <div class="col-md-4">
        <button id="Submit" name="login" class="btn btn-success" type="Submit">
		SignIn</button>
      </div>
    </div>
  </fieldset>
</form>
	
	        		</div>
                    <div class="col-lg-4">
                    	<?php require('include/student_sidebar.php'); ?>	  
                    </div>
	        	</div>
	        </div>
	    </div>

<?php require('include/footer.php'); ?>	    