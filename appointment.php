<?php
    require_once 'admin/config/db.php';

    if (!isset($_SESSION['user'])) {
        header('Location: users/pages-login.php');
    }

    if (isset($_POST['submit'])) {
        $res = bookAppointment($_POST);
  
        if ($res === true) {
            echo "<script>alert('Booking successful! You will be attended to as soon as possible')</script>";
        } else if (is_array($res)) {
          foreach ($res as $error) {
            echo "<script>alert('$error')</script>";
          }
        } else {
          echo  "<script>alert('$res')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Healdi - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>Healdi - Medical & Health Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <?php

    include 'header2.php';

    ?>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url(assets/img/shape/9.png);"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Book an Appointment</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Book an Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


<!-- Start Consultation 
    ============================================= -->
    <div class="consultation-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 process">
                    <h2>
                        How to get a <br> consultation from us?
                    </h2>
                    <p>
                        Feel free to use the form to get to us for any medical treatment or any medical advice as we are always ready to listen to you.
                    </p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-calendar-1"></i>
                                <h5>Make Appointment</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-doctor"></i> 
                                <h5>Select A Doctor</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-heartbeat-1"></i>
                                <h5>Confirm Consultation</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 form">
                    <div class="appoinment-box text-center wow fadeInRight">
                        <div class="heading">
                            <h4>Make an Appointment</h4>
                        </div>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="p_name" placeholder="Name" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="p_email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="p_dob" placeholder="Email" type="date">
                                        <span style="font-size: 11px">Set your date of birth</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="p_phone" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="p_gender">
                                            <option disabled selected value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="service">
                                            <option disabled selected value="1">Department</option>
                                            <option value="Medicine">Medicine</option>
                                            <option value="Dental Care">Dental Care</option>
                                            <option value="Traumatology">Traumatology</option>
                                            <option value="General">General</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="date" name="b_date" placeholder="Date" type="date">
                                        <span style="font-size: 11px">Set desired date for appointment</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <select name="p_doctor">
                                                <option disabled selected value="1">Choose Doctor</option>
                                                <?php

                                                    $sql = "SELECT * FROM doctors";
                                                    $result = mysqli_query($link, $sql);

                                                    foreach ($result as $doctor) {
                                                        extract($doctor); ?>

                                                        <option value="<?= $id; ?>"><?= $fullname; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="note" name="p_note" placeholder="Please leave a note" type="text"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" id="submit">
                                        Book Appoinment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Consultation -->

    <?php

    include 'footer.php';

    ?>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>