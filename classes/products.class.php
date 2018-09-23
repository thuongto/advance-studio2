<?php
class Products extends Database {
  public $products = array();
  public $gproducts = array();
  public $aproducts = array();
  
  public $nproducts = array();
  public $fproducts = array();
  
  public $total_products;
  public $total_gproducts;
  public $total_nproducts;
  public $total_fproducts;
  public $total_aproducts;
  public function __construct(){
    parent::__construct();
  }
  public function getProducts( $json = false ){
    $query = 'SELECT 
    products.id AS id,
    products.name AS name,
    products.price AS price,
    products.description AS description,
    images.image_file_name AS image
    FROM products 
    INNER JOIN products_images 
    ON products.id = products_images.product_id 
    INNER JOIN images
    ON products_images.image_id = images.image_id 
    GROUP BY products.id';
    //send the query to the database using the database class connection variable
    $statement = $this -> connection -> prepare($query);
    //execute query
    $statement -> execute();
    //get query results
    $result = $statement -> get_result();
    if( $result -> num_rows > 0 ){
      while( $row = $result -> fetch_assoc() ){
        //add each row to products array
        array_push( $this -> products, $row );
      }
      
      $this -> total_products = $result -> num_rows;
      
      if( $json == false ){
        return $this -> products;
      }
      else{
        return json_encode( $this -> products );
      }
    }
    else{
      $this -> total_products = 0;
      return false;
    }
  }
  
  //germany
  public function getProductById( $json = false ){
    $query = 'SELECT 
    products.id AS id,
    products.name AS name,
    products.price AS price,
    products.description AS description,
    images.image_file_name AS image
    FROM products 
    INNER JOIN products_images 
    ON products.id = products_images.product_id 
    INNER JOIN images
    ON products_images.image_id = images.image_id
    WHERE products.id IN (16,30,22)';
  
    //send the query to the database using the database class connection variable
    $statement = $this -> connection -> prepare($query);
    //execute query
    $statement -> execute();
    //get query results
    $result = $statement -> get_result();
    if( $result -> num_rows > 0 ){
      while( $row = $result -> fetch_assoc() ){
        //add each row to products array
        array_push( $this -> gproducts, $row );
      }
      
      $this -> total_gproducts = $result -> num_rows;
      
      if( $json == false ){
        return $this -> gproducts;
      }
      else{
        return json_encode( $this -> gproducts );
      }
    }
    else{
      $this -> total_gproducts = 0;
      return false;
    }
  }
  
    //NewZ
  public function getNewZProductById( $json = false ){
    $query = 'SELECT 
    products.id AS id,
    products.name AS name,
    products.price AS price,
    products.description AS description,
    images.image_file_name AS image
    FROM products 
    INNER JOIN products_images 
    ON products.id = products_images.product_id 
    INNER JOIN images
    ON products_images.image_id = images.image_id
    WHERE products.id IN (36,23)';
   
    //send the query to the database using the database class connection variable
    $statement = $this -> connection -> prepare($query);
    //execute query
    $statement -> execute();
    //get query results
    $result = $statement -> get_result();
    if( $result -> num_rows > 0 ){
      while( $row = $result -> fetch_assoc() ){
        //add each row to products array
        array_push( $this -> nproducts, $row );
      }
      
      $this -> total_nproducts = $result -> num_rows;
      
      if( $json == false ){
        return $this -> nproducts;
      }
      else{
        return json_encode( $this -> nproducts );
      }
    }
    else{
      $this -> total_nproducts = 0;
      return false;
    }
  }
 
   //Aus
  public function getAusProductById( $json = false ){
    $query = 'SELECT 
    products.id AS id,
    products.name AS name,
    products.price AS price,
    products.description AS description,
    images.image_file_name AS image
    FROM products 
    INNER JOIN products_images 
    ON products.id = products_images.product_id 
    INNER JOIN images
    ON products_images.image_id = images.image_id
    WHERE products.id IN (17,19,20,21,25,26,28,29,31,32,33,34,35,37)';
   
    //send the query to the database using the database class connection variable
    $statement = $this -> connection -> prepare($query);
    //execute query
    $statement -> execute();
    //get query results
    $result = $statement -> get_result();
    if( $result -> num_rows > 0 ){
      while( $row = $result -> fetch_assoc() ){
        //add each row to products array
        array_push( $this -> aproducts, $row );
      }
      
      $this -> total_aproducts = $result -> num_rows;
      
      if( $json == false ){
        return $this -> aproducts;
      }
      else{
        return json_encode( $this -> aproducts );
      }
    }
    else{
      $this -> total_aproducts = 0;
      return false;
    }
  }
  //France
  public function getFranceProductById( $json = false ){
    $query = 'SELECT 
    products.id AS id,
    products.name AS name,
    products.price AS price,
    products.description AS description,
    images.image_file_name AS image
    FROM products 
    INNER JOIN products_images 
    ON products.id = products_images.product_id 
    INNER JOIN images
    ON products_images.image_id = images.image_id
    WHERE products.id IN (14,15)';
   
    //send the query to the database using the database class connection variable
    $statement = $this -> connection -> prepare($query);
    //execute query
    $statement -> execute();
    //get query results
    $result = $statement -> get_result();
    if( $result -> num_rows > 0 ){
      while( $row = $result -> fetch_assoc() ){
        //add each row to products array
        array_push( $this -> fproducts, $row );
      }
      
      $this -> total_fproducts = $result -> num_rows;
      
      if( $json == false ){
        return $this -> fproducts;
      }
      else{
        return json_encode( $this -> fproducts );
      }
    }
    else{
      $this -> total_fproducts = 0;
      return false;
    }
  }
  
  
}
?>