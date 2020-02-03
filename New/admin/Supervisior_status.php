<?php
require('../include/config.php');
$st=$_REQUEST['status'];
$e=$_REQUEST['eid'];
 if($st)
 {
 mysqli_query($con,"update supervisor set status=0 where email='$e'");
 echo "<script>window.location='index.php?option=Supervisior'</script>";
 }
 else
 {
 mysqli_query($con,"update supervisor set status=1 where email='$e'");
 echo "<script>window.location='index.php?option=Supervisior'</script>";
 }
 ?>