<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 <div class="row">
			<div class="col-lg-0"></div>
			<div class="col-lg-4">
			<a title="Add New Results" href="index.php?option=Add_Results" class="btn btn-success">Add New Results</a>
</div>
</div>


   <h2 class="text-center text-primary">Students Result</h2>         
			<div class="row">
   
                <div class="col-lg-12">
				
                    <table class="table table-striped table-responsive table-bordered" id='example'> 
                        
						<thead>
		<th>Sr. No</th>
		<th>Student Name</th>
		<th>Supervisior Name</th>
		<th>Results Subject</th>
		<th>Results</th>
		<th>Delete</th>
		
		
						</thead>
                        <tbody>
                <?php
	$que=mysqli_query($con,"select * from  results where 
	super_id='".$supRes['id']."'");
	$i=1;
	while($row= mysqli_fetch_array($que))
	{
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>

<Td>
		<?php 
		$stu=mysqli_query($con,"select name from student where id=$row[1]");
		$stu1=mysqli_fetch_assoc($stu);
		echo $stu1['name'];
		?>
		</Td>
		
		<Td>
		<?php 
		$sup=mysqli_query($con,"select name from supervisor where id=$row[2]");
		$sup1=mysqli_fetch_assoc($sup);
		echo $sup1['name'];
		?>
		</Td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['results']; ?></td>

		<td>
		<a href="delete_results.php?id=<?php echo $row['Rid']; ?>">
		<span class="glyphicon glyphicon-remove" style="color:#FF0000"></span>
		</a>
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
   