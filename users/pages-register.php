
<?php
  require_once '../admin/config/db.php';

  if (isset($_POST['submit'])) {
      $addUser = registerUser($_POST);

      if ($addUser === true) {
          echo "<script>alert('Account created!')</script>";
          echo "<script>window.location.href='./index.php'</script>";
      } else {
        echo "<script>alert('Operation failed! Try again')</script>";
      }
  }

 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.php" class="text-success">
                                            <span><img src="assets/images/logo.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="" method="post">

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="username">Full Name</label>
                                                <input name="fullname" class="form-control" type="text" id="username" required="" placeholder="Michael Zenaty">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="dob">Date of birth</label>
                                                <input name="dob" class="form-control" type="date" id="dob" required="" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input name="password" class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="cpassword">Confirm Password</label>
                                                <input name="confirm_password" class="form-control" type="password" required="" id="password" placeholder="Confirm your password">
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                                <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
