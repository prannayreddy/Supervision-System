<?php
session_start();
require('../include/config.php');
 extract($_SESSION);
 extract($_REQUEST);
 if($admin==""){header('location:../index.php?option=login');}

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

    <title>Admin Dashboard</title>
<style>
/*.nav-sidebar > li > a{color:#FFFFFF}*/
</style>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color:#FFFFFF">
		  <?php echo "Hello  ".$admin;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >



            <li><a href="logout.php" title="click here to logout" style="color:#FFFFFF"><span style="color:#FFFFFF" class="glyphicon glyphicon-log-out"></span></a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar " style="border-right:1px solid #CCC; background:#101010">
          <ul class="nav nav-sidebar" >
            <li>

			<a href="index.php"><span class="glyphicon glyphicon-edit"></span> Dashboard <span class="sr-only">(current)</span></a></li>

			 <li><a href="index.php?option=Supervisior"><span class="glyphicon glyphicon-check"></span> Supervisior</a></li>

			<li><a href="index.php?option=Student"><span class="glyphicon glyphicon-check"></span> Student</a></li>

			<li><a href="index.php?option=assign_supervisior_student"><span class="glyphicon glyphicon-check"></span> Assign Supervisior</a></li>

			<li><a href="index.php?option=student_supervisior_request"><span class="glyphicon glyphicon-check"></span> Student Request for  Supervisior</a></li>

			<li><a href="index.php?option=submit_title"><span class="glyphicon glyphicon-edit"></span> Request Project Title</a></li>


			<li><a href="index.php?option=results">
			<span class="glyphicon glyphicon-edit"></span> View All Results</a></li>



            <li><a href="index.php?option=notification"><span class="glyphicon glyphicon-check"></span> Notification</a></li>


			 <li><a href="index.php?option=Announcements" title="Announcements for all supervisior and Student"><span class="glyphicon glyphicon-check"></span>Announcements</a></li>

			<li><a href="index.php?option=Message"><span class="glyphicon glyphicon-check"></span> Message</a></li>


			<li><a href="index.php?option=Report"><span class="glyphicon glyphicon-check"></span> Reports</a></li>

			  <li><a href="index.php?option=update_password"><span class="glyphicon glyphicon-lock"></span>Update Password</a></li>

          </ul>

        </div>
		<!-- sidebar end-->

		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main well" style="background-color:#000000">


			<?php
			@$option=$_REQUEST['option'];
			if($option!="")
			{
				if($option=="results")
				{
				include('results.php');
				}

				if($option=="submit_title")
				{
				include('submit_title.php');
				}

				if($option=="student_supervisior_request")
				{
				include('student_supervisior_request.php');
				}

				if($option=="Supervisior")
				{
				include('Supervisior.php');
				}
				if($option=="add_supervisior")
				{
				include('add_supervisior.php');
				}
				if($option=="update_password")
				{
				include('update_password.php');
				}
				if($option=="Student")
				{
				include('Student.php');
				}
				if($option=="add_student")
				{
				include('add_student.php');
				}

				if($option=="Message")
				{
				include('Message.php');
				}
				if($option=="Message_send")
				{
				include('Message_send.php');
				}
				if($option=="reply")
				{
				include('reply.php');
				}
				if($option=="forward")
				{
				include('forward.php');
				}
				if($option=="assign_supervisior")
				{
				include('assign_supervisior.php');
				}

				if($option=="assign_supervisior_student")
				{
				include('assign_supervisior_student.php');
				}
				if($option=="notification")
				{
				include('notification.php');
				}

				if($option=="Announcements")
				{
				include('Announcements.php');
				}

				if($option=="Add_Announcements")
				{
				include('Add_Announcements.php');
				}


				if($option=="notification_add")
				{
				include('notification_add.php');
				}
				if($option=="Report")
				{
				include('Report.php');
				}

			}
			else
			{
			include('Report.php');
			}
			?>

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
