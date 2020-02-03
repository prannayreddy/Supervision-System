<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 
            <div class="row">
							<div class="col-lg-4"></div>
			<div class="col-lg-2">
			<a title="Send notification" href="index.php?option=notification_add" class="btn btn-warning">Send new notification</a>
</div>
            
			<div class="row">
                
                <div class="col-lg-12">
<table class="table table-striped table-responsive table-bordered" id='example'> 
                        
						<thead>
								<th>Sr. No</th>
		<th>Supervisior</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
						</thead>
                        <tbody>
                <?php
	$que=mysqli_query($con,"select * from  notification");
	$i=1;	
	while($row= mysqli_fetch_array($que))
	{?>
	<tr>
		<Td><?php echo $i;$i++?></Td>
		<Td><?php echo $row['supervisior'];?></Td>
		<Td><?php echo $row['notification'];?></Td>
		<Td><?php echo $row['date'];?></Td>
		

<td>
<?php echo "<a title='Delete supervisior' href='notification_Delete.php?msgid=".$row['id']."'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
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
   