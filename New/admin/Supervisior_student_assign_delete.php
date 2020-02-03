<?php
require('../include/config.php');
mysqli_query($con,"delete from assign_supervisior  where id='".$_REQUEST['assignId']."'");
echo "<script>window.location='index.php?option=assign_supervisior_student'</script>";
?>