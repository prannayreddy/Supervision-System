<?php
require('../config.php'); 
extract($_GET);
mysqli_query($con,"delete from remainder where rem_id='$msgid' and supervisior='$super'");
//echo $msgid." ".$super;
echo "<script>window.location='index.php?option=remainder'</script>";
?>