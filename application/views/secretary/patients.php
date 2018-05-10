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

<div class="modal" id="newPatientModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <label for="PatName" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="PatName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PatBirthDate" class="control-label col-md-3">Date of Birth:</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="PatBirthDate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="patientModelAge" class="control-label col-md-3">Gender:</label>
                        <div class="col-md-9">
                            <select name="PatGender" id="PatGender" class="selectpicker">
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PatAddress" class="control-label col-md-3">Address:</label>
                        <div class="col-md-9">
                            <input type="text" id="PatAddress" class="form-control">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" style="width: 40%" id="addPatSubmit" class="btn btn-primary pull-left">Submit
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="newPatientMedicalHistory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Medical History</h4>
            </div>

            <!--CK:  TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views

            {PatId: "11", Allergies: "squid", Cancer: "N", Depression: "N", Epilepsi:"N", Heart_disease:"Y",
                                                            Liver_disease:"Y", Diabetes: "N", High_blood_pressure:"N", other_problems: "stomach problem"}

            -->
            <div class="modal-body">
                <div class="form-horizontal">
                    <input type="hidden" id="ID">
                    <div class="form-group">
                        <label for="PatName" class="control-label col-md-3">Known Conditions:</label>
                        <div class="col-md-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="Cancer"> Cancer
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="Depression"> Depression
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="Epilepsy"> Epilepsy
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="Heart_disease"> Heart Disease
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="Liver_disease"> Liver Disease
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="Diabetes" id="Diabetes"> Diabetes
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="High_blood_pressure"
                                           id="High_blood_pressure"> High Blood Pressure
                                </label>v
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Allergies" class="control-label col-md-3">Known Allergies:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="Allergies">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="other_problems" class="control-label col-md-3">Other Conditions:</label>
                        <div class="col-md-9">
                            <textarea rows="3" class="form-control" id="other_problems"></textarea>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" style="width: 40%" id="addMedHistorySubmit" class="btn btn-primary pull-left">
                    Submit
                </button>
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
            <div class="form-horizontal">
                <div class="page-functions form-group">
                    <button class="btn btn-primary" id="addPatientBtn" data-toggle="modal"
                            data-target="#newPatientModal">Add patient
                    </button>
                </div>
            </div>
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
                            <!-- QH: This is to try "add patient medical records" function -->
                            <button class="btn btn-default" id="addHistoryBtn" data-toggle="modal"
                                    data-target="#newPatientMedicalHistory"
                                    data-patid='<?php echo $patients[$c]['PatId'] ?>'>Add medical history
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
        $('#patientModalEdit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('viewpatient'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('.modal-title').text('Patient: ' + recipient.patient);
            modal.find('#patientModelName').val(recipient.patient);
            modal.find('#patientModelDob').val(recipient.dob);
            modal.find('#patientModelAge').val(recipient.age);
            modal.find('#patientModelDoctor').val(recipient.gp);

        })

        $('#addMedHistorySubmit').click(function () {

            var fdata = {
                'PatId': $('#ID').val(),
                'Allergies': $('#Allergies').val(),
                'Cancer': $('#Cancer').prop('checked'),
                'Depression': $('#Depression').prop('checked'),
                'Epilepsy': $('#Epilepsy').prop('checked'),
                'Heart_disease': $('#Heart_disease').prop('checked'),
                'Liver_disease': $('#Liver_disease').prop('checked'),
                'Diabetes': $('#Diabetes').prop('checked'),
                'High_blood_pressure': $('#High_blood_pressure').prop('checked'),
                'other_problems': $('#other_problems').val()
            };

            $.post("secretarypatients/add_medical_history", fdata)
                .done(function (resp) {
                    $('#newPatientMedicalHistory').modal('hide')
                });
        })

        $('#newPatientMedicalHistory').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('patid'); // Extract info from data-* attributes
            $('#ID').prop('value',recipient)
        })


        $('#addPatSubmit').click(function () {

            var fdata = {
                PatName: $('#PatName').val(),
                PatBirthDate: $('#PatBirthDate').val(),
                PatGender: $('#PatGender').selectpicker('val'),
                PatAddress: $('#PatAddress').val()
            };

            $.post("secretaryappointments/newappointment", fdata)
                .done(function (resp) {
                    $('#newAppointmentModal').modal('hide')
                }).error(function (resp) {
                console.log(resp)
            });
        });
    })


</script>