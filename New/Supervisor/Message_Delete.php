<?php
require('../include/config.php');
extract($_GET);
mysqli_query($con,"delete from message  where id='$msgid' and  sender ='$eid'");
echo "<script>window.location='index.php?option=Message'</script>";
?>