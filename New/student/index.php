<?php
session_start();
require('../include/config.php');
error_reporting(1);
extract($_SESSION);
extract($_REQUEST);


 if($student=="")
 {
 header('location:../index.php?option=login');
 }
$stu=mysqli_query($con,"select * from student where email='".$student."'");
$stuRes=mysqli_fetch_array($stu);

$sup=mysqli_query($con,"select * from assign_supervisior where
 stu_id='".$stuRes['id']."'");

$supRes=mysqli_fetch_array($sup);
$supId=$supRes['super_id'];

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

    <title>Student Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#" style="color:#FFFFFF"><?php echo "Welcome Back !!  ".$stuRes[
		  'name'];?></a>
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
            <li><a href=""><img src="../img/user11.jpg" style="width:120px;height:120px" class="img-rounded"></li>

		    <li><a href="index.php"><span class="glyphicon glyphicon-edit"></span> My Dashboard</a></li>
			<li><a href="index.php?option=supervisior"><span class="glyphicon glyphicon-edit"></span> Assigned Supervisior</a></li>

			<li><a href="index.php?option=supervisior_request"><span class="glyphicon glyphicon-edit"></span> Request for Supervisior</a></li>

			<li><a href="index.php?option=submit_title"><span class="glyphicon glyphicon-edit"></span>Submit Title</a></li>

            <li><a href="index.php?option=remainder"><span class="glyphicon glyphicon-edit"></span> Remainder</a></li>
            <li><a href="index.php?option=upload_course"><span class="glyphicon glyphicon-edit"></span> Upload Coursework</a></li>

			<li><a href="index.php?option=results"><span class="glyphicon glyphicon-edit"></span> Check Results</a></li>

			<li><a href="index.php?option=inbox"><span class="glyphicon glyphicon-edit"></span> Inbox</a></li>
			<li><a href="index.php?option=sent"><span class="glyphicon glyphicon-edit"></span> Sent</a></li>

			<li><a href="index.php?option=Announcements" title="Announcements for all supervisior and Student"><span class="glyphicon glyphicon-check"></span>Announcements From Admin</a></li>


			 <li><a href="index.php?option=update_password"><span class="glyphicon glyphicon-lock"></span> Update_Password</a></li>
          </ul>

        </div>
		<!-- sidebar end-->

		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background:#000000">


			<?php
			$option=$_REQUEST['option'];
			if($option!="")
			{
				if($option=="Announcements")
				{
				include('Announcements.php');
				}

				if($option=="results")
				{
				include('results.php');
				}

				if($option=="upload_course")
				{
				include('upload_course.php');
				}
				if($option=="supervisior_request")
				{
				include('supervisior_request.php');
				}
				if($option=="submit_title")
				{
				include('submit_title.php');
				}
				if($option=="inbox")
				{
				include('inbox.php');
				}
				if($option=="sent")
				{
				include('sent.php');
				}
				if($option=="update_password")
				{
				include('update_password.php');
				}

				if($option=="update_profile")
				{
				include('update_profile.php');
				}
				if($option=="supervisior")
				{
				include('supervisior.php');
				}
				if($option=="reply")
				{
				include('supervisior_reply.php');
				}
				if($option=="remainder")
				{
				include('remainder.php');
				}
				if($option=="Message_send")
				{
				include('Message_send.php');
				}

			}else{
			?>

          <div class="col-lg-10 well">
		   <h1 class="text-center text-primary">My Dashboard</h1>
         <div class="col-lg-4">
	<a href="index.php?option=supervisior">
	<h4 align="left" class="btn btn-success" style="padding:50px;">
			Supervisor assigned  </h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=Announcements">
	<h4 align="left" class="btn btn-danger" style="padding:50px;">Announcements</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=supervisior_request">
	<h4 align="left" class="btn btn-warning" style="padding:50px;">Request for Supervisior</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=upload_course">
	<h4 align="left" class="btn btn-success" style="padding:50px;">Upload Coursework</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=remainder">
	<h4 align="left" class="btn btn-warning" style="padding:50px;">Check Remainder</h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=submit_title">
	<h4 align="left" class="btn btn-danger" style="padding:40px;">Submit Your Project Title</h4>
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
