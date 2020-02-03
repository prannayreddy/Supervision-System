<?php
require('../include/config.php');
$e=$_REQUEST['eid'];
mysqli_query($con,"delete from supervisor  where email='$e'");
echo "<script>window.location='index.php?option=Supervisior'</script>";
?>