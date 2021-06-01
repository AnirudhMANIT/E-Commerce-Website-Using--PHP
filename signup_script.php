<?php require 'common.php';
    $email=$_POST['email'];
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*( \.[a-z]{2,3}) $/";
    if (!preg_match($regex_email,$email)){
        $error = "<span class='red'>Please enter correct E-mail id </span>";
    }
    $password=$_POST['password'];
    if (strlen($password)<6){
        $error = "<span class='red'>Please enter correct Password</span>";
    }
    $select_query = "SELECT id FROM users WHERE email='" . $email ."'";
    $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    if(mysqli_num_rows($select_query_result)>0){
        $error = "<span class='red'>email id already exists</span>";
        header('location: signup.php?error=' . $error);
    } else{
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $select_query_1="INSERT INTO users(name,email,password,contact,city,address)values('$name','$email','$password','$contact','$city','$address')"
        $select_query_result_1=mysqli_query($con,$select_query_1) or die(mysqli_error($con))
        $row = mysqli_fetch_array($select_query_result_1);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id']; 
        header('location: product.php');
    }
    
    
    
    ?>