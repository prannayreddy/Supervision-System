 <?php
 
 $q=mysqli_query($con,"select * from student where email='$student'");
$qq= mysqli_fetch_array($q);
 
 ?>
<div class="table-responsive well">
  <table class="table table-bordered">
   	<caption><h4 style="color:#00FF00" align="center">Your Assigned Supervisior</h4></caption>
	
	   	<tr class="active">
		
		<th>Stu_Name</th>
		<th>Supervisior</th>
		<th>Reply</th>
	</tr>
<?php
	$que=mysqli_query($con,"select * from   assign_supervisior where stu_id=$qq[0]");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="success">
		
		<!-- for student name -->
		<Td>
		<?php 
		$stu=mysqli_query($con,"select name from student where id=$row[1]");
		$stu1=mysqli_fetch_assoc($stu);
		echo $stu1['name'];
		?>
		</Td>
		<!-- studnet end-->
		
		<!-- for supervisior name -->
		<Td>
		<?php 
		$sup=mysqli_query($con,"select name,email from supervisor where id=$row[2]");
		$sup1=mysqli_fetch_assoc($sup);
		echo $sup1['name'];
		$eid=$sup1['email'];
		?>
		</Td>
		<!-- supervisior end-->
	
		
		

<td>
<?php echo "<a href='index.php?option=reply&super=$eid'><span class='glyphicon glyphicon-share-alt' style='color:black' aria-hidden='true'></span></a>";?></td>
	</tr>
	
	<?php } ?>
  </table>
  
