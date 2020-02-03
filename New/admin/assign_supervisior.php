 <?php
extract($_POST);
extract($_GET);
extract($_SESSION); 

 if(isset($assign))
 {
 //$que=mysqli_query("select id from supervisor where email='$sup'");
$result=mysqli_query($con,"SELECT * from assign_supervisior  where super_id='$sup'");
$countStu=mysqli_num_rows($result);
//echo $countStu;
	if($countStu<5)
	{
		foreach($stu as $s)
		{
		$que1=mysqli_query($con,"select * from assign_supervisior where stu_id='$s' and super_id='$sup'");
		$r=mysqli_num_rows($que1);
		if($r)
		{
		$err="<span style='color:red'>This student has already assigned a Supervisior</span>";
		}
		else
		{
		$que=mysqli_query($con,"insert into assign_supervisior values('','$s','$sup',now())");
		
		}
		$err="<span style='color:green'>Supervisior assigned</span>";
		}
		
		
		}		
 		
	
	else
	{	
		$err="<span style='color:red'>Can't Assign more than 5 Students to a Supervisior</span>";
	}	
 
 }
 ?>
 
 <div class="row">
<div class="col-sm-0">
</div>
<div class="col-sm-10">

<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title" style="color:#8F0BB0;" align="center">Assign Supervisior</h2>
</div>
<div class="panel-body">

		
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Select Student</label>
   <select class="form-control" name="stu[]" multiple="multiple">
  <option value="" selected="selected" disabled="disabled">Select Student</option>
 	<?php 
	$stu=mysqli_query($con,"select * from student");
	while($rr=mysqli_fetch_array($stu))
	{
	$stuR=mysqli_query($con,"select * from assign_supervisior where stu_id='".$rr['id']."'");
	$StuRes=mysqli_fetch_array($stuR);
		if($StuRes['stu_id']!=$rr['id'])
		{
	echo "<option value=$rr[0]>".$rr['name']."</option>";
		}
	}
	?>
</select>
  </div>
  
  
<div class="form-group">
    <label for="exampleInputEmail1">Assign Supervisior</label>
   <select class="form-control" name="sup">
  <option value="" selected="selected" disabled="disabled">Select Supervisior</option>
 	<?php 
	$sql=mysqli_query($con,"select * from supervisor");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value=$r[0]>".$r['name']."</option>";
	}
	?>
</select>
  </div> 
  

  
 	 
  
<br/>
<div class="form-group">
    <button name="assign" class="btn  btn-primary " type="submit">Assign Supervisior</button>
</div>
	</form>	
	
		</div>
	</div>
</div>

	</div>		