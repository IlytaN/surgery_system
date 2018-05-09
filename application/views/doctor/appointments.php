<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid container-align">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1> Appointments </h1>
        </div>
        <div class="col-md-12">

        </div>
    </div>

    <!-- Main content -->

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="appointment-search">
                    Search By Date: <input type="date">
                </div>
            </div>
            <table id="patientTable" class="table table-bordered table-hover ">
                <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th>Doctor</th>
                    <th>Patient</th>
                    <th>Start time</th>
                    <th>Finish time</th>
                </tr>
                </thead>
                <tbody>
                <!-- CK:  Loops over all $appointment passed in from the controller  -->
                <?php for ($c = 0; $c < count($appointment); $c++) { ?>
                    <tr>
                        <!-- CK: Writes in the correct value -->
                        <td> <?php echo $appointment[$c]['AppId']; ?></td>
                        <td> <?php echo $appointment[$c]['DocName']; ?></td>
                        <td> <?php echo $appointment[$c]['PatName']; ?></td>
                        <td> <?php echo $appointment[$c]['start_time']; ?></td>
                        <td> <?php echo $appointment[$c]['finish_time']; ?></td>
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
