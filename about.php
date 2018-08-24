<?php
// include('autoloader.php');
// session_start();

// $products_obj = new Products();
// $products = $products_obj -> getProducts();
// $total_items = $products_obj -> total_products;

// $page_title = "About Us";
?>
<!doctype html>
<html>
  <head>
    <?php include("includes/head.php"); ?>
  </head>
    <body>
      <?php include("includes/navbar.php"); ?>

        
      <div class="container text-center">
        
        <div class="w3-container w3-padding-32" style="padding-top:30px;">
          <p></p>
          <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16">A STORY ABOUT BEERS</h2>
        </div>
        <p class="ingress">
        <h3>Oldest Beer in the world</h3>
         Weihenstephan is a part of Freising north of Munich, Germany. Weihenstephan is known for: the Benedictine Weihenstephan Abbey, founded 725, which established the oldest still-operating brewery in the world in 1040 (see History of beer).
        
        <h3>How did beer get its name?</h3>
        The intoxicant known in English as `beer' takes its name from the Latin `bibere' (by way of the German `bier') meaning `to drink' and the Spanish word for beer, cerveza' comes from the Latin word `cerevisia' for `of beer', giving some indication of the long span human beings have been enjoying the drink.
        </p>
      </div>
      <img src="/images/about/beer.jpg" width="1600" height="800"></img>
    </body>
    <?php include("includes/footer.php"); ?>
</html>