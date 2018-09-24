<div id="feature" class="w3-container w3-padding-64" >
<center><h2 >RECOMMENDATIONS FOR YOU</h2>
 <br>
 <!--row1-->
      <div class="row" style="width:80%">
        <div class="card" style="width:600px">
          <img class="card-img-top" src="/images/products/budweiser.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h5 class="card-title">Budweiser</h5>
            <p class="card-text" style="font-size: 14px"></p>
            <a href="productdetails.php?product_id=18" class="btn btn-outline-info" style="font-size: 16px">More Info</a>
          </div>
        </div>
        <div class="card" style="width:600px">
          <img class="card-img-top" src="/images/products/corona.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h5 class="card-title">Corona</h5>
            <p class="card-text" style="font-size: 14px"></p>
            <a href="productdetails.php?product_id=16" class="btn btn-outline-info" style="font-size: 16px">More Info</a>
          </div>
        </div>
        <div class="card" style="width:600px">
          <img class="card-img-top" src="/images/products/kirin.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h5 class="card-title">Kirin</h5>
            <p class="card-text" style="font-size: 14px"></p>
            <a href="productdetails.php?product_id=21" class="btn btn-outline-info" style="font-size: 16px">More Info</a>
          </div>
        </div>
        <div class="card" style="width:600px">
          <img class="card-img-top" src="/images/products/stella.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h5 class="card-title">Stella</h5>
            <p class="card-text" style="font-size: 14px"></p>
            <a href="productdetails.php?product_id=25" class="btn btn-outline-info" style="font-size: 16px">More Info</a>
          </div>
        </div>
      </div> 
      <!--row2-->
      <!--<br>-->
      <!--<div class="row" style="width:80%">-->
      <!--  <div class="card" style="width:600px">-->
      <!--    <img class="card-img-top" src="images/poptop3.jpg" alt="Card image" style="width:100%">-->
      <!--    <div class="card-body">-->
      <!--      <h5 class="card-title">Poptops</h5>-->
      <!--      <p class="card-text" style="font-size: 14px">Poptops includes 4 falvours: Vanila, Chocolate, Strawberry, Choc Mint.</p>-->
      <!--      <a href="index.php#poptop" class="btn btn-outline-info" style="font-size: 16px">More Info</a>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="card" style="width:600px">-->
      <!--    <img class="card-img-top" src="images/icechoc.jpg" alt="Card image" style="width:100%">-->
      <!--    <div class="card-body">-->
      <!--      <h5 class="card-title">Cold Drinks</h5></h5>-->
      <!--      <p class="card-text" style="font-size: 14px">Iced Chocolate<br> Iced Mocha<br> Iced Coffee</p>-->
      <!--      <a href="index.php#menu" class="btn btn-outline-info" style="font-size: 16px">Menu</a>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="card" style="width:600px">-->
      <!--    <img class="card-img-top" src="images/shakes.png" alt="Card image" style="width:100%">-->
      <!--    <div class="card-body">-->
      <!--      <h5 class="card-title">Shakes</h5>-->
      <!--      <p class="card-text" style="font-size: 14px">Milkshakes (2 scoops), Thickshakes (3 scoops), Supershakes (4 scoops).</p>-->
      <!--      <a href="index.php#menu" class="btn btn-outline-info" style="font-size: 16px">Menu</a>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="card" style="width:600px">-->
      <!--    <img class="card-img-top" src="images/coffee.jpg" alt="Card image" style="width:100%">-->
      <!--    <div class="card-body">-->
      <!--      <h5 class="card-title">Hot Drinks</h5>-->
      <!--      <p class="card-text" style="font-size: 14px">Coffee, Teas, and Chocolate. For coffee, we have Cappucino, Mocha, etc.</p>-->
      <!--      <a href="index.php#menu" class="btn btn-outline-info" style="font-size: 16px">Menu</a>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div> -->
    </center>
  </div>
  
  
  
  <!--Product List -->
<center><div id="productslist" class="w3-container">
  <div class="w3-container w3-padding-32">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="width:80%;">All Products</h3>
  </div>
  <?php
    echo "<div class=\"row\" style=\"width:80%;\">
            <div class=\"col navbar\">
              <p class=\"navbar-text\">Total of $total_products products</p>
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
   