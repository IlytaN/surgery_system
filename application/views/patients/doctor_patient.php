<!DOCTYPE html>
<html>

<style>
h1{margin-bottom: 50px;}
nav{ background-color: black; color:gray;}
#button{margin-left: 10px;}
a.btn.btn-primary.side-menu-button{width:110px; margin-bottom: 50px;}
</style>


<body>
  <!--  top black nav bar-->
  <header class="main-header">
      <nav class="navbar navbar-static-top">
          <div class="container-fluid">
              <span class="navbar-left navbar-brand"><span class="text-white-50 bg-dark"><small>Surgery Management System(Doctor)</small></span></span>
              <a type="button" class="btn btn-primary navbar-btn navbar-right"
                href="<?= base_url('/index.php/login/logout/') ?>"
                style="margin-right: 0;">Logout</a>
              </div>
        </nav>
    </header>
  <!-- title-->
      <div class="container" style="text-align:center;">
        <h1> <strong>Patients</strong></h1>
      </div>
  <!-- side button-->
<div class="container" id="button">
<div class="col-md-2">
  <aside class="main-sidebar">
    <div class="btn-group-ck">
      <div><a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_app') ?>">Appointments</a> </div>
      <div><a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_visit') ?>">Visits</a> </div>
      <div> <a class="btn btn-primary side-menu-button" href="<?= base_url('index.php/patients/doctor_patient') ?>">Patients</a> </div>
    </div>
  </aside>
</div>
      <!-- Main content -->

          <div class="col-md-10">
            <div class="container content-wrapper">
            <div class="box">
              <div class="box-body">
                <!--patient table-->
                      <table border="1" onclick="showDetails(event)" id="patientTable" class="table table-bordered table-hover " style=" ">
                              <thead>
                                <tr>
                                  <th>Patient ID </th>
                                  <th>Patient Name</th>
                                  <th>DOB</th>
                                  <th>Gender</th>
                                  <th>Last Visit date</th>
                                  <th>Last Visit summary</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- CK:  Loops over all patients passed in from the controller  -->
                                <?php for ($c = 0; $c < count($patients); $c++) { ?>
                                  <tr>
                                      <!-- CK: Writes in the correct value -->
                                      <td> <?php echo $patients[$c]['id']; ?></td>
                                      <td> <?php echo $patients[$c]['name']; ?></td>
                                      <td> <?php echo $patients[$c]['dob']; ?></td>
                                      <td> <?php echo $patients[$c]['gender']; ?></td></td>
                                      <td> 2018/4/12 </td>
                                      <td> stomache </td>
                                      <td colspan="2" class="text-center">
                                          <!--CK: Using json_encode allows the data to be encoded for better use in front end
                                              CK: utilising HTML5 data-*** attribute to attach the data to the element
                                            -->
                                            <a type="button" class="btn btn-info" href="<?= base_url('index.php/patients/patient_record') ?>">Patient page</a>

                                          </td>
                                        </tr>
                                      <?php } ?>

                                    </tbody>
                                  </table>
          </div>
      </div>
  </div>
</div>
</div>
<!--table organizing function-->
  <script>
      $(document).ready(function () {
          $('#patientTable').DataTable();
          // CK - Taken from Bootstrap documentation (https://getbootstrap.com/docs/3.3/javascript/#modals)
          // CK - This is the listener for the modal popup, to we pass the relevant data to the right elements
        })

  </script>
</body>
</html>
