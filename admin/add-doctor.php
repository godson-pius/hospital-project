<?php
  require_once 'config/db.php';

  if (isset($_POST['submit'])) {
      $response = addDoctor($_POST);

      if ($response === true) {
          echo "<script>alert('Doctor was added')</script>";
      } else {
        echo "<script>alert('Failed to add')</script>";
      }
  }



?>
<?php require_once 'inc/header.php'; ?>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-20 m-b-20">

                                    <h4 class="header-title m-t-0">Add Doctor</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Easily add a doctor
                                    </p>

                                    <div class="m-b-20">
                                        <form action="" class="form-validation" method="post">
                                            <div class="form-group">
                                                <label for="userName">First Name<span class="text-danger">*</span></label>
                                                <input type="text" name="fname" parsley-trigger="change" required
                                                       placeholder="Enter first name" class="form-control" id="userName">
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">Last Name<span class="text-danger">*</span></label>
                                                <input type="text" name="lname" parsley-trigger="change" required
                                                       placeholder="Enter last name" class="form-control" id="userName">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" required
                                                       placeholder="Enter email" class="form-control" id="emailAddress">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Phone Number<span class="text-danger">*</span></label>
                                                <input type="number" name="phone" parsley-trigger="change" required
                                                       placeholder="Enter phone number" class="form-control" id="emailAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="emailAddress">Speciality<span class="text-danger">*</span></label>
                                                <input type="text" name="speciality" parsley-trigger="change" required
                                                       placeholder="Enter Speciality" class="form-control" id="emailAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="facebook">Facebook link<span class="text-danger">*</span></label>
                                                <input type="text" name="facebook" parsley-trigger="change" required
                                                       placeholder="Enter facebook link" class="form-control" id="facebook">
                                            </div>

                                            <div class="form-group">
                                                <label for="twitter">Twitter link<span class="text-danger">*</span></label>
                                                <input type="text" name="twitter" parsley-trigger="change" required
                                                       placeholder="Enter twitter link" class="form-control" id="twitter">
                                            </div>

                                            <div class="form-group">
                                                <label for="google">Google link<span class="text-danger">*</span></label>
                                                <input type="text" name="google" parsley-trigger="change" required
                                                       placeholder="Enter google link" class="form-control" id="google">
                                            </div>

                                            <div class="form-group">
                                                <label for="instagram">Instagram link<span class="text-danger">*</span></label>
                                                <input type="text" name="instagram" parsley-trigger="change" required
                                                       placeholder="Enter instagram link" class="form-control" id="instagram">
                                            </div>



                                            <div class="form-group">
                                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                                <input id="pass1" name="password" type="password" placeholder="Password" required
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                                <input data-parsley-equalto="#pass1" name="confirm_password" type="password" required
                                                       placeholder="Password" class="form-control" id="passWord2">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">About Doctor <span class="text-danger">*</span></label>
                                                <textarea name="about" class="form-control" rows="8" cols="80"></textarea>
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->


                    <?php require_once 'inc/footer.php'; ?>
