<?php
require('../include/config.php');
extract($_GET);
mysqli_query($con,"delete from notification  where id='$msgid' ");
echo "<script>window.location='index.php?option=notification'</script>";
?>