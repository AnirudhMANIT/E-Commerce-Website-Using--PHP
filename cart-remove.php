<?php
    require 'common.php'
    $user_id = $_SESSION["id"];
    $item_id = $_GET["id"];
    $query = "DELETE FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id'";

    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    header("location: cart.php");
?>