<?php

include("header.php");
include 'config.php';
?>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-3 columns">';
              echo '<p><h4 style="text-align:center">'.$obj->product_name.'</h4></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'" width="200" height="200"/><br>';
              echo '<br><p><strong>Benefits</strong>: '.$obj->product_desc.'</p>';
              echo '<p style="text-align:left"><strong>Quantity</strong>: '.$obj->qty.'</p>';
              echo '<p style="text-align:left"><strong>Price per Colour</strong>: <br> '.$currency.$obj->price.'</p>';

                
            if (!isset($_SESSION["type"]) || ($_SESSION["type"] == "user")){
                if($obj->qty > 0){
                    echo '<p style="text-align:center"><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }   
            }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

<?php 
include("footer.php");
?>