<?php
  
 if(isset($_GET['sub']))
 {
  
 if(isset($submit))
 {
	$que=mysqli_query($con,"select * from project_title where project_title='$title'");
	$row= mysqli_num_rows($que);

	 if($row)
	 {
		$err="<font color='red'>This project title is submitted by others !</font>";
		}
		else
		{
			$que1=mysqli_query($con,"select * from project_title where stu_id='".$stuRes['id']."'");
	$row1= mysqli_num_rows($que1);
		if($row1)
		{
		$err="<font color='red'>You have already submitted Your title wait for approval</font>";
		}
		else
		{
		mysqli_query($con,"insert into project_title 
		values('','".$stuRes['id']."','".$supId."','$title','$des','1',now())");
		
		
		$err="<font color='green'>Your Title has been Submitted Wait for Approval</font>";
		}
		
		}
	 
 }
 ?>
 
 <div class="col-lg-10 well">
 <form method="post">
   <div class="form-group">
    <a href="index.php?option=submit_title" class="btn btn-success">Back</a>
   
  </div>
 
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
 
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Your Project Title</label>
    <input type="text" class="form-control" name="title" placeholder="project title">
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">Project Descriptions</label>
    <textarea class="form-control" name="des" placeholder="Project Descriptions"></textarea>
  </div>
  
 
  

<br/>
<div class="form-group">
    <button name="submit" class="btn  btn-success" type="submit">
	Submit Title</button>
</div>
	</form>	
	</div>
	
	<?php 
	}
	else
	{
	
	?>
	
	<div id="page-wrapper" style="background:#fff;padding:20px;color:#000">
 
            <div class="row">
							<div class="col-lg-10"></div>
			<div class="col-lg-2">
			<a title="Submit Your title" href="index.php?option=submit_title&sub=save" class="btn btn-warning">Submit your Title</a>
</div>
            
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
		<th>Date</th>
						</thead>
                        <tbody>
                <?php
	$i=1;
	$que=mysqli_query($con,"select * from  project_title");
		while($row= mysqli_fetch_array($que))
	{?>
	<tr>
		<Td><?php echo $i;$i++;?></Td>
		<Td><?php echo $stuRes['name'];?></Td>
		
		
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
		<Td><?php echo $row['date'];?></Td>


	</tr>
	
	<?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
         

        </div>
        

    </div>
   
 
	<?php }?>