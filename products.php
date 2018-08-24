<?php
include("includes/database.php");
//check if connection is successful
if($connection){
  //echo "success";
  $query = "SELECT 
    products.id AS id,
    products.name AS name,
    products.price AS price,
    products.description AS description,
    images.image_file_name AS image
    FROM products 
    INNER JOIN products_images 
    ON products.id = products_images.product_id 
    INNER JOIN images
    ON products_images.image_id = images.image_id";
  //run the query
  $statement = $connection -> prepare($query);
  $statement -> execute();
  //get the result
  $result = $statement -> get_result();
}
else{
  echo "connection failed";
}
$page_title = "Products List";
?>
<!doctype html>
<html>
  <head>
    <?php include("includes/head.php"); ?>

  </head>
    <body>
      <?php include("includes/navbar.php"); ?>
      
      
      <div class="container">
        <!-- Project Section -->
      <div class="w3-container w3-padding-8" id="projects" style="padding-top:100px;">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Products</h3>
       
       
      <div class="container">
        <?php
        if($result -> num_rows > 0){
          $counter = 0;
          while( $row = $result -> fetch_assoc() ){
            $name = $row["name"];
            $price = $row["price"];
            $description = $row["description"];
            $image = $row["image"];
            $counter++;
            if($counter == 1){
              //create boostrap row
              echo "<div class=\"row\">";
            }
            echo "<div class=\"col-md-3 col-sm-6 \">
            <h3>$name</h3>
            <img class=\"product-thumbnail img-fluid\" src=\"images/products/$image\">
            <h4 class=\"price\">$price</h4>
            <p>$description</p>
            </div>";
            if($counter == 4){
              echo "</div>";
              $counter = 0;
            }
            // echo "<p>Product Name is $name and price is $ $price</p>";
          }
        }
        ?>
      </div>
    </body>
    <?php include("includes/footer.php"); ?>
</html>