<?php
include('autoloader.php');
session_start();

$products_obj = new Products();
$products = $products_obj -> getProducts();
$total_items = $products_obj -> total_products;

$page_title = "About Us";
?>
<!doctype html>
<html>
  <head>
    <?php include("includes/head.php"); ?>
  </head>
    <body>
      <?php include("includes/navbar.php"); ?>


<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="/images/International-Beer-Social-Media-port.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Beers World</h1><br>
      <h5 class="w3-center">Tradition since 2010</h5>
      <p class="w3-large">Beers World was founded in blabla by Mr. Smith in Vietnam.
      <p class="w3-large w3-text-grey w3-hide-medium">Beers World is an Vietnamese retail chain of liquor stores owned by Mr. Smith. 
      Beers World, is an acronym for international Beers. 
      Beers World is the largest liquor retailer in Vietnam with 2 stores nationally. </p>
    </div>
    
  </div>
  
  <hr>

 <div class="row"></div>
    </div> 
    <?php include("includes/footer.php"); ?>

        
     
    </body>
</html>