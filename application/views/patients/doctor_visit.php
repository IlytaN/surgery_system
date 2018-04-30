<!DOCTYPE html>
<html>
<style>
h1{margin-bottom: 50px;}
nav{ background-color: black; color:gray;}
#button{margin-left: 10px;}
a.btn.btn-primary.side-menu-button{width:110px; margin-bottom: 50px;}
</style>
<header class="main-header">
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="container-fluid">
          <span class="navbar-left navbar-brand"><span class="text-white-50 bg-dark"><small>Surgery Management System(Doctor)</small></span></span>
            <a type="button" class="btn btn-primary navbar-btn navbar-right"
               href="<?= base_url('/index.php/login/logout/') ?>"
               style="margin-right: 0;">Logout</a>
        </div><!-- /.container-fluid -->
    </nav>
</header>
<div class="container"style="text-align:center;">
    <h1><strong>Visits</strong></h1>
</div>
<div class="container" id="button">
<div class="col-md-2">
<aside class="main-sidebar">
    <div class="btn-group-ck">
        <div>
            <a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_app') ?>">Appointments</a>
        </div>

        <div>
            <a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_visit') ?>">Visits</a>
        </div>

        <div>
            <a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_patient') ?>">Patients</a>
        </div>
    </div>
  </div>

</aside>

<div class="col-md-10">
<div class="container content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="col-md-10">
    <div class="container content-wrapper">
        <!-- Content Header (Page header) -->

        <div class="row">
            <div class="appointment-search">
                Search By Date: <input type="date">
            </div>
        </div>
        <!-- Main content -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                          <button type="button" class="btn btn-info btn-lg" id="myBtn" style="float: right; margin-top:40px;">add visit </button>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Visit#</th>
                                <th>Date</th>
                                <th>Start ~ Finish</th>
                                <th>patient Name</th>
                                <th>Visit Summary</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td><time>2018-04-29</time></td>
                                <td><time>9:00~10:00</time></td>
                                <td>Homas Came</td>
                                <td>cough itchy throat</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><time>2018-04-29</time></td>
                                <td><time>10:00~11:00</time></td>
                                <td>George Victoria</td>
                                <td>fever,stomache</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><time>2018-04-29</time></td>
                                <td>  <time>13:00~16</time></td>
                                <td>File Holder</td>
                                <td>Vaccination</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

</div>
</div>
</html>
