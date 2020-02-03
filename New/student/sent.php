
<div class="table-responsive well">
  <table class="table">
   	<caption><h4 style="color:#00FF00" align="center">Sent Message</h4></caption>
	 
		<tr class="active">
		<th>Sr. No</th>
		<th>Sender</th>
		<th>Receiver</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
		
		</tr>
<?php
	$que=mysqli_query($con,"select * from  message where sender='$student'");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="success">
		<Td><?php echo $row[0];?></Td>
		<Td><?php echo $row[1];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>

<td>
<?php 
$sen= $row[1];
$msgid= $row[0];
$rec= $row[2];
?>
<?php echo "<a href='sent_message_Delete.php?eid=$sen&msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
</td>


	</tr>
	
	<?php } ?>
  </table>
  
