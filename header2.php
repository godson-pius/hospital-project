<?php

echo '

<!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad inc-border">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <p>
                        !Global update on Coronavirus disease <a href="#">(COVID-19)</a> Pandemic
                    </p>
                </div>
                <div class="col-lg-6 text-right item-flex">
                    <div class="info">
                        <ul>
                            <li>
                                <a class="bg-primary p-1 text-light rounded" style="cursor: pointer" id="login">Login</a>
                            </li>

                            <li>
                                <a href="#">Online Appoinment</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav extra-color">
                    <ul>
                        <li class="contact">
                            <i class="fas fa-stethoscope"></i> 
                            <p>Emergency <strong>+123 456 7890</strong></p>
                        </li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="departments.php" >Our Departments</a>
                        </li>
                        <li class="dropdown">
                            <a href="doctors.php" >Our Doctors</a>
                        </li>
                        <li class="dropdown">
                            <a href="about-us.php" >About Us</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

';


?>

<script>
   document.getElementById('login').addEventListener('click', () => {
       const conf = confirm('Click on OK if you are a doctor');
         if(conf){
              window.location.href = './doctor/'
         } else {
                window.location.href = './users'
         }
   })
</script>