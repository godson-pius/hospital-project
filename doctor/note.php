<?php
require_once '../admin/config/db.php';
blockUrlHackers('pages-login.php', $_SESSION['doctor']);

if (isset($_GET['id'])) {
  $appointment_id = $_GET['id'];

  $response = getAppointment($appointment_id);
  if (!empty($response)) {
    foreach ($response as $res) {
      extract($res);

    }


  }
}

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
                 <div class="col-sm-12">
                     <h4 class="header-title m-t-0 m-b-20">Patient Note</h4>
                 </div>
             </div>


             <div class="row p-t-50">
                 <div class="col-12">
                     <div class="jumbotron p-3 shadow">
                       <?= $patient_note; ?>
                     </div>
                 </div>
             </div>
             <!-- end row -->


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
