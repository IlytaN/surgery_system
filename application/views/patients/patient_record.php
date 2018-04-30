<!DOCTYPE html>
<html>
<style>
h1{margin-bottom: 50px;}
nav{ background-color: black; color:gray;}
#button{margin-left: 10px;}
a.btn.btn-primary.side-menu-button{width:110px; margin-bottom: 50px;}
#vertical-1 th{width:50%;
    color:#666666;
  text-align: left;
font-weight: lighter;
background: #f2f2f2;}
 .table{ width:100%;
 column-rule-color: #ccefff;}
 .glyphicon-ok{color:red;}
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
    <h1><strong>Patient-(name)</strong></h1>
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


    <!-- Content Header (Page header) -->
    <div class="col-md-10">
    <div class="container content-wrapper">

        <!-- Main content -->
        <div class="container">
          <div class="panel panel-info">
      <div class="panel-heading">Info/MedicalRecord</div>
      <div class="panel-body">
          <div class="col-md-5">
            <table class="table " id="vertical-1">
             <caption>Info</caption>
             <tr>
                 <th>name</th>
                 <td>Helloname</td>
             </tr>
             <tr>
                 <th>birthdate</th>
                 <td>1995.3.4</td>
             </tr>
             <tr>
                 <th>Gender</th>
                 <td>F</td>
             </tr>
             <tr>
                 <th>Address</th>
                 <td>dublin4</td>
             </tr>
         </table>
       </div>
      <div class="col-md-5">
        <table class="table table-condensed "  id="vertical-1">
         <caption>MedicalRecord<button class="btn" data-toggle="modal" data-target="#patientModalEdit"
                 data-viewpatient='<?php echo json_encode($patients[$c]) ?>'>Edit
         </button></caption>


         <tr>
             <th>Allergies</th>
             <td><span class="glyphicon glyphicon-remove"></span></td>
         </tr>
         <tr>
             <th>Cancer</th>
             <td><span class="glyphicon glyphicon-remove"></span></td>
         </tr>
         <tr>
             <th>Depression</th>
             <td><span class="glyphicon glyphicon-ok"></span></td>
         </tr>
         <tr>
             <th>Epilepsy</th>
             <td><span class="glyphicon glyphicon-ok"></span></td>
         </tr>
         <tr>
             <th>Heart_disease</th>
             <td><span class="glyphicon glyphicon-remove"></span></td>
         </tr>
         <tr>
             <th>Liver_disease</th>
             <td><span class="glyphicon glyphicon-remove"></span></td>
         </tr>
         <tr>
             <th>Diabetes</th>
             <td><span class="glyphicon glyphicon-remove"></span></td>
         </tr>
         <tr>
             <th>High_blood_pressure</th>
             <td><span class="glyphicon glyphicon-remove"></span></td>
         </tr>
         <tr>
             <th>other_problems</th>
             <td><span class="glyphicon glyphicon-remove"></span></td>
         </tr>
       </table>
    </div>
            </div>





        </div>
        <div class="container">
          <div class="panel panel-info">
                <div class="panel-heading">Scheduled Appointment</div>
                <div class="panel-body">  <table id="example" class="table table-bordered table-hover">
                      <thead>
                      <tr href=>
                          <th>App#</th>
                          <th >Date</th>
                          <th> Time</th>
                          <th>note</th>
                          <th>status</th>
                      </tr>
                      </thead>
                      <tbody>

                          <tr>
                          <td>3</td>
                          <td><date>4/30/2018 </date></td>
                          <td>  <time>13:00~14:00</time></td>
                          <td>Vaccination</td>
                          <td>scheduled<button class="btn btn-primary" data-toggle="modal" data-target="#patientModalView"
                                  data-viewpatient='<?php echo json_encode($patients[$c]) ?>'>Add Visit Summary</button></td>
                      </tr>

                      </tbody>

                  </table></div>
              </div>
            <div class="panel panel-info">

          <div class="panel-heading">Visit History</div>
          <div class="panel-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Visit#</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Visit Summary    </th>

                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>1</td>
                    <td><time>2018-04-25</time></td>
                    <td><time>9:00~10:00</time></td>
                    <td>cough itchy throat<button class="btn btn-primary" data-toggle="modal" data-target="#patientModalView"
                            data-viewpatient='<?php echo json_encode($patients[$c]) ?>'>View</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><time>2018-04-30</time></td>
                    <td><time>10:00~11:00</time></td>
                      <td>fever,stomache</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><time>2018-05-29</time></td>
                    <td>  <time>13:00~16</time></td>
                      <td>Vaccination</td>
                </tr>

                </tbody>

            </table></div>
</div>

                        </div>

</html>