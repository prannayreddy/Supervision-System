<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 
            <div class="row">
							<div class="col-lg-10"></div>
			<div class="col-lg-2">
			<a title="Add New Student" href="index.php?option=add_student" class="btn btn-warning">Add New Student</a>
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
		
		<th>Delete</th>
						</thead>
                        <tbody>
                <?php
	$que=mysqli_query($con,"select * from  student");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr>
		<Td><?php echo $row[0];?></Td>
		<Td><?php echo $row[1];?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>
		<Td><?php echo $row[6];?></Td>

<td>
<?php
$seid=$row['email'];
 echo "<a title='Delete Student' href='Student_Delete.php?eid=$seid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
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
   