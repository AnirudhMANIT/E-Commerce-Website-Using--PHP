<?php require 'common.php';
    if(isset($_SESSION['email'])){
        header('location:product.php');

    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <button class="button">Shop Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="items">
                <a href="#">
                    <img src="images/watch.jpg" class="thumbnails">
                    <div class="caption">
                        <h2>Watches</h2>
                            <p>Original watches from the best brands.</p>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="#">
                    <img src="images/camera.jpg" class="thumbnails">
                    <div class="caption">
                        <h2>Camera</h2>
                        <p>Choose among the best in the world.</p>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="#">
                    <img src="images/shirt.jpg" class="thumbnails">
                    <div class="caption">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts.</p>
                    </div>
                </a>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>