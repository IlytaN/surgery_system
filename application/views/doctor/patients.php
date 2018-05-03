<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- CK: Modal View Patient info -->
<!-- CK: This is Structural from Bootstrap documentation   -->
<div class="modal" id="patientModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Edit summary</h4>
            </div>

            <!--CK:  TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label col-md-3">Summary</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patientModelName">
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

<!-- QH: Patient medical records should be shown in this modal. The function in Controller is show_patient_details($p_id)-->
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
                <label for="patienModelGender" class="control-label col-md-3">Gender</label>
                <div class="col-md-9">
                    <span id="patienModelGender"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="patientModelAddress" class="control-label col-md-3">Address</label>
                <div class="col-md-9">
                    <span id="patientModelAddress"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="patientModelAllergies" class="control-label col-md-3">Allergies</label>
                <div class="col-md-9">
                    <span id="patientModelAllergies"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="patientModelCancer" class="control-label col-md-3">Cancer</label>
                <div class="col-md-9">
                    <span id="patientModelCancer"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="patientModelDepression" class="control-label col-md-3">Depression</label>
                <div class="col-md-9">
                    <span id="patientModelDepression"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="patientModelEpilepsi" class="control-label col-md-3">Epilepsi</label>
                <div class="col-md-9">
                    <span id="patientModelEpilepsi"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
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
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Summary</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <!-- CK:  Loops over all patients passed in from the controller  -->
                <?php for ($c = 0; $c < count($patients); $c++) { ?>
                    <tr>
                        <!-- CK: Writes in the correct value -->
                        <td> <?php echo $patients[$c]['PatName']; ?></td>
                        <td> <?php echo $patients[$c]['PatBirthDate']; ?></td>
                        <td> <?php echo $patients[$c]['PatGender']; ?></td>
                        <td> <?php echo $patients[$c]['PatAddress']; ?></td>
                        <td> <?php echo $patients[$c]['summary']; ?></td>
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
            modal.find('.modal-title').text('Patient: ' + recipient.PatName);
            modal.find('#patientModelName').val(recipient.PatName);
            modal.find('#patientModelDob').val(recipient.PatBirthDate);
            modal.find('#patienModelGender').val(recipient.PatGender);
            modal.find('#patientModelAddress').val(recipient.PatAddress);
            modal.find('#patientModelSummary').val(recipient.summary)
        })
    })
</script>
