<?php
require('../include/config.php');
error_reporting(1);

if(isset($_REQUEST['id']))
{
unlink("../Announcements/".$_REQUEST['file']);

mysqli_query($con,"delete from announcements  where id='".$_REQUEST['id']."'");
echo "<script>window.location='index.php?option=Announcements'</script>";
}
?>