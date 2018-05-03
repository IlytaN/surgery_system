<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid container-align">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1> Scheduled Appointments </h1>
        </div>
        <div class="col-md-12">
            <div class="form-horizontal">
                <div class="page-functions form-group">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#newATimeslotModal">New
                        Appointment
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="row">
        <div class="col-md-12" style="height: 550px;">
            <div id="timeslotsCalender">
            </div>
        </div>
    </div>

</div>

<script>
    var timeslots = <?php echo '["an array of timeslots"]'?>
        $(document).ready(function () {
            // page is ready
            $('#timeslotsCalender').fullCalendar({
                height: 'auto',
                allDaySlot: false,
                defaultView: 'agendaWeek',
                businessHours: {
                    dow: [1, 2, 3, 4, 5, 6],
                    start: '08:00',
                    end: '18:00',
                },
                minTime: '09:00:00',
                maxTime: '18:00:00',
                editable: true,
                nowIndicator: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
            })
        });
</script>
