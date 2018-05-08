<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<nav class="sidebar">
    <div class="btn-group-ck">
        <div>
            <a class="btn btn-primary active side-menu-button"
               href="<?= base_url('index.php/doctor/doctorpatients') ?>">Patients</a>
        </div>

        <div>
            <a class="btn btn-primary side-menu-button"
               href="<?= base_url('index.php/doctor/doctorvisits') ?>">Visits</a>
        </div>

        <div>
            <a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/doctor/doctorappointments') ?>">Appointments</a>
        </div>
    </div>
</nav>


