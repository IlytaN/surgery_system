<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- CK: Modal View Patient info -->
<!-- CK: This is Structural from Bootstrap documentation   -->
<div class="modal" id="patientModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Edit Patient Records</h4>
            </div>

            <!--CK:  TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patientModelName">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Date of Birth:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patientModelDob">
                        </div>
                    </div>
                    <!--CK: TODO: implement a datepicker for better UI -->
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Age:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patientModelAge">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Doctor:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patientModelDoctor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Notes:</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="5" id="patientModelDoctor"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" style="width: 40%" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="patientModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">View Patient Records</h4>
            </div>

            <!--CK:  TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="patientModelName" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <span id="patientModelName"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patientModelDob" class="control-label col-md-3">Date of Birth:</label>
                        <div class="col-md-9">
                            <span id="patientModelDob"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patientModelAge" class="control-label col-md-3">Age:</label>
                        <div class="col-md-9">
                            <span id="patientModelAge"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patientModelDoctor" class="control-label col-md-3">Doctor:</label>
                        <div class="col-md-9">
                            <span id="patientModelDoctor"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Notes:</label>
                        <div class="col-md-9">
                            <textarea class="form-control" disabled rows="5" id="patientModelDoctor"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left">Delete</button>
                <button type="button" style="width: 40%" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid container-align">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1> Patients </h1>
        </div>
        <div class="col-md-12">

        </div>
    </div>

    <!-- Main content -->

    <div class="row">
        <div class="col-md-12">
            <table id="patientTable" class="table table-bordered table-hover ">
                <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Option 1</th>
                    <th>DOB</th>
                    <th>GP</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <!-- CK:  Loops over all patients passed in from the controller  -->
                <?php for ($c = 0; $c < count($patients); $c++) { ?>
                    <tr>
                        <!-- CK: Writes in the correct value -->
                        <td> <?php echo $patients[$c]['patient']; ?></td>
                        <td> <?php echo $patients[$c]['age']; ?></td>
                        <td> <?php echo $patients[$c]['dob']; ?></td>
                        <td> <?php echo $patients[$c]['gp']; ?></td>
                        <td colspan="2" class="text-center">
                            <!--CK: Using json_encode allows the data to be encoded for better use in front end
                                CK: utilising HTML5 data-*** attribute to attach the data to the element
                            -->
                            <button class="btn btn-primary" data-toggle="modal" data-target="#patientModalView"
                                    data-viewpatient='<?php echo json_encode($patients[$c]) ?>'>View
                            </button>
                            <button class="btn btn-default" data-toggle="modal" data-target="#patientModalEdit"
                                    data-viewpatient='<?php echo json_encode($patients[$c]) ?>'>Edit
                            </button>

                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#patientTable').DataTable();
        // CK - Taken from Bootstrap documentation (https://getbootstrap.com/docs/3.3/javascript/#modals)
        // CK - This is the listener for the modal popup, to we pass the relevant data to the right elements
        $('#patientModalEdit ').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('viewpatient') // Extract info from data-* attributes
            var modal = $(this)
            console.log(recipient)
            modal.find('.modal-title').text('Patient: ' + recipient.patient)
            modal.find('#patientModelName').val(recipient.patient);
            modal.find('#patientModelDob').val(recipient.dob)
            modal.find('#patientModelAge').val(recipient.age)
            modal.find('#patientModelDoctor').val(recipient.gp)
        })
    })
</script>