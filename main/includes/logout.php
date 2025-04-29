<?php 
require "../classes/session.php";
$session = new sessionHelper();
$session->logout();
header("Location: ../adminpage.php?auth=logged out successfully");
?>