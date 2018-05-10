<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Modal View Patient info -->
<!-- Modal View Patient info -->
<div class="modal" id="newAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">New Appointment</h3>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <form class="form-horizontal" id="newAppointment">
                    <div class="form-group">
                        <label for="patientNameNewAppointment" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <select id="patientNameNewAppointment" name="pn" value="pn" class="selectpicker"
                                    data-live-search="true">
                                <!-- CK: pulling data form dummy data in the backend  -->
                                <!-- CK: looping over the data and creating the option element - values are just the
                                         indexes of the array for now, but could be replcaed by specfic patient IDs
                                 -->
                                <?php for ($c = 0; $c < count($patients); $c++) {
                                    echo '<option value="' . $patients[$c]['PatId'] . '">' . $patients[$c]['PatName'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="doctorNameNewAppointment" class="control-label col-md-3">Doctor Name:</label>
                        <div class="col-md-9">
                            <select id="doctorNameNewAppointment" name="dn" value="dn" class="selectpicker"
                                    data-live-search="true">
                                <!-- CK: pulling data form dummy data in the backend  -->
                                <!-- CK: looping over the data and creating the option element - values are just the
                                         indexes of the array for now, but could be replcaed by specfic patient IDs
                                 -->
                                <?php for ($c = 0; $c < count($doctors); $c++) {
                                    echo '<option value="' . $doctors[$c]['DocId'] . '">' . $doctors[$c]['DocName'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="startslotNewAppointment" class="control-label col-md-3">Start Time:</label>
                        <div class="col-md-9">
                            <select id="startlotNewAppointment" name="startt" value="startt" class="selectpicker">
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="finishSelectNewAppointment" class="control-label col-md-3">Finish time:</label>
                        <div class="col-md-9">
                            <select id="finishSelectNewAppointment" name="finisht" value="finisht" class="selectpicker">
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Date:</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="dates" id="addNewAppDate">
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

<div class="modal" id="AppointmentPaymentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Payment</h3>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <!-- inits the form and add the right class -->

                <form class="form-horizontal" id="newAppointment">
                    <div class="form-group">
                        <label for="patientNamePayAppointment" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <select id="patientNamePayAppointment" name="pn" value="pn" class="selectpicker"
                                    data-live-search="true">
                                <!-- CK: pulling data form dummy data in the backend  -->
                                <!-- CK: looping over the data and creating the option element - values are just the
                                         indexes of the array for now, but could be replcaed by specfic patient IDs
                                 -->
                                <?php for ($c = 0; $c < count($patients); $c++) {
                                    echo '<option value="' . $c . '">' . $patients[$c]['PatName'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="startslotAppointment" class="control-label col-md-3">Start Time:</label>
                        <div class="col-md-9">
                            <select id="startlotAppointment" name="startt" value="startt" class="selectpicker">
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
                        <label for="message-text" class="control-label col-md-3">Appointment Date:</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="ADate" id="ADate" placeholder="YYYY/MM/DD">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Payment Date:</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="PDate" id="PDate" placeholder="YYYY/MM/DD">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Payment Type:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="PayType" id="PayType"
                                   placeholder="Cash/Credit card">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="addPaymentBtn" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="UpdateAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Update Appointment</h3>
            </div>

            <!-- TODO: trigger the display of EDIT or VIEW in JS and avoid Over complication with PHP views -->
            <div class="modal-body">
                <h4 class="" id="exampleModalLabel">Enter current details</h4>
                <!-- inits the form and add the right class -->
                <form class="form-horizontal" id="newAppointment">
                    <div class="form-group">

                        <label for="patientNameUpAppointment" class="control-label col-md-3">Patient Name:</label>
                        <div class="col-md-9">
                            <select id="patientNameUpAppointment" name="pn" value="pn" class="selectpicker"
                                    data-live-search="true">
                                <!-- CK: pulling data form dummy data in the backend  -->
                                <!-- CK: looping over the data and creating the option element - values are just the
                                         indexes of the array for now, but could be replcaed by specfic patient IDs
                                 -->
                                <?php for ($c = 0; $c < count($patients); $c++) {
                                    echo '<option value="' . $patients[$c]['PatId'] . '">' . $patients[$c]['PatName'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="oldstartlotDelAppointment" class="control-label col-md-3">Start Time:</label>
                        <div class="col-md-9">
                            <select id="oldstartlotDelAppointment" name="startt" class="selectpicker">
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Date:</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="oldDate" id="oldDate"
                                   placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                    <h4 class="" id="exampleModalLabel">Enter updated details</h4>
                    <div class="form-group">

                        <label for="doctorNameUpAppointment" class="control-label col-md-3">Doctor Name:</label>
                        <div class="col-md-9">
                            <select id="doctorNameUpAppointment" name="dn" value="dn" class="selectpicker"
                                    data-live-search="true">
                                <?php for ($c = 0; $c < count($doctors); $c++) {
                                    echo '<option value="' . $doctors[$c]['DocId'] . '">' . $doctors[$c]['DocName'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newstartlotNewAppointment" class="control-label col-md-3">Start Time:</label>
                        <div class="col-md-9">
                            <select id="newstartlotNewAppointment" name="nstartt" value="nstartt" class="selectpicker">
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newfinishSelectNewAppointment" class="control-label col-md-3">Finish time:</label>
                        <div class="col-md-9">
                            <select id="newfinishSelectNewAppointment" name="nfinisht" value="nfinisht"
                                    class="selectpicker">
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label col-md-3">Date:</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="dates" id="newDate" placeholder="dd/mm/yyyy">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" pull-left btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="editAppointmentBtnDelete" class="btn btn-danger">Delete</button>
                <button type="button" id="editAppointmentBtnSave" style="width: 30%;" class="btn btn-primary">
                    Update
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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#newAppointmentModal" id="NewApp">
                        New
                        Appointment
                    </button>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#AppointmentPaymentModal"
                            id="NewApp">Add
                        Payment
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
    //console.log(appointments)
    var events = [];

    // CK - refactor for the library events
    sortAppointments(appointments);

    function sortAppointments(appointments) {
        events = [];
        //CK: get the date and parse out the time so it is easier to work with the DOM elements
        for (var app in appointments) {
            var d = new Date(appointments[app]['SlotDate']);
            var end = new Date(appointments[app]['SlotDate']);
            var sd = String(appointments[app]['start_time']).split(":");
            var ed = String(appointments[app]['finish_time']).split(":");
            end.setHours(ed[0]);
            end.setMinutes(ed[1]);
            d.setHours(sd[0]);
            d.setMinutes(sd[1]);
            var offsetdate = (new Date(d.getTime() - (d.getTimezoneOffset() * 60000)));
            var endOffSetDate = (new Date(end.getTime() - (end.getTimezoneOffset() * 60000)));
            events.push({
                id: appointments[app]['SlotId'],
                title: appointments[app]['PatName'],
                start: offsetdate.toISOString(),
                end: endOffSetDate.toISOString(),
                start_string: String(appointments[app]['start_time']),
                end_string: String(appointments[app]['finish_time']),
                doctor: appointments[app]['DocName'],
                docid: appointments[app]['DocId'],
                patId: appointments[app]['PatId']
            })
        }
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
                $('#UpdateAppointmentModal').modal();
            }
        });

        $('#UpdateAppointmentModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('viewpatient'); // Extract info from data-* attributes
            var modal = $(this);

            var startTime = new Date(editingAppointmentData.start);
            var endTime = new Date(editingAppointmentData.end);
            modal.find('.modal-title').text('Patient: ' + editingAppointmentData.title);

            // Set the fields in the form of the click appt
            // selectpicker is the library used for the dropdowns and had attached methods for udpateing the DOM
            $('#patientNameUpAppointment').selectpicker('val', editingAppointmentData.patId);
            document.getElementById("oldDate").valueAsDate = startTime;
            $('#oldstartlotDelAppointment').selectpicker('val', editingAppointmentData.start_string.toString());
            $('#doctorNameUpAppointment').selectpicker('val', editingAppointmentData.docid);

        });


        $('#editAppointmentBtnSave').click(function () {
            console.log(editingAppointmentData);
            // CK: getting a range issue with Jquery on the standard obj... can just cast into a more friendly version here
            var fdata = {
                slotId: editingAppointmentData.id,
                patId: $('#patientNameUpAppointment').selectpicker('val'),
                date: $('#newDate').val(),
                start_time: $('#newstartlotNewAppointment').selectpicker('val'),
                end_time: $('#newfinishSelectNewAppointment').selectpicker('val'),
                docId: $('#doctorNameUpAppointment').selectpicker('val')
            };
            // TODO: need to know what the rest of the values are? !
            $.post("secretaryappointments/updateappointment", fdata)
                .done(function (resp) {
                    sortAppointments(resp);
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    // Doesn't seem to be working but just refresh the page for the demo
                    $('#appointmentsCalender').fullCalendar('updateEvents', events);
                    $('#UpdateAppointmentModal').modal('hide')
                });
        })

        $('#editAppointmentBtnDelete').click(function () {

            // CK: getting a range issue with Jquery on the standard obj... can just cast into a more friendly version here
            var id = editingAppointmentData.id;
            $.post("secretaryappointments/deleteappointment/" + id)
                .done(function (resp) {
                    sortAppointments(resp);
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    // Doesn't seem to be working but just refresh the page for the demo
                    $('#appointmentsCalender').fullCalendar('updateEvents', events);
                    $('#UpdateAppointmentModal').modal('hide')
                });
        });


        //CK: There might be a better PHP way of doing this
        $('#newAppointmentBtn').click(function () {

            // collect form data
            var fdata = $("#newAppointment").serializeArray(); // This collects the form and submits it as a array.

            var d = document.getElementById("doctorNameNewAppointment")
            var dn = d.options[d.selectedIndex].text;

            var p = document.getElementById("patientNameNewAppointment");
            var pn = p.options[p.selectedIndex].text;


            var fdata = {
                patientNameNewAppointment: pn,
                doctorNameNewAppointment: dn,
                startlotNewAppointment: $('#startlotNewAppointment').selectpicker('val'),
                finishSelectNewAppointment: $('#finishSelectNewAppointment').selectpicker('val'),
                date: $('#addNewAppDate').val()
            };

            $.post("secretaryappointments/newappointment", fdata)
                .done(function (resp) {
                    console.log(resp)
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents
                    $('#newAppointmentModal').modal('hide')
                });
        });

        $('#addPaymentBtn').click(function () {
            var fdata = $('#').serializeArray();
            $.post("secretaryappointments/payment", fdata)
                .done(function (resp) {
                    console.log(resp);
                    //CK: This  will allow us to rerender the appointments once it returns true.-->
                    //https://fullcalendar.io/docs/rerenderEvents

                });
        });
    });


    function SelectElement(id, valueToSelect) {
        var element = document.getElementById(id);
        element.value = valueToSelect;
    }

</script>