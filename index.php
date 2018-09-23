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
      
      <?php include("includes/country.php"); ?>
      
      <?php //include("includes/content.php"); ?>
      
<!--Product List -->
<div id="productslist" class="w3-container">
  <div class="w3-container w3-padding-32">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">All Products</h3>
  </div>
  <?php
    echo "<div class=\"row\">
            <div class=\"col navbar\">
              <p class=\"navbar-text\">Total of $total_products products</p>
            </div>
          </div>";
    if( count($products) > 0 ){
      $col_counter = 0;
      foreach( $products as $p ){
        $col_counter++;
        if( $col_counter == 1 ){
          echo "<div class=\"row\">";
        }
        //print out columns
        $gid = $p["id"];
        $gname = $p["name"];
        $gprice = $p["price"];
        $gimage = $p["image"];
        
        echo "<div class=\"col-sm-3 product-column\">";
        echo "<div class=\"card\">";
        
        echo "<img class=\"product-thumbnail img-fluid\" src=\"images/products/$gimage\" style=\"width:100%\">";
        echo "<h4 class=\"product-name\">$gname</h4>";
        echo "<h4 class=\"price\">$gprice</h4>
        <p style=\"margin:0;\"><button id=\"contactbutton\" onclick=\"window.location.href='productdetails.php?product_id=$gid'\">View Details</button></p>
        </div><p></p></div>";
  
        if($counter == 3){
          echo "</div>";
          $col_counter = 0;
        }
      }
    }
?>
</div>
   
    <div class="row"></div>
    </div> 
    <?php include("includes/contact.php"); ?>
    <div class="row"></div>
    </div> 
    <?php include("includes/footer.php"); ?>
  </body>
</html>