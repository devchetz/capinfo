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
            <div class="col-md-4 col-md-offset-4" style="margin-top:50px;">
                <div class="form-group">
                    <h2 class="">Sign Up.</h2>
                </div>

                
                <div class="panel-body"><!-- Panel-body -->
                    <form action="login.php" method="post" role="form">

                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                            <span class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                            <span class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <span class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="password2">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" name="password" placeholder="Confirm Password">
                            <span class="text-danger"></span>
                        </div>

                        <button type="submit" class="btn btn-default" name="signup">Sign Up</button>

                        <div class="form-group">
                            <hr />
                        </div>


                        <div class="form-group" style="">Already have an accout? 
                            <a href="login.php" style="color: #466ddb">Sign In Here...</a>
                        </div>
                    </form>
                </div>
            </div>
        </form>               
    </div>
</div>
</body>
</html>