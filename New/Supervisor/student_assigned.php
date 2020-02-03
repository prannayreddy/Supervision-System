<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 
            
			<div class="row">
                
                <div class="col-lg-12">
                    <table class="table table-striped table-responsive table-bordered" id='example'> 
                        
						<thead>
		<th>Sr. No</th>
		<th>Student Name</th>
		<th>Supervisior Name</th>
		
						</thead>
                        <tbody>
                <?php
	$que=mysqli_query($con,"select * from  assign_supervisior where super_id='".$supRes['id']."'");
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
   