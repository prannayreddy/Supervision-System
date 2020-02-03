
<div class="table-responsive well">
  <table class="table">
   	<caption><h4 style="color:red" align="center">Notification</h4></caption>
	 <tr  class="danger">
	 	<th colspan="8"></th>
	 </tr>
	   	
		<tr class="active">
		<th>Sr. No</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		<th>Reply</th>
		</tr>
<?php
	$que=mysqli_query($con,"select * from  message where receiver='$supervisior'");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="success">
		<Td><?php echo $row[0];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>

<td>
<?php 
$email= $row[1];
$msgid= $row[0];
$to= $row[2];
?>
<?php //echo "<a href='Message_Delete.php?eid=$email&msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
<?php echo "<a href='index.php?option=reply&to=$email'><span class='glyphicon glyphicon-share-alt' style='color:black' aria-hidden='true'></span></a>";?>
</td>


	</tr>
	
	<?php } ?>
  </table>
  
