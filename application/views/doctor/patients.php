<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Patient Register Form</h4>
            </div>
            <div class="modal-body">
                <form id="newPatientForm" class="form-horizontal">
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">Name:
                        <p><input class="form-control" placeholder="Patname" name="name">
                        </p>

                        <div>Birthday:
                            <p><input class="form-control" type="date" id="PatBirth" name="PatBirth"
                                      placeholder="BirthDate"></p>
                        </div>

                        <div class="radio-toolbar">Gender:
                            <div class="form-check form-check-inline"
                                 style="padding:10px 0px 10px 0px; border: solid 0.5px darkgray;">
                                <label class="form-check-label" for="inlineRadio1">Male</label> <input
                                        class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio2">Female</label> <input
                                        class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio3">Other</label> <input
                                        class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio3" value="option3">
                            </div>
                        </div>
                        <div>Address:
                            <p><input class="form-control" placeholder="address" name="phone"></p>
                        </div>
                    </div>
                    <div class="tab">
                        <h3>Medical Records</h3>
                        <table class="table table-condensed " id="vertical-1">

                            <tr>
                                <th>Allergies</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Cancer</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Depression</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Epilepsy</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Heart_disease</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Liver_disease</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Diabetes</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>High_blood_pressure</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>other_problems</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active btn-sm">
                                            <input type="radio" name="options" id="option1" autocomplete="off"
                                                   checked> <span class="glyphicon glyphicon-remove"></span>
                                        </label>
                                        <label class="btn btn-secondary btn-sm">
                                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                                    class="glyphicon glyphicon-ok"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <label class="control-label">Notes</label>
                        <p><input placeholder="Notes" oninput="this.className = ''" name="Notes"></p>
                    </div>
                    <div style="overflow:auto;">
                        <div>
                            <button type="button" id="prevBtn" class="btn-primary btn" onclick="nextPrev(-1)">Patient
                                info
                            </button>
                            <button type="button" id="nextBtn" class="btn-primary btn" onclick="nextPrev(1)">
                                MedicalRecord
                            </button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid container-align">
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" id="myBtn" style="float: right; margin-top:40px;">New
                Patient
            </button>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <table id="patientTable" class="table table-bordered table-hover " style=" margin: auto">
                <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>last medical summary</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <!-- CK:  Loops over all patients passed in from the controller  -->
                <?php for ($c = 0; $c < count($patients); $c++) { ?>
                    <tr>
                        <!-- CK: Writes in the correct value -->
                        <td> <?php echo $patients[$c]['patient']; ?></td>
                        <td> <?php echo $patients[$c]['dob']; ?></td>
                        <td> m</td>
                        <td> Stomach</td>
                        <td colspan="2" class="text-center">
                            <!--CK: Using json_encode allows the data to be encoded for better use in front end
                                CK: utilising HTML5 data-*** attribute to attach the data to the element
                            -->
                            <a type="button" class="btn btn-primary"
                               href="<?= base_url('index.php/doctor/doctorpatients/get_patient_details/0') ?>">Patient
                                page</a>
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
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });

        $('#patientTable').DataTable();
        // CK - Taken from Bootstrap documentation (https://getbootstrap.com/docs/3.3/javascript/#modals)
        // CK - This is the listener for the modal popup, to we pass the relevant data to the right elements
        $('#patientModalEdit ').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('viewpatient') // Extract info from data-* attributes
            var modal = $(this)
            console.log(recipient)
            modal.find('.modal-title').text('Patient: ' + recipient.patient);
            modal.find('#patientModelName').val(recipient.patient);
            modal.find('#patientModelDob').val(recipient.dob);
            modal.find('#patientModelAge').val(recipient.age);
            modal.find('#patientModelDoctor').val(recipient.gp);
        })
    });

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab


    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Create";
        } else {
            document.getElementById("nextBtn").innerHTML = "Medical Record";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            $(document).ready(function () {
                var fdata = $("#newPatientForm").serializeArray();
                var url = "doctorpatients/add_new_patient?";
                $.post(url, fdata)
                    .done(function (resp) {
                        console.log(resp)

                    });
            })
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>


