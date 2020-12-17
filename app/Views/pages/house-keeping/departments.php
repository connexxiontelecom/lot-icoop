<?= $this->extend('layouts/master') ?>

<?= $this->section('title') ?>
Departments 
<?= $this->endSection() ?>

<?= $this->section('current_page') ?>
Departments 
<?= $this->endSection() ?>
<?= $this->section('page_crumb') ?>
Departments 
<?= $this->endSection() ?>

<?= $this->section('extra-styles') ?>
<link rel="stylesheet" type="text/css" href="/assets/css/datatable.min.css"> 
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div class="card">
        <div class="card-block">
            <div class="row ">
             <div class="col-md-3 col-sm-3 col-lg-3">
                <h5 class="sub-title">Add New Department</h5>
                <form id="addNewDepartmentForm">
                    <div class="form-group">
                        <label for="">Department Name</label>
                        <input type="text" placeholder="Enter Department Name" id="department_name" name="department_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn-group">
                            <a href="" class="btn btn-mini btn-danger"><i class="ti-close mr-2"></i>Cancel</a>
                            <button class="btn btn-mini btn-primary" type="submit"><i class="ti-check mr-2"></i> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-9 col-sm-9 col-lg-9">
                <h5 class="sub-title">All Departments</h5>
                <div class="dt-responsive table-responsive">
                    <table  class="table table-striped table-bordered nowrap simpletable" id="departmentTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Department Name</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                      
                        <tbody>
                        <?php $i = 1; foreach($departments as $department) : ?>
                            <tr>
                                <td><?= $i++ ?> </td>
                                <td><?= $department['department_name'] ?></td>
                                <td><?= date('d M, Y', strtotime($department['created_at'])) ?></td>
                                <td> No Action </td>
                            </tr>
                        <?php endforeach ?>
                        </tfoot>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('extra-scripts') ?>
    <script src="/assets/js/datatable.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.simpletable').DataTable();

            $('.error-wrapper').hide();
            addNewDepartmentForm.onsubmit = async (e) => {
                e.preventDefault();

                axios.post('/add-new-department',new FormData(addNewDepartmentForm))
                .then(response=>{
                    Toastify({
                        text: "Success! New department saved.",
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        stopOnFocus: true,
                        onClick: function(){}
                    }).showToast();
                    $("#departmentTable").load(location.href + " #departmentTable");
                    $('#department_name').val('');
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