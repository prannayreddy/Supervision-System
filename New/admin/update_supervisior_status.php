<?php
require('../include/config.php');
$stu=$_REQUEST['stu_id'];
$sup=$_REQUEST['super_id'];
 
 if($stu)
 {
 mysqli_query($con,"insert into assign_supervisior values('','$stu','$sup',now())");
 
 echo "<script>window.location='index.php?option=assign_supervisior_student'</script>";
 
 }

 ?>