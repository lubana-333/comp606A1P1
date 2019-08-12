<?php
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login System</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
     <link rel="icon" href="assets/images/user.png" type="image/x-icon">
     <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                
                <?php if(isset($_GET['token-msg'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?php echo base64_decode($_GET['token-msg']); ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php } ?>

                <form action="functions/auth.php" method="post">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Login</h3>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" name="login">Login</button>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.php">Signup</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
	
</body>
</html>
