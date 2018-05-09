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
                        <label for="message-text" class="control-label col-md-3">Gender</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patienModelGender">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Address</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patientModelAddress">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" style="width: 40%" class="btn btn-primary" id="saveUpdateBtn">Save Changes</button>
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
                <button type="button" class="btn btn-danger pull-left" id="DeletePatientBtn">Delete</button>
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
                            <!-- QH: This is to try "add patient" function -->
                            <button class="btn btn-default" id="addPatientBtn">Add patient
                            </button>
                            <!-- QH: This is to try "add patient medical records" function -->
                            <button class="btn btn-default" id="addHistoryBtn">Add medical history
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
            modal.find('.modal-title').text('Patient: ' + recipient.PatName)
            modal.find('#patientModelName').val(recipient.PatName);
            modal.find('#patientModelDob').val(recipient.PatBirthDate)
            modal.find('#patienModelGender').val(recipient.PatGender)
            modal.find('#patientModelAddress').val(recipient.PatAddress)
        });

        // QH: Add a new patient
        $('#addPatientBtn').click(function () {
            // collect form data
            $.post("SecretaryPatients/add_patient", {PatName: "Ciaran", PatBirthDate: "1960-03-05", PatGender: "Male", PatAddress: "Dublin"})
                .done(function (resp) {
                    console.log(resp)
                });
        })

        // QH: Add a patient medical history
        // QH to Catherine: please make it so that the secretary can only enter medical history one time (after she inserts new patient info). Otherwise
        // ...there would be many repeated medical history for a unique patient.
        $('#addHistoryBtn').click(function () {
            // collect form data
            $.post("SecretaryPatients/add_medical_history", {PatId: "11", Allergies: "squid", Cancer: "N", Depression: "N", Epilepsi:"N", Heart_disease:"Y",
                                                            Liver_disease:"Y", Diabetes: "N", High_blood_pressure:"N", other_problems: "stomach problem"})
                .done(function (resp) {
                    console.log(resp)
                });
        })

        // QH: update patient details
        $('#saveUpdateBtn').click(function () {
            // collect form data
            $.post("SecretaryPatients/update_patient", {PatId: "2", PatName: "Ciaran", PatBirthDate: "1960-03-05", PatGender: "Male", PatAddress: "Dublin"})
                .done(function (resp) {
                    console.log(resp)
                });
        })

        // QH: Delete a patient
        $('#DeletePatientBtn').click(function () {
            // collect form data
            $.post("SecretaryPatients/delete_patient", {PatId: "2"})
                .done(function (resp) {
                    console.log(resp)
                });
        })
    })
</script>
