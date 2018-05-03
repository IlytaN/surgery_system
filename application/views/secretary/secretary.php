<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<nav class="sidebar">
    <div class="btn-group-ck">
        <div>
            <a class="btn btn-primary active side-menu-button" href="<?= base_url('index.php/secretary/secretarypatients') ?>">Patients</a>
        </div>

        <div>
            <a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/secretary/secretarytimeslots') ?>" > Time Slots</a>
        </div>

        <div>
            <a class="btn btn-primary side-menu-button"  href="<?= base_url('index.php/secretary/secretaryappointments') ?>" > Appointments</a>
        </div>
    </div>
</nav>
