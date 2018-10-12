<?php
  $products_obj = new Products();
  $products = $products_obj -> getProducts();
  
  $total_items = $products_obj -> total_products;
  
?>

  <!--Product List -->
<center><div id="productslist" class="w3-container">
  <div class="w3-container w3-padding-32">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="width:80%;">All Products</h3>
  </div>
  <?php
    echo "<div class=\"row\" style=\"width:80%;\">
            <div class=\"col navbar\">
              <p class=\"navbar-text\">Total of $total_items products</p>
            </div>
          </div>";
    if( count($products) > 0 ){
      $col_counter = 0;
      foreach( $products as $p ){
        $col_counter++;
        if( $col_counter == 1 ){
          echo "<div class=\"row\"  style=\"width:80%;\"  >";
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
</div></center>