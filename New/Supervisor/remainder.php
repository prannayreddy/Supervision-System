
<div class="table-responsive well">
  <table class="table">
   	<caption><h4 style="color:#00FF00" align="center">Give  Remainder to Student</h4></caption>
	<tr>
		<th colspan="5">
<a href="index.php?option=add_remainder"><spna class="glyphicon glyphicon-plus-sign"></span></a>&nbsp;&nbsp;</th>
	</tr>
	   	<tr class="active">
		<th>Sr. No</th>
		<th>Stu_Name</th>
		
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
	</tr>
<?php
	$que=mysqli_query($con,"select * from  remainder where supervisior ='$supervisior'");
		while($row= mysqli_fetch_array($que))
	{?>
<tr  class="success">
	<td><?php echo $row[0]; ?></td>
	<td><?php echo $row[1]; ?></td>
	<td><?php echo $row[3]; ?></td>
	<td><?php echo $row[4]; ?></td>		

<td>
<?php 
$mid=$row[0];
$sid=$row[2];
?>
<a href="reaminder_delete.php?msgid=<?php echo $mid;?>&super=<?php echo $sid;?>"><spna style="color:red" class="glyphicon glyphicon-remove-circle"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
	</tr>
	
	<?php } ?>
  </table>
  
