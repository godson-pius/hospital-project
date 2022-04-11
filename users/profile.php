<?php require_once 'inc/header.php'; ?>



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
                                            <p class="text-muted">@<?= $email; ?></p>
                                        </div>

                                        <p class="text-muted m-t-10">
                                            Hi, <?= $fullname; ?>. <br />
                                            Welcome to your profile.
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
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-4">
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
                                                    <!-- <div class="m-b-20">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $phone; ?></p>
                                                    </div> -->
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $email; ?></p>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                            <!-- Social -->
                                            <!-- <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Social</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="social-links list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?= $facebook; ?>" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?= $twitter; ?>" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?= $instagram; ?>" data-original-title="Skype"><i class="fa fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                            <!-- Social -->
                                        </div>


                                        <div class="col-md-8">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Message</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <!-- <h5 class="font-14 mb-3 text-uppercase">About</h5> -->
                                                    <p>Patience and perseverance have a magical effect before which difficulties disappear and obstacles vanish.</p>

                                                    <!-- <div class="">

                                                        <h5 class="font-14 mb-3 text-uppercase m-t-30 m-b-20">Speciality</h5>

                                                        <div class="m-b-15">
                                                            <h5 class="font-14"><?= $speciality; ?> <span
                                                                    class="pull-right">99.9%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="60"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 99%">
                                                                    <span class="sr-only">99.9% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div> -->
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
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="FullName">Full Name</label>
                                                    <input type="text" value="John Doe" id="FullName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="email" value="09087876765" id="phone" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Re-Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="AboutMe">About Me</label>
                                                    <textarea style="height: 125px" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                </div>
                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->


                    <div class="footer">
                        <div class="pull-right hide-phone">
                            Project Completed <strong class="text-custom">57%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright © 2017 - 2019
                        </div>
                    </div>

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



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
