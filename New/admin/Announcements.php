<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 
            <div class="row">
							<div class="col-lg-5"></div>
			<div class="col-lg-5">
			<a title="Add New Supervisior" href="index.php?option=Add_Announcements" class="btn btn-warning">Add New Announcements</a>
</div>
            
			<div class="row">
                
                <div class="col-lg-12">
                    <table class="table table-striped table-responsive table-bordered" id='example'> 
                        
						<thead>
								<th>Sr. No</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Files</th>
		<th>Delete</th>
						</thead>
                        <tbody>
                <?php
	$que=mysqli_query($con,"select * from  announcements");
	$i=1;
	while($row= mysqli_fetch_array($que))
	{?>
	<tr>
		<Td><?php echo $i;$i++;?></Td>	
		<Td><?php echo $row[1];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[3];?></Td>
		

<td>
<?php echo "<a title='Delete Announcements' href='Announcements_Delete.php?id=".$row['id']."&file=".$row['attachments']."'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
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
   