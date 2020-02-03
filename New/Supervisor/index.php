<?php 
session_start();
require("../include/config.php");
 extract($_SESSION);
 extract($_REQUEST);
 
 if($supervisior=="")
 {
 header('location:../index.php?option=login');
 }
 $sup=mysqli_query($con,"select * from supervisor where email='".$supervisior."'");
$supRes=mysqli_fetch_array($sup);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Supervisior Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color:#FFFFFF">
		  <?php echo "Hello  !!! ".$supRes['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
         
           
            <li><a href="logout.php" title="click here to logout" style="color:#FFFFFF"><span style="color:#FFFFFF" class="glyphicon glyphicon-log-out"></span></a></li>
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="border-right:1px solid #CCC;background:#101010">
          <ul class="nav nav-sidebar">
		  
           
			 <li><a href=""><img src="../img/user11.jpg" width="140" class="img-rounded"></li>
			 
			  <li><a href="index.php"><span class="glyphicon glyphicon-edit"></span> Dashboard </a></li>
			
			
			 <li><a href="index.php?option=student_assigned"><span class="glyphicon glyphicon-edit"></span> All Assigned Students </a></li>
			
			<li><a href="index.php?option=submit_title"><span class="glyphicon glyphicon-edit"></span> Submit Title</a></li>
			
            <li><a href="index.php?option=remainder"><span class="glyphicon glyphicon-edit"></span>  Remainder</a></li>
			
            <li><a href="index.php?option=coursework"><span class="glyphicon glyphicon-edit"></span>  See Coursework</a></li>
			
			 <li><a href="index.php?option=results"><span class="glyphicon glyphicon-edit"></span> Update Results</a></li>
			
			
			<li><a href="index.php?option=notification"><span class="glyphicon glyphicon-edit"></span>  Notification From Admin</a></li>
			
			<li><a href="index.php?option=Announcements" title="Announcements for all supervisior and Student"><span class="glyphicon glyphicon-check"></span>Announcements From Admin</a></li>
			
			 <li><a href="index.php?option=update_password"><span class="glyphicon glyphicon-edit"></span> Update_Password</a></li>
			<!--
			<li><a href="index.php?option=inbox">Inbox</a></li>
			<li><a href="index.php?option=sent">Sent</a></li>
			-->
			
          </ul>
          
        </div>
		<!-- sidebar end-->
        
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background:#000000;border-top:1px solid #fff">
         
		
			<?php 
			@$option=$_REQUEST['option'];
			if($option!="")
			{
				if($option=="results")
				{
				include('results.php');
				}
				
				if($option=="Add_Results")
				{
				include('Add_Results.php');
				}
				
				if($option=="Announcements")
				{
				include('Announcements.php');
				}
			
				if($option=="submit_title")
				{
				include('submit_title.php');
				}
			
				if($option=="student_assigned")
				{
				include('student_assigned.php');
				}
				if($option=="inbox")
				{
				include('inbox.php');
				}
				if($option=="update_password")
				{
				include('update_password.php');
				}
				if($option=="remainder")
				{
				include('remainder.php');
				}
				if($option=="add_remainder")
				{
				include('add_remainder.php');
				}
				if($option=="coursework")
				{
				include('coursework.php');
				}
				if($option=="notification")
				{
				include('notification.php');
				}
				if($option=="reply")
				{
				include('reply.php');
				}
				
			}else{
			?>
			 
          <div class="col-lg-12 well">
		  <h1 class="page-header text-center" style="color:#00FF00">Supervisor Dashboard</h1>
            <?php 
			
		$sel=mysqli_query($con,"select * from supervisor where email='$supervisior'");
		$row =	mysqli_fetch_array($sel);	
		$c=$row[0];
			
		$que=mysqli_query($con,"SELECT * from  assign_supervisior where super_id='$c'");
		$count=0;
		while($due=mysqli_fetch_assoc($que))
		{
		//$totstu=$due['total'];
		$count++;
		}	
		
			
			?>
			
<div class="col-lg-4">		
	<a href="index.php?option=student_assigned">
	<h4 align="left" class="btn btn-success" style="padding:50px;">
			Students assigned <?php echo $count; ?> </h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=Announcements">
	<h4 align="left" class="btn btn-danger" style="padding:50px;">Announcements</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=notification">
	<h4 align="left" class="btn btn-warning" style="padding:50px;">Notification</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=coursework">
	<h4 align="left" class="btn btn-success" style="padding:50px;">Coursework</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=remainder">
	<h4 align="left" class="btn btn-warning" style="padding:50px;">Set Remainder</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=submit_title">
	<h4 align="left" class="btn btn-danger" style="padding:40px;">Approve/Reject Title</h4>
</a>
</div>
			
			
          </div>

          
		  <?php }?>
		  
        </div>
      </div>
    </div>

    <!-- /#wrapper -->
    <script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({"lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]});
        } );
    </script>
  </body>
</html>
