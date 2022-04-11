
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
                                <h4 class="header-title m-t-0 m-b-20">Appointments</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Concerns</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Date booked</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php
                                            if (!empty($appointments)) {
                                              foreach ($appointments as $appointment) {
                                                extract($appointment); ?>

                                                    <tr>
                                                        <td><?= $patient_name; ?></td>
                                                        <td><?= $patient_note; ?></td>
                                                        <td><?= $patient_email; ?></td>
                                                        <td><?= $patient_phone; ?></td>
                                                        <td><?= date('F d, Y', strtotime($booked_date )); ?></td>
                                                        <td>
                                                          <button onclick="accept(this)" type="button" class="btn btn-sm mb-2 btn-success">Accept</button>
                                                          <button onclick="decline(this)" type="button" class="btn btn-sm mb-2 btn-danger">Decline</button>
                                                          <a href="note.php?id=<?= $id; ?>" type="button" class="btn btn-sm  btn-primary">Read more</a>
                                                        </td>
                                                    </tr>

                                          <?php } } ?>
                                        </tbody>
                                    </table>
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


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="assets/plugins/datatables/dataTables.select.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

        <script>

          function accept(e) {
            alert('Appointment accepted');
          }

          function decline(e) {
            let conf = confirm('Are you sure you want to decline the appointment?');
            if (conf) {
              alert('Appointment declined successfully!');
            }
          }
        </script>


    </body>
</html>
