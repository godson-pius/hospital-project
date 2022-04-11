<?php
  require_once '../admin/config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['doctor']);

  $appointments = getDoctorsAppointment($_SESSION['doctor']);
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
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20"><?= $fullname; ?> - Dashboard</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">



                                      <div class="col-lg-12 col-sm-12">
                                          <div class="widget-inline-box text-center">
                                              <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i> <b><?= getTotalNumAppointment('appointments', $_SESSION['doctor']); ?></b></h3>
                                              <p class="text-muted">Total Appointments</p>
                                          </div>
                                      </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h6 class="m-t-0">Appointments</h6>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th style="min-width: 95px;">
                                                    <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                        <input id="action-checkbox" type="checkbox">
                                                        <label for="action-checkbox"></label>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Speciality</th>
                                                <th>Date registered</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                              <?php
                                                if (!empty($appointments)) {
                                                  foreach ($appointments as $appointment) {
                                                    extract($appointment); ?>

                                                        <tr>
                                                            <td>
                                                                <div class="checkbox checkbox-primary m-r-15">
                                                                    <input id="checkbox6" type="checkbox">
                                                                    <label for="checkbox6"></label>
                                                                </div>

                                                            </td>

                                                            <td>
                                                                <?= $patient_name; ?>
                                                            </td>

                                                            <td>
                                                                <a href="#" class="text-muted"><?= $patient_email; ?></a>
                                                            </td>

                                                            <td>
                                                                <b><a href="" class="text-dark"><b><?= $service; ?></b></a> </b>
                                                            </td>

                                                            <td>
                                                                <?= date('F d, Y', strtotime($created_at)); ?>
                                                            </td>

                                                        </tr>

                                                <?php } } ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->


                    <?php require_once 'inc/footer.php'; ?>
