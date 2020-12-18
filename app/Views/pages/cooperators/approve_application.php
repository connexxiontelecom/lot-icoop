<?= $this->extend('layouts/master') ?>

<?= $this->section('title') ?>
Approve Applications
<?= $this->endSection() ?>

<?= $this->section('current_page') ?>
Approve Applications
<?= $this->endSection() ?>
<?= $this->section('page_crumb') ?>
Approve Applications
<?= $this->endSection() ?>

<?= $this->section('extra-styles') ?>


<link rel="stylesheet" href="assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">


<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Approve Applications</h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover js-basic-example dataTable simpletable table-custom spacing5">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Staff ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Location</th>
                            <th>Date Applied</th>
                            <th>Date Verified</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $sn = 1; foreach ($applications as $application): ?>
                            <tr>

                                <td><?=$sn; ?></td>
                                <td><?=$application->application_staff_id; ?></td>
                                <td><?=$application->application_first_name.' '.$application->application_last_name; ?></td>
                                <td><?=$application->department_name; ?></td>
                                <td><?=$application->location_name; ?></td>
                                <td><?=$application->application_date; ?></td>
                                <td><?=$application->application_verify_date; ?></td>
                                <td> <button onclick="location.href='<?php echo site_url('approve_application')."/".$application->application_id;?>'" type="button" class="btn btn-icon icon-left btn-primary"><i class="fa fa-eye"></i></button>
                                </td>
                            </tr>
                            <?php $sn++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>



<?= $this->endSection() ?>

<?= $this->section('extra-scripts') ?>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/vendor/jquery-validation/jquery.validate.js"></script><!-- Jquery Validation Plugin Css -->
<script src="assets/vendor/jquery-steps/jquery.steps.js"></script><!-- JQuery Steps Plugin Js -->
<script src="assets/js/common.js"></script>
<script src="assets/js/pages/forms/form-wizard.js"></script>
<script src="assets/vendor/dropify/js/dropify.js"></script>
<script src="assets/js/common.js"></script>

<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script>
    $(document).ready(function(){
        $('.simpletable').DataTable();

        $('.error-wrapper').hide();
        addNewStateForm.onsubmit = async (e) => {
            e.preventDefault();

            axios.post('/add-new-state',new FormData(addNewStateForm))
                .then(response=>{
                    Toastify({
                        text: "Success! New state saved.",
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        stopOnFocus: true,
                        onClick: function(){}
                    }).showToast();
                    $("#stateTable").load(location.href + " #stateTable");
                    $('#state_name').val('');
                })
                .catch(error=>{
                    //$('#validation-errors').html('');
                    $.each(error.response.data.errors, function(key, value){
                        Toastify({
                            text: 'Error',
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "linear-gradient(to right, #FF0000, #FE0000)",
                            stopOnFocus: true,
                            onClick: function(){}
                        }).showToast();
                        //$('#validation-errors').append("<li><i class='ti-hand-point-right text-danger mr-2'></i><small class='text-danger'>"+value+"</small></li>");
                    });
                });
        };
    });
</script>
<?= $this->endSection() ?>

