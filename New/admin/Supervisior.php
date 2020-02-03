<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 
            <div class="row">
							<div class="col-lg-10"></div>
			<div class="col-lg-2">
			<a title="Add New Supervisior" href="index.php?option=add_supervisior" class="btn btn-warning">Add New Supervisior</a>
</div>
            
			<div class="row">
                
                <div class="col-lg-12">
                    <table class="table table-striped table-responsive table-bordered" id='example'> 
                        
						<thead>
								<th>Sr. No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Course(Lecture)</th>
		<th>Status</th>
		<th>Delete</th>
						</thead>
                        <tbody>
                <?php
	$que=mysqli_query($con,"select * from  supervisor");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr>
		<Td><?php echo $row[0];?></Td>
		<Td><?php echo $row[1];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>
		<Td><?php echo $row[6];?></Td>
<Td>
<?php 
$seid= $row[2];
$s= $row[8];
if($s==1)
{
echo "<a title='activate supervisior' href='Supervisior_status.php?status=$s&eid=$seid'><span class='glyphicon glyphicon-user' style='color:red' aria-hidden='true'></span></a>";
}
else
{
echo "<a title='deactivate supervisior' href='Supervisior_status.php?status=$s&eid=$seid'><span class='glyphicon glyphicon-user' style='color:#00FF00' aria-hidden='true'></span></a>";
}
?>
</Td>
<td>
<?php echo "<a title='Delete supervisior' href='Supervisior_Delete.php?eid=$seid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
</td>
	</tr>
	
	<?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
   