<div class="col-lg-12 well" style="background:#f8f8f8">
<h1 class="page-header text-center text-primary" style="text-decoration:underline">All Reports</h1>

	<dt>Statistics</dt><br/>
	<ul type="circle">
	<?php 
$sup=mysqli_query($con,"SELECT count(*) as total from supervisor ");
$sup1=mysqli_fetch_assoc($sup);



//average for each supervisior
$stu=mysqli_query($con,"SELECT count(*) as total from student ");
$stu1=mysqli_fetch_assoc($stu);

	?>
		<a href="index.php?option=Supervisior"><li  class="btn btn-success">Number of Supervisior : <?php echo $sup1['total']; ?></li></a>
		<br/><br />
		<a href="index.php?option=Student">
		<li class="btn btn-warning">Number of Students : <?php echo $stu1['total']; ?></li></a>
		<br/>
	</ul>	
</dl>


<dl>
	<dt>Statistics</dt><br/>
	<ul type="circle">
	<?php 
$result=mysqli_query($con,"SELECT count(*) as total from message ");
$data=mysqli_fetch_assoc($result);
$noofmsg=$data['total'];


//average for each supervisior
$r=mysqli_query($con,"SELECT count(*) as total from supervisor ");
$d=mysqli_fetch_assoc($r);
$sup=$d['total'];
$avg=$noofmsg/$sup;
	?>
		<li>Number of messages in last 7 days : <?php echo $noofmsg; ?></li><br/>
		<li>Average number of messages for each supervisor : <?php echo  $avg;?> </li>
	</ul>	
</dl>
<hr/>


<?php 
$que=mysqli_query($con,"SELECT count(*) as total from  student");
$due=mysqli_fetch_assoc($que);
$totstu=$due['total'];


//supervisior assigned
$quee=mysqli_query($con,"SELECT count(*) as total from  assign_supervisior");
$duee=mysqli_fetch_assoc($quee);
$assignsup=$duee['total'];
?>
<dl>
	<dt> Exception reports</dt><br/>
	<ul type="circle">
		<li>Students without a supervisor: </li>
			<ul>
				<li>Total Student : <?php echo $totstu; ?></li>
				<li>Supervisior assigned : <?php echo $assignsup; ?></li>
			</ul>
		
		<br/><li> Students with no interaction for 7 days and 28 days : 5</li>
	</ul>	
</dl>
</div>