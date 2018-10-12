
<?php
$nav_obj = new Navigation();
$navigation = $nav_obj -> getNavigationItems();
//right item
$right_navigation = $nav_obj -> getNavigationRightItems();
?>

<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a class="w3-bar-item w3-button" href="index.php">Beer World.</a><div class="w3-right w3-hide-small">
    <!--Search -->
  <form class="w3-left"  method="get" action="search.php">
    <div class="input-group" style="padding-left: 50px; padding-right: 150px; margin-top: 0;">
    <input class="form-control" type="search" name="keywords" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </div>
  </form>
      <?php
        if( count($navigation) > 0 ){
          foreach( $navigation as $name => $link ){
            //if the link matches the current page, set active as 'active'
            if( $link == $nav_obj -> current_page ){
              $active = "active";
            }
            else{
              unset($active);
            }
            
            echo "
                    <a class=\"w3-bar-item w3-button\" href=\"/$link\">$name </a>
                  ";
          }
        }
      ?>
      
    <a class="w3-bar-item w3-button\" href="index.php#contact">Contact </a> 
    <div class="w3-dropdown-hover">
      <button class="w3-button" style="letter-spacing: 4px;">Categories</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a class="w3-bar-item w3-button" href="index.php#bestseller"><i class=\"fas fa-sign-in-alt\"></i>Best Seller</a>
        <a class="w3-bar-item w3-button" href="index.php#feature"><i class=\"fas fa-sign-in-alt\"></i>Recommendations</a>
        <a class="w3-bar-item w3-button" href="index.php#productslist"><i class=\"fas fa-sign-in-alt\"></i>Products List</a>
        <a class="w3-bar-item w3-button" href="index.php#country"><i class=\"fas fa-sign-in-alt\"></i>Country</a>
      </div>
    </div>
    <!-- SignUp SignIn -->
    <div class="w3-dropdown-hover">
      <button class="w3-button" style="letter-spacing: 4px;">Account</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <?php
        if( $_SESSION["username"] ){
          $user = $_SESSION["username"];
          echo "<a class=\"w3-bar-item w3-button\">Hello, $user!</a>";
          echo "<a class=\"w3-bar-item w3-button\" href=\"signout.php\"><i class=\"fas fa-sign-out-alt\"></i> Sign Out</a>";
        }
        else{
          if( count($right_navigation) > 0 ){
              
              foreach( $right_navigation as $name => $link ){
                //if the link matches the current page, set active as 'active'
                if( $link == $nav_obj -> current_page ){
                  $active = "active";
                }
                else{
                  unset($active);
                }
                
                if($name == "Sign Up")
                {
                  echo "<a class=\"w3-bar-item w3-button\" href=\"/$link\"><i class=\"fas fa-user-plus\"></i> $name <span class=\"sr-only\">(current)</a>";
                }
                else {
                  echo "<a class=\"w3-bar-item w3-button\" href=\"/$link\"><i class=\"fas fa-sign-in-alt\"></i> $name </a>";
                }
              }
            }
        }
        ?>
      </div>
    </div>
    <!--SHOPPING CART-->
    <?php
      $cart = new ShoppingCart();
      $cart_count = $cart -> getCartCount();
    ?>
    <a href="shoppingcart.php" class="w3-bar-item w3-button">
      <img class="icon" src="images/icons/shoppingcart.png">
      <span id="cart-count" class="badge badge-primary"><?php echo $cart_count; ?></span>
    </a>
  </div>  
</div>
</div>
</script>