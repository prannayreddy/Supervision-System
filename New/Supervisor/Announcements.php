 
                
                <div class="col-lg-12 well">
                    <h2 class="text-center text-danger">Announncements</h2>
					<table class="table table-striped table-responsive table-bordered" id='example'> 
                        
					<thead>
								<th>Sr. No</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Files</th>
		
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
		<Td><a href="../Announcements/<?php echo $row[3];?>"><?php echo $row[3];?></a></Td>
	</tr>
	
	<?php } ?>

                        </tbody>
                    </table>
          </div>