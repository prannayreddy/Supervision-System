<?php
require('../include/config.php');
extract($_GET);
mysqli_query($con,"delete from results  where Rid='$id' ");
echo "<script>window.location='index.php?option=results'</script>";
?>