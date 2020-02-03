
<div class="table-responsive">
  <table class="table">
   	<caption><h4 style="color:#00FF00" align="center">Message Table</h4></caption>
	 <tr  class="danger">
	 	<th colspan="8"><a href="index.php?option=Message_send"><span class=" glyphicon glyphicon-plus-sign" style="color:black"></span></a></th>
	 </tr>
	   	
		<tr class="active">
		<th>Sr. No</th>
		<th>Sender</th>
		<th>Receiver</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Reply</th>
		</tr>
<?php
	$que=mysqli_query($con,"select * from  message where receiver='$student'");
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
<?php echo "<a href='Message_Delete.php?eid=$rec&msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
</td>
<td>
<?php echo "<a href='index.php?option=reply&to=$sen'><span class='glyphicon glyphicon-share-alt' style='color:black' aria-hidden='true'></span></a>";?>
</td>


	</tr>
	
	<?php } ?>
  </table>
  
