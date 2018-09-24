<?php
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
?>


<!--Germany -->
<div id="Germany" class="w3-container" style="width: 80%;">
  <div class="w3-container w3-padding-32">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Germany Beers</h3>
  </div>
  <?php
    echo "<div class=\"row\">
            <div class=\"col navbar\">
              <p class=\"navbar-text\">Total of $total_gproducts products</p>
            </div>
          </div>";
    if( count($germanyproducts) > 0 ){
      $col_counter = 0;
      foreach( $germanyproducts as $p ){
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
  
        if($counter == 4){
          echo "</div>";
          $col_counter = 0;
        }
      }
    }
?>
</div>


 <!--New Zany -->
<div id="NewZealand" class="w3-container" style="width: 80%;">
  <div class="w3-container w3-padding-32">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">New Zealand Beers</h3>
  </div>
<?php
  echo "<div class=\"row\">
          <div class=\"col navbar\">
            <p class=\"navbar-text\">Total of $total_nproducts products</p>
          </div>
        </div>";
  if( count($newzrproduct) > 0 ){
    $col_counter = 0;
    foreach( $newzrproduct as $p ){
      $col_counter++;
      if( $col_counter == 1 ){
        echo "<div class=\"row\" >";
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

      if($counter == 4){
        echo "</div>";
        $col_counter = 0;
      }
    }
  }
?>
</div>

 <!--France -->
<div id="France" class="w3-container" style="width: 80%;">
  <div class="w3-container w3-padding-32">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">France Beers</h3>
  </div>
<?php
  echo "<div class=\"row\">
          <div class=\"col navbar\">
            <p class=\"navbar-text\">Total of $total_fproducts products</p>
          </div>
        </div>";
  if( count($frproduct) > 0 ){
    $col_counter = 0;
    foreach( $frproduct as $p ){
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

      if($counter == 4){
        echo "</div>";
        $col_counter = 0;
      }
    }
  }
?>
</div>

 <!--Australia -->
 <!--France -->
<div id="Australia" class="w3-container" style="width: 80%;">
  <div class="w3-container w3-padding-32">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Australia Beers</h3>
  </div>
<?php
  echo "<div class=\"row\">
          <div class=\"col navbar\">
            <p class=\"navbar-text\">Total of $total_aproducts products</p>
          </div>
        </div>";
  if( count($aproduct) > 0 ){
    $col_counter = 0;
    foreach( $aproduct as $p ){
      $col_counter++;
      if( $col_counter == 1 ){
        echo "<div class=\"row\">";
      }
      //print out columns
      $gid = $p["id"];
      $gname = $p["name"];
      $gprice = $p["price"];
      $gimage = $p["image"];
      
      //echo "<div class=\"col-sm-3 product-column\">";
      echo "<div class=\"card\">";
      
      echo "<img class=\"card-img-top\" src=\"images/products/$gimage\" style=\"width:100%\">";
      echo "<div class=\"card-body\"><h4 class=\"product-name\">$gname</h4>";
      echo "<h4 class=\"price\">$gprice</h4>
      <p style=\"margin:0;\"><button id=\"contactbutton\" onclick=\"window.location.href='productdetails.php?product_id=$gid'\">View Details</button></p>
      </div><p></p></div>";

      if($counter == 4){
        echo "</div>";
        $col_counter = 0;
      }
    }
  }
?>
</div>