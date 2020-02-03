 <?php
extract($_POST);
extract($_GET);
extract($_SESSION); 

 if(isset($send))
 {

	$que=mysqli_query($con,"insert into message(sender,receiver,subject,message,date) values('$admin','$to','$subj','$msg',now())");
	//$err="<font color='blue'>Message send successfully</font>";
 echo "<script>window.location='index.php?option=Message'</script>";
 }
 ?>
 
 <div class="row">
<div class="col-sm-0">
</div>
<div class="col-sm-10">

<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title" style="color:#8F0BB0;" align="center">Message Forward</h3>
</div>
<div class="panel-body">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	
<div class="form-group">
    <label for="exampleInputEmail1">Select user</label>
   <select class="form-control" name="sup">
  <option value="" selected="selected" disabled="disabled">Select user</option>
 	<?php 
	$sql=mysqli_query($con,"select * from supervisor");
	
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value=$r[0]>".$r['name']."</option>";
	}
	?>
</select>
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
    <input type="text" class="form-control" value="<?php echo @$sub; ?>" name="subj" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  
  
<div class="form-group">
    <label for="exampleInputEmail1">Message</label>
   <textarea class="form-control" name="msg" rows="3" required><?php echo @$msg; ?></textarea>
  </div> 
<!-- programme end-->
<br/>
<div class="form-group">
    <button name="send" class="btn  btn-success" type="submit">Forward</button>
</div>
	</form>	
		</div>
	</div>
</div>

	</div>	