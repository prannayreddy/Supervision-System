 <?php

 if(isset($send))
 {

	$que=mysqli_query($con,"insert into message(sender,receiver,subject,message,date) values('$student','$to','$subj','$msg',now())");
	$err="<font color='blue'>Message send successfully</font>";
 
 }
 ?>
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	
	 
  <div class="form-group">
    <label for="exampleInputEmail1">To</label>
    <input type="email" class="form-control" name="to" id="exampleInputEmail1" placeholder="Enter email" required>
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
    <button name="send" class="btn btn-lg btn-primary btn-block" type="submit">Send Message</button>
</div>
	</form>	