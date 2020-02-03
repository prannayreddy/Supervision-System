<?php
require('../config.php');
extract($_GET);
mysqli_query($con,"delete from message  where id='$msgid' and  receiver ='$eid'");
echo "<script>window.location='index.php?option=inbox'</script>";
?>