<?php require 'common.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link  rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <?php include 'header.php';
            include 'check-if-added.php';
        ?>
        <div class="container ">
            <div class="jumbotron jumbotron-margin col-xs-8">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras,watches and shirts for you. No need to hunt around,we have all in one place  </p>
            </div>
            
        </div>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="images/5.jpg" alt="Cannon EOS">
              <div class="card-body">
                <h3 class="card-title">Canon-EOS</h3>
                <p class="card-text"> Price:Rs.36000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/2.jpg" alt="Sony DSLR">
                <div class="card-body">
                  <h3 class="card-title">Sony DSLR</h3>
                  <p class="card-text"> Price:Rs.40000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/3.jpg" alt="Sony DSLR">
                <div class="card-body">
                  <h3 class="card-title">Sony DSLR</h3>
                  <p class="card-text"> Price:Rs.50000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/4.jpg" alt="Olympus DSLR">
              <div class="card-body">
                <h3 class="card-title">Olympus DSLR</h3>
                <p class="card-text"> Price:Rs.80000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
                </div>
            </div>
        </div><br><br>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="images/9.jpg" alt="Titan Model #301">
              <div class="card-body">
                <h3 class="card-title">Titan Model #301</h3>
                <p class="card-text"> Price:Rs.13000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/10.jpg" alt="Titan Model #201">
                <div class="card-body">
                  <h3 class="card-title">Titan Model #201</h3>
                  <p class="card-text"> Price:Rs.3000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/11.jpg" alt="HMT Milan">
                <div class="card-body">
                  <h3 class="card-title">HMT Milan</h3>
                  <p class="card-text"> Price:Rs.8000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/12.jpg" alt="Faber Luba#111">
              <div class="card-body">
                <h3 class="card-title">Faber Luba #111</h3>
                <p class="card-text"> Price:Rs.18000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
                </div>
            </div>
        </div><br><br>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="images/8.jpg" alt="H&W">
              <div class="card-body">
                <h3 class="card-title">H&W</h3>
                <p class="card-text"> Price:Rs.800.00</p>
                <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/6.jpg" alt="Luis Phil">
                <div class="card-body">
                  <h3 class="card-title">Luis Phil</h3>
                  <p class="card-text"> Price:Rs.1000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>                  
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/13.jpg" alt="John Zok">
                <div class="card-body">
                  <h3 class="card-title">John Zok</h3>
                  <p class="card-text"> Price:Rs.1500.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>                  
              </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/14.jpg" alt="Jhalsani">
              <div class="card-body">
                <h3 class="card-title">Jhalsani</h3>
                <p class="card-text"> Price:Rs.1300.00</p>
                <?php if (!isset($_SESSION['email'])) { ?> 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php 
                        } else { 
                          //We have created a function to check whether this particular product is added to cart or not. 
                          if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                              ?> 
                              <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                              <?php 
                            } 
                            } 
                            ?>                
                </div>
            </div>
        </div>
    <footer>
        
        <div class="container">
            Copyright <span class="glyphicon glyphicon-copyright-mark"></span> LifeStyle Stores.
            All Rights Reserved | Contact Us: +91 90000 00000
        </div>
        
    </footer>
        
    </body>
</html>
