<?php

echo '

<!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark inc-padding text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 info">
                    <p>
                        !Global update on Coronavirus disease <a href="#">(COVID-19)</a> Pandemic
                    </p>
                </div>
                <div class="col-lg-5 text-right button">
                    <div class="item-flex">
                        <a class="button" href="#"><i class="fas fa-stethoscope"></i> Get a Consultation</a>
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
        <nav class="navbar navbar-default bg-theme dark attr-border bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo logo-regular" alt="Logo">
                        <img src="assets/img/logo-light.png" class="logo desktop" alt="Logo">
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
                            <a href="./users/" >User Login</a>
                        </li>
                        <li class="dropdown">
                        <a href="./doctor/" >Doctor Login</a>
                    </li>
                        <li class="dropdown">
                            <a href="doctors.php" > Doctors</a>
                        </li>
                        
                        <li class="dropdown">
                            <a href="./appointment.php" > Book Appointment</a>
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