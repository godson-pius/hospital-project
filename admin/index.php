<?php
  require_once 'config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['admin']);

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
                                <h4 class="header-title m-t-0 m-b-20">ADMIN - Dashboard</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">



                                      <div class="col-lg-6 col-sm-6">
                                          <div class="widget-inline-box text-center">
                                              <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i> <b><?= getTotalNum('doctors'); ?></b></h3>
                                              <p class="text-muted">Total Doctors</p>
                                          </div>
                                      </div>

                                        <div class="col-lg-6 col-sm-6">
                                            <div class="widget-inline-box text-center">
                                                <h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b><?= getTotalNum('appointments'); ?></b></h3>
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
                                    <h6 class="m-t-0">Doctors</h6>
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
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2"></label>
                                                    </div>

                                                </td>

                                                <td>
                                                    Tomaslau
                                                </td>

                                                <td>
                                                    <a href="#" class="text-muted">tomaslau@dummy.com</a>
                                                </td>

                                                <td>
                                                    <b><a href="" class="text-dark"><b>Surgeon</b></a> </b>
                                                </td>

                                                <td>
                                                    01/11/2003
                                                </td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->


                    <?php require_once 'inc/footer.php'; ?>
