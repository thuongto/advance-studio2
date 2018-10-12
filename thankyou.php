<?php
session_start();
include('autoloader.php');
// if user is not logged in, redirect to home page
if(!$_SESSION["account_id"]){
  header("location:index.php");
}
$page_title = "Thank you!";
?>

<!doctype html>
<html>
  <?php include ('includes/head.php'); ?>
  <body>
    <?php include('includes/navbar.php'); ?>
    <div style="margin-top: 100px" class="container content">
    <div class="container" id="shopping-list">
      
    </div>
  </div>
  
    <center><h1>Thank you for shopping with us!</h1></center>
  
  
    <br>
    <br>
    <?php include("includes/footer.php"); ?>
  </body>
</html>
