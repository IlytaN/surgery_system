<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Modal View Patient info -->
<div class="modal" id="newAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">New Appointment</h4>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <!-- inits the form and add the right class -->
                <form id="newAppointment" class="form-horizontal">
                    <div class="form-group">
                        <label for="patientNameNewAppointment" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <select id="patientNameNewAppointment" name="patientNameNewAppointment" class="selectpicker" data-live-search="true">
                                <!-- CK: pulling data form dummy data in the backend  -->
                                <!-- CK: looping over the data and creating the option element - values are just the
                                         indexes of the array for now, but could be replaced by specific patient IDs
                                 -->
                                <?php for ($c = 0; $c < count($patients); $c++) {
                                    echo '<option value="' . $c . '">' . $patients[$c]['patient'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="timeslotNewAppointment" class="control-label col-md-3">Preferred Time Slot:</label>
                        <div class="col-md-9">
                            <select id="timeslotNewAppointment" name="timeslotNewAppointment" class="selectpicker">
                                <option value="1">09:00</option>
                                <option value="1">09:30</option>
                                <option value="1">10:00</option>
                                <option value="1">10:30</option>
                                <option value="1">11:00</option>
                                <option value="1">11:30</option>
                                <option value="1">12:00</option>
                                <option value="1">12:30</option>
                                <option value="1">13:00</option>
                                <option value="1">13:30</option>
                                <option value="1">14:00</option>
                                <option value="1">14:30</option>
                                <option value="1">15:00</option>
                                <option value="1">15:30</option>
                                <option value="1">16:00</option>
                                <option value="1">16:30</option>
                                <option value="1">17:00</option>
                                <option value="1">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-two">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-three">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-four">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="defaultSelectNewAppointment" class="control-label col-md-3">Unknown Field:</label>
                        <div class="col-md-9">
                            <select id="defaultSelectNewAppointment" class="selectpicker">
                                <option value="1">09:00</option>
                                <option value="1">09:30</option>
                                <option value="1">10:00</option>
                                <option value="1">10:30</option>
                                <option value="1">11:00</option>
                                <option value="1">11:30</option>
                                <option value="1">12:00</option>
                                <option value="1">12:30</option>
                                <option value="1">13:00</option>
                                <option value="1">13:30</option>
                                <option value="1">14:00</option>
                                <option value="1">14:30</option>
                                <option value="1">15:00</option>
                                <option value="1">15:30</option>
                                <option value="1">16:00</option>
                                <option value="1">16:30</option>
                                <option value="1">17:00</option>
                                <option value="1">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-five">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="newAppointmentBtn" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="editAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Edit Appointment</h4>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <!-- inits the form and add the right class
                <form_open('secretary/secretaryappointments/newappointment',
                    array('class' => 'form-horizontal', 'id' => 'newAppointment'));
                -->

                <form class="form-horizontal" id="editAppointment">
                    <div class="form-group">
                        <label for="patientNameEditAppointment" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="patientNameEditAppointment">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="timeslotNewAppointment" class="control-label col-md-3">Start:</label>
                        <div class="col-md-9">
                            <input type="time" style="width:40%" class="form-control" id="patientNameStartTime">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="timeslotNewAppointment" class="control-label col-md-3">End:</label>
                        <div class="col-md-9">
                            <input type="time" style="width:40%" class="form-control" id="patientNameEndTime">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-two">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-three">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-four">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="defaultSelectNewAppointment" class="control-label col-md-3">Unknown Field:</label>
                        <div class="col-md-9">
                            <select id="defaultSelectNewAppointment" class="selectpicker">
                                <option value="1">09:00</option>
                                <option value="1">09:30</option>
                                <option value="1">10:00</option>
                                <option value="1">10:30</option>
                                <option value="1">11:00</option>
                                <option value="1">11:30</option>
                                <option value="1">12:00</option>
                                <option value="1">12:30</option>
                                <option value="1">13:00</option>
                                <option value="1">13:30</option>
                                <option value="1">14:00</option>
                                <option value="1">14:30</option>
                                <option value="1">15:00</option>
                                <option value="1">15:30</option>
                                <option value="1">16:00</option>
                                <option value="1">16:30</option>
                                <option value="1">17:00</option>
                                <option value="1">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Unknown:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="unknown-five">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" pull-left btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="editAppointmentBtnDelete" class="btn btn-danger">Delete</button>
                <button type="button" id="editAppointmentBtnSave" style="width: 30%;" class="btn btn-primary">Update
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid container-align">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1> Scheduled Appointments </h1>
        </div>
        <div class="col-md-12">
            <div class="form-horizontal">
                <div class="page-functions form-group">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#newAppointmentModal">New
                        Appointment
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="row">
        <div class="col-md-12" style="height: 550px;">
            <div id="appointmentsCalender">
            </div>
        </div>
    </div>
</div>

<script>

    var appointments = <?php echo json_encode($appointments) ?>;
    var events = [];
    // CK - refactor for the library events
    for (var app in appointments) {
        events.push({
            title: appointments[app]['patient'],
            start: appointments[app]['appointment_date'],
            doctor: appointments[app]['doctor']
        })
    }

    var editingAppointmentData = {};

    //CK - Setup for the calender using specific library
    $(document).ready(function () {
        $('#appointmentsCalender').fullCalendar({
            height: 'auto',
            events: events,
            allDaySlot: false,
            defaultView: 'agendaWeek',
            businessHours: {
                dow: [1, 2, 3, 4, 5, 6],
                start: '08:00',
                end: '18:00',
            },
            minTime: '09:00:00',
            maxTime: '18:00:00',
            editable: false,
            nowIndicator: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventClick: function (event, element) {
                editingAppointmentData = event;
                $('#editAppointmentModal').modal();
            }
        });

        $('#newAppointmentModal').on('show.bs.modal', function (event) {
            // do stuff
        });

        $('#editAppointmentModal').on('show.bs.modal', function (event) {
            console.log(editingAppointmentData)
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('viewpatient'); // Extract info from data-* attributes
            var modal = $(this);

            var startTime = new Date(editingAppointmentData.start);
            var endTime = new Date(editingAppointmentData.end);

            modal.find('.modal-title').text('Patient: ' + editingAppointmentData.title);
            modal.find('#patientNameEditAppointment').val(editingAppointmentData.title);
            modal.find('#patientNameStartTime').val(startTime.getHours() - 1 + ':' + startTime.getMinutes());  // throwing an hour because of GMT .. possible be okay with server time
            modal.find('#patientNameEndTime').val(endTime.getHours() - 1 + ':' + endTime.getMinutes());
        });


        $('#editAppointmentBtnSave').click(function () {

            // CK: getting a range issue with Jquery on the standard obj... can just cast into a more friendly version here
            var fdata = {
                name: editingAppointmentData.title,
                start: editingAppointmentData.start
            };

            // TODO: need to know what the rest of the values are? !

            $.post("secretaryappointments/updateappointment", fdata)
                .done(function (resp) {
                    console.log(resp)
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents
                });
        })

        $('#editAppointmentBtnDelete').click(function () {

            // dummy -
            editingAppointmentData.id = 1; //REMOVE: once teh real ids for each appointment are being passed

            // CK: getting a range issue with Jquery on the standard obj... can just cast into a more friendly version here
            var id = editingAppointmentData.id;
            $.post("secretaryappointments/deleteappointment/" + id)
                .done(function (resp) {
                    console.log(resp)
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents
                });
        })


        //CK: There might be a better PHP way of doing this
        $('#newAppointmentBtn').click(function () {

            // collect form data
            var fdata = $("#newAppointment").serializeArray(); // This collects the form and submits it as a array.
            $.post("secretaryappointments/newappointment", fdata)
                .done(function (resp) {
                    console.log(resp)
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents
                });
        });
    });

</script>