 <?php
extract($_POST);
extract($_SESSION); 
 if(isset($send))
 {
$file=$_FILES['file']['name'];

	$que=mysqli_query($con,"insert into announcements values('','$sub','$msg','$file',now())");

move_uploaded_file($_FILES['file']['tmp_name'],"../Announcements/".$_FILES['file']['name']);


$err="<font color='green'>Announcements sent to all users</font>";
 
 //echo "<script>alert('Announcements sent to all users')</script>";
 }
 ?>
 <div class="row">
<div class="col-sm-10 well">

 <form method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Announcements Subejct</label>
   <input type="text" class="form-control" name="sub">
  
  </div> 

  
<div class="form-group">
    <label for="exampleInputEmail1">Add Announcements Descriptions</label>
   <textarea class="form-control" name="msg" rows="3" placeholder="Message" required></textarea>
</div> 
  
<div class="form-group">
    <label for="exampleInputEmail1">Upload files</label>
   <input type="file" class="form-control"  name="file">
</div>   


<div class="form-group">
    <button name="send" class="btn btn-success " type="submit">Send Announcements</button>
</div>

	</form>	
		</div>
	</div>
</div>
