<?php
   session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login System</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <link rel="icon" href="assets/images/user.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">
        .fa-power-off{
            color: #f00;
        }
    </style>
</head>
<body>
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><img src="assets/images/user.png" height="30" width="30">   &nbsp;&nbsp;&nbsp; <?php echo $_SESSION['user']; ?></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="functions/auth.php?logout"><span class="fa fa-power-off"></span> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
   <div class="container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                
                     <div class="main-body">
                        <div class="page-wrapper">
                           <div class="row">
                                 <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Change Password</h5>
                                        </div>
                                            <div class="table-responsive">
                                                 <form action="functions/auth.php" method="post">
                                                    <table class="table table-hover">
                                                         <tr class="unread">
                                                            <td>
                                                                 <div class="input-group mb-3">
                                                                     <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                                                    </div>
                                                            </td>
                                                                <td><button class="btn btn-primary shadow-2 mb-4" name="change_password">change</button></td>
                                                            </tr>
                                                    </table>
                                                </form>
                                            </div>
                                    </div>
                             </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

    
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
