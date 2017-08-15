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
<div class="container-fluid">
    <div id="login-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
            <div class="col-md-4 col-md-offset-4" style="margin-top:100px;">
                <div class="form-group">
                    <h2 class="">Sign In.</h2>
                </div>

                <div class="panel-body"><!-- Panel-body -->
                    <form action="login.php" method="post" role="form">
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

                        <button type="submit" class="btn btn-default" name="login">Sign In</button>

                        <div class="form-group">
                            <hr />
                        </div>

                        <div class="form-group" style="">Don't Have accout? 
                            <a href="signup.php" style="color: #466ddb">Sign Up Here...</a>
                        </div>
                    </form>
                </div>
            </div>
        </form>               
    </div>
</div>        
</body>
</html>