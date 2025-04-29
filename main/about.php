<?php
//session_start();
require_once("classes/session.php");
$session = new sessionHelper();
include 'includes/header.php'; ?>
<div class="container my-5">
  <h1>About Us</h1>
  <p>Learn about our history, mission, and community values.</p>
  <?php
  print_r($_SESSION);
  $sessionauth = $session->isloggedin();
  if($sessionauth){
  ?>
  <h1>You're logged in</h1>
  <br>
  <a href="includes/logout.php">Logout</a>
<?php 
  }
else 
{
  echo "something is wrong";
  $session->testing();
}
?>


</div>
<?php include 'includes/footer.php'; ?>
