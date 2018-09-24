<?php
include('autoloader.php');
session_start();

$products_obj = new Products();
  $products = $products_obj -> getProducts();
  
  //germany
  $germanyproducts = $products_obj -> getProductById();
  //new zealand
  $newzrproduct = $products_obj -> getNewZProductById();
  //fance
  $frproduct = $products_obj -> getFranceProductById();
  //aus
  $aproduct = $products_obj -> getAusProductById();
  
  $total_items = $products_obj -> total_products;
  $total_gproducts = $products_obj -> total_gproducts;
  $total_nproducts = $products_obj -> total_nproducts;
  $total_fproducts= $products_obj -> total_fproducts;
  $total_aproducts= $products_obj -> total_aproducts;
$page_title = "Home page";
?>
<!doctype html>
<html>
  <head>
    <?php include("includes/head.php"); ?>
  </head>
    <body style="letter-spacing: 4px;">
      <?php include("includes/navbar.php"); ?>
      <?php include("includes/banner.php"); ?>
        
      <?php include("includes/categories.php"); ?>
      <?php include("includes/bestseller.php"); ?>
      <?php include("includes/featureproduct.php"); ?>
       <?php include("includes/allproduct.php"); ?> 
      <?php include("includes/country.php"); ?>
      
      <?php include("includes/content.php"); ?>
    <div class="row"></div>
    </div> 
    <div class="row"></div>
    </div> 
    <div class="row"></div>
    </div> 
    <div class="row"></div>
    </div> 
    <?php include("includes/contact.php"); ?>
    <div class="row"></div>
    </div> 
    <?php include("includes/footer.php"); ?>
  </body>
</html>