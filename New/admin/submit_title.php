<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 
							
            
			<div class="row">
                
                <div class="col-lg-12">
                    <table class="table table-striped table-responsive table-bordered" id='example'> 
                        
						<thead>
								<th>Sr. No</th>
		<th>Student Name</th>
		<th>SuperVisisor Name</th>
		<th>Title</th>
		<th>Descriptions</th>
		<th>Status</th>
		<th>Update Status</th>
		<th>Date</th>
						</thead>
                        <tbody>
                <?php
	$i=1;
	$que=mysqli_query($con,"select * from  project_title ");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr>
		<Td><?php echo $i;$i++;?></Td>
		<Td>
		<?php 
		$stu=mysqli_query($con,"select name from
		 student where id='".$row['stu_id']."'");
		$stu1=mysqli_fetch_assoc($stu);
		echo $stu1['name'];
		?>
		</Td>
		
		<Td>
		<?php 
		$sup=mysqli_query($con,"select name from
		 supervisor where id='".$row['super_id']."'");
		$sup1=mysqli_fetch_assoc($sup);
		echo $sup1['name'];
		?>
		</Td>
		
		<Td><?php echo $row['project_title'];?></Td>
		<Td><?php echo $row['project_description'];?></Td>
		<Td>
<?php 

if($row['title_status']==1)
{
echo "<span  style='color:red'>Not Approved</span>";
}
else
{
echo "<span  style='color:green'>Approved</span>";
}
?>
</Td>

<Td>
<?php 

if($row['title_status']==1)
{
echo "<a href='update_project_status.php?id=".$row['Tid']."&status=1'><span  style='color:red'>Not Approve</span></a>";
}
else
{
echo "<a href='update_project_status.php?id=".$row['Tid']."&status=0'><span  style='color:green'>Approve</span></a>";
}
?>
</Td>

		<Td><?php echo $row['date'];?></Td>


	</tr>
	
	<?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
         

        </div>
        

    </div>
   
 