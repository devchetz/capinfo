<?php 
# Start Session:
session_start();
# Database Connection:
include 'config/connection.php';
if($_POST) {
    
    $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
    $r = mysqli_query($dbc, $q);
    
    if(mysqli_num_rows($r) == 1) {
        $_SESSION['username'] = $_POST['email'];
        header('Location: index.php');   
    }

    $error = false;
    
    if(empty($_POST['email'])){
        $error = true;
        $emailError = "Please enter your email address.";
        }
        elseif(!filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL) ) {
            $error = true;
            $emailError = "Please enter valid email address.";
        }

        if(empty($_POST['password'])){
            $passError = "Please enter your password.";
        }  else {
        echo "<script>alert('Incorrect Credentials, Try again...!');</script>";
    }
    }
?>

<html>
<head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'template/h1.php'; ?>

</head>
    
<body>
<div class="container">
    <nav class="bar bar-1 bar--transparent bar--absolute" data-fixed-at="200">
        <div class="col-md-1 col-sm-2 col-xs-3 hidden-sm hidden-xs">
            <a href="index.php">
                <img class="logo logo-dark" alt="CapInfo" src="config/img/logo1.png">
                <img class="logo logo-light" alt="CapInfo" src="config/img/logo2.png">
            </a>
        </div>
    </nav>
</div>

<div class="main-container">
    <section class="imageblock switchable feature-large height-100">
        <div class="imageblock__content col-md-6 col-sm-4 pos-right">
            <div class="background-image-holder">
                <img alt="image" src="config/img/bg.jpg">
            </div>
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-md-5 col-sm-7">
                    <div id="login-form">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                            <div class="" style="">
                                <div class="form-group">
                                    <h2 class="">Sign In.</h2>
                                    <p class="lead">Sign in to your account</p>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    <span class="text-danger"><?php echo $emailError; ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <span class="text-danger"><?php echo $passError; ?></span>
                                </div>



                                <div class="">
                                    <button type="submit" class="btn btn-default" name="login">Sign In</button>
                                </div>

                                <div class="form-group">
                                    <hr />
                                </div>

                                <div class="">
                                    <span class="type--fine-print block">Forgot your password?
                                        <a href="reset.php" style="color: #466ddb">Reset password.</a>
                                    </span>
                                </div>
                                <div class="">
                                    <span class="type--fine-print">Don't have an account?
                                        <a href="signup.php" style="color: #466ddb">Sign Up Here.</a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> 
<script src="config/js/jquery-3.1.1.min.js"></script>
<script src="config/js/bootstrap.min.js"></script>
<script src="config/js/script.js"></script>
</body>
</html>