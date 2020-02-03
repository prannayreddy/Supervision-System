<?php
session_start();
unset($_SESSION['supervisor']);
header('location:../index.php');
 ?>