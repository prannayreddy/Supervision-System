<div class="table-responsive">
  <table class="table">
   	<caption><h4 style="color:#00FF00" align="center">Message</h4></caption>
	 <tr  class="danger">
	 	<th colspan="8"><a href="index.php?option=Message_send" class="btn btn-success">Send New Message</a></th>
	 </tr>
	   	
		<tr class="active">
		<th>Sr. No</th>
		<th>Supervisior</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Reply</th>
		<th>Forward</th>
		</tr>
<?php
	$que=mysqli_query($con,"select * from  message");
	$i=1;
	while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="success">
		<Td><?php echo $i;$i++;?></Td>
		
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>

<td>
<?php 
$email= $row[1];
$msgid= $row[0];
$to= $row[2];
?>
<?php echo "<a href='Message_Delete.php?eid=$email&msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
</td>
<td>
<?php echo "<a href='index.php?option=reply&to=$to'><span class='glyphicon glyphicon-share-alt' style='color:black' aria-hidden='true'></span></a>";?>
</td>
<Td>
<?php
$sub=$row[3];
$msg=$row[4];
 echo "<a href='index.php?option=forward&sub=$sub&msg=$msg'><span class='glyphicon glyphicon-forward' style='color:black' aria-hidden='true'></span></a>";?>

</td>


	</tr>
	
	<?php } ?>
  </table>
  
