<?php
require('../include/config.php');
$id=$_REQUEST['id'];
$st=$_REQUEST['status'];
 
 if($st)
 {
 mysqli_query($con,"update project_title set title_status='0' where Tid='$id'");
 
 echo "<script>window.location='index.php?option=submit_title'</script>";
 
 }
 else
 {
 mysqli_query($con,"update project_title set title_status='1' where Tid='$id'");
 
  echo "<script>window.location='index.php?option=submit_title'</script>";
 }
 ?>