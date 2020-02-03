
<div class="table-responsive well">
  <table class="table">
   	<caption><h3 class="text-center text-primary">See Coursework Uploaded by  Student</h3></caption>

	<tr class="active">
		<th>Sr. No</th>
		<th>Stu_Name</th>
		<th>Coursework</th>
		<th>Date</th>
	</tr>

<?php
$que=mysqli_query($con,"select * from upload_coursework where supervisior ='$supervisior '");
$i=1;
while($row=mysqli_fetch_array($que))
{
$user=$row[1];
$file=$row[2];

?>
	<tr>
		<td><?php echo $i;$i++;?></td>
		<td><?php echo $row[1];?></td>
		<td><a href="../coursework/<?php echo $user; ?>"><?php echo $row[2];?></a></td>
		<td><?php echo $row['date'];?></td>

	</tr>

<?php } ?>


  </table>
