<?= $this->extend('layouts/master') ?>

<?= $this->section('title') ?>
Contribution Types - <?=$cooperator->cooperator_first_name.' '.$cooperator->cooperator_last_name; ?>
<?= $this->endSection() ?>

<?= $this->section('current_page') ?>
Contribution Types - <?=$cooperator->cooperator_first_name.' '.$cooperator->cooperator_last_name; ?>
<?= $this->endSection() ?>
<?= $this->section('page_crumb') ?>
Contribution Types
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
                <h2>Contribution Types - View Ledger</h2>

            </div>


            <div class="body">


                <form method="POST" enctype="multipart/form-data">

                    <fieldset>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">


                                <div class="form-group">

                                    <label  for="application_payroll_group_id"> <b> Contribution Type: </b></label>

                                    <select class="custom-select" required name="ct_id">

                                        <?php foreach ($contribution_types as $ct): ?>
                                            <option value="<?=$ct['contribution_type_id'] ?>"> <?=$ct['contribution_type_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">

                                    <label  for="application_payroll_group_id"> <b>Year: </b></label>

                                    <select class="custom-select" required name="ct_year">
                                        <option value="a"> All </option>
                                        <?php foreach ($years as $year): ?>
                                            <option value="<?=$year['year'] ?>"> <?=$year['year']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>





                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                                </div>
                            </div>


                        </div>
                    </fieldset>


                </form>



                <?php if(!empty($check)): ?>

                <div class="col-lg-12">

                        <div class="header">
                            <h2>View Ledger (<?=$cts['contribution_type_name']; ?>)</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <?php  if(!empty($ledgers)): ?>
                                <table class="table table-hover js-basic-example dataTable simpletable table-custom spacing5">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Reference Number</th>
                                        <th>Dr</th>
                                        <th>Cr</th>



                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $sn = 1;



                                    foreach ($ledgers as $ledger): ?>
                                        <tr>

                                            <td><?=$sn; ?></td>
                                            <td><?=$ledger['pd_transaction_date']; ?></td>
                                            <td><?=$ledger['pd_ref_code']; ?></td>

                                            <td><?php
                                                if($ledger['pd_drcrtype'] == 2):

                                                    echo number_format($ledger['pd_amount']);

                                                else:
                                                    echo '0';

                                                endif;

                                                ?></td>
                                            <td>
                                                <?php
                                                if($ledger['pd_drcrtype'] == 1):

                                                    echo number_format($ledger['pd_amount']);

                                                else:
                                                    echo '0';

                                                endif;

                                                ?>
                                            </td>


                                        </tr>
                                        <?php $sn++; endforeach; ?>
                                    </tbody>
                                </table>
                              <?php  else:

                                echo "No data Available";
                                endif; ?>
                            </div>
                        </div>

                </div>

                <?php endif; ?>

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

<?= $this->endSection() ?>
