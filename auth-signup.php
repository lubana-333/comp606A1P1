<?php
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login System</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/user.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/css/animate.min.css">
    <!-- vendor css -->
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
		      //alert message to user
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
                            <i class="feather icon-user-plus auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Sign up</h3>
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" name="signup">Sign up</button>
                        <p class="mb-0 text-muted">Allready have an account? <a href="auth-signin.php"> Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

   // javascript
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
