 <?php
if(isset($send))
{

	$que=mysqli_query($con,"insert into message(sender,receiver,subject,message,date) values('$student','$to','$subj','$msg',now())");
$err="<font color='green'>Message send successfully to your supervisior</font>";
 //echo "<script>window.location='index.php?option=Message'</script>";
 }
 ?>

<div class="col-lg-10 well"> 
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Supervisior</label>
    <input type="email" class="form-control" 
	value="<?php echo @$_REQUEST['super']; ?>" name="to" id="exampleInputEmail1" placeholder="Enter email" required readonly="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
    <input type="text" class="form-control" name="subj" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  
  
<div class="form-group">
    <label for="exampleInputEmail1">Message</label>
   <textarea class="form-control" name="msg" rows="3" required></textarea>
  </div> 
<!-- programme end-->
<br/>
<div class="form-group">
    <button name="send" class="btn btn-success" type="submit">Reply to Supervisior</button>
</div>
	</form>	
	
	</div>