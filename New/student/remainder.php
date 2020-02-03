
<div class="table-responsive">
  <table class="table">
   	<caption><h4 style="color:#00FF00" align="center">Remainder Table</h4></caption>
	 
		<tr class="active">
		<th>Sr. No</th>
		<th>Supervisior</th>
		<th style="color:#FF0000">Remainder</th>
		<th>Date</th>
		</tr>
<?php
	$que=mysqli_query($con,"select * from  remainder where student='$student'");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="success">
		<Td><?php echo $row[0];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		


	</tr>
	
	<?php } ?>
  </table>
  
