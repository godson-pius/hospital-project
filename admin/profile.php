
<?php
  require_once 'config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['admin']);

  if (isset($_SESSION['admin'])) {
      $adminId = $_SESSION['admin'];

      if (isset($_POST['submit'])) {
          $updateAdmin = editAdmin($_POST, $adminId);

          if ($updateAdmin === true) {
                echo "<script>alert('Profile Updated!')</script>";
          } else {
              echo "<script>alert('Failed to update! Try again')</script>";
          }

      }
  }
?>

<?php
  require_once 'inc/header.php';
?>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-page">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h5 class="m-b-5 mt-3"><?= $fullname; ?></h5>
                                            <p class="text-muted">@<?= $username; ?></p>
                                        </div>

                                        <p class="text-muted m-t-10">
                                            This is the admin profile page.
                                        </p>


                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="nav-item">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link">
                                        Settings
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal Information</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Full Name</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $fullname; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Username</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $username; ?></p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $email; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Edit Profile</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" action="" method="post">
                                                <div class="form-group">
                                                    <label for="FullName">Full Name</label>
                                                    <input type="text" value="<?= $fullname; ?>" id="FullName" name="fullname" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="email" name="email" value="<?= $email; ?>" id="Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Username">Username</label>
                                                    <input type="text" value="<?= $username; ?>" id="Username" name="username" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" name="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Re-Password</label>
                                                    <input type="password" name="confirm_password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                </div>

                                                <button class="btn btn-primary waves-effect waves-light w-md" name="submit" type="submit">Save</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->


                    <?php require_once 'inc/footer.php'; ?>
