<?php require 'common.php';
if(isset($_SESSION['email'])){
    header('location:product.php');
}?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link  rel="stylesheet" href="style.css" type="text/css">
        
    </head>
    <body>
        <nav class="nav navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container panel-margin col-xs-4">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">LOGIN</h2>
                </div>
                <div class="panel-body">
                    <i class="text-warning">Login to make a purchase</i>
                    <form method="post" action="login_submit.php">
                        
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="panel-footer">
                    Don't have an account?<a href="signup.html">Register</a>.
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
        
            
        
            
                  
                        
                        
                    
            

       
    </body>
</html>