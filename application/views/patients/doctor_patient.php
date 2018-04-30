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
<body>
<div class="container" style="text-align:center;">
    <h1> <strong>Patients</strong></h1>
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


  <div class="container-fluid container-align">
      <!-- Content Header (Page header) -->

          <div class="col-md-12">

          </div>
      </div>

      <!-- Main content -->

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
              modal.find('.modal-title').text('Patient: ' + recipient.patient)
              modal.find('#patientModelName').val(recipient.patient);
              modal.find('#patientModelDob').val(recipient.dob)
              modal.find('#patientModelAge').val(recipient.age)
              modal.find('#patientModelDoctor').val(recipient.gp)
          })
      })
  </script>

</div>
</div>

</body>
</html>
