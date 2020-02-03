 <?php
 if(isset($send))
 {

//student id
$q=mysqli_query($con,"select id from student where email='$student'");
$qq=mysqli_fetch_array($q);
$stuid=$qq['id'];


//supervisior id
$s=mysqli_query($con,"select super_id from assign_supervisior where stu_id='$stuid'");
$ss=mysqli_fetch_array($s);
$supid=$ss['super_id'];

//supervisior name
$qq=mysqli_query($con,"select email from supervisor where id='$supid'");
$qqq=mysqli_fetch_array($qq);
$supervisior=$qqq['email']." ";




	$file=$_FILES['f']['name'];

	$que=mysqli_query($con,"insert into upload_coursework values('','$student','$sub','$file','$supervisior',now())");
	if(!file_exists("../coursework/$student"))
	{
	mkdir("../coursework/$student");
	move_uploaded_file($_FILES['f']['tmp_name'],"../coursework/$student/".$_FILES['f']['name']);
	}
	move_uploaded_file($_FILES['f']['tmp_name'],"../coursework/$student/".$_FILES['f']['name']);
	$err="<h3><font color='green'>Coursework uploaded and Sent to Your Supervisior</font></h3>";


 //echo "<script>window.location='index.php?option=Message'</script>";
 }
 ?>

 <div class="col-lg-10 well">
 <form method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>
  </div>

	<div class="form-group">
    <label for="exampleInputFile">Subject</label>
    <input type="text" class="form-control"  name="sub">
  </div>

	<div class="form-group">
    <label for="exampleInputFile">Upload Coursework</label>
    <input type="file" class="form-control" name="f">
  </div>



<br/>
<div class="form-group">
    <button name="send" class="btn  btn-primary" type="submit">Upload Coursework</button>
</div>
	</form>

	</div>
