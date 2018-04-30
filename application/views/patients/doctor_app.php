<!DOCTYPE html>
<html>
<style>
h1{margin-bottom: 50px;}
nav{ background-color: black; color:gray;}
#button{margin-left: 10px;}
a.btn.btn-primary.side-menu-button{width:110px; margin-bottom: 50px;}
.gray {
  background-color: grey !important;
}
.yellow {
  background-color: #FFFF99 !important;
}

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

<div class="container" style="text-align:center;">
    <h1><strong> Appointments </strong></h1>
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

    <div class="row">
        <div class="appointment-search" style="float:right;">
            Date: <input type="date">

        </div>
    </div>
    <!-- Main content -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="example" class="table table-bordered table-hover">
                        <thead>
                        <tr href=>
                            <th>App#</th>
                            <th >Start</th>
                            <th> Finish</th>
                            <th>patient name </th>
                            <th>note</th>
                            <th>status</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td><time>9:00</time></td>
                            <td><time>10:00</time></td>
                            <td>Homas Came</td>
                            <td>cough itchy throat</td>
                            <td>completed</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><time>10:00</time></td>
                            <td><time>11:00</time></td>
                            <td>George Victoria</td>
                            <td>fever,stomache</td>
                            <td>scheduled</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><time>12:00</time></td>
                            <td>  <time>13:00</time></td>
                            <td>File Holder</td>
                            <td>Vaccination</td>
                            <td>scheduled</td>
                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>

    $(document).ready( function () {
      var table = $('#example').DataTable({
        "createdRow": function( row, data, dataIndex ) {
                 if ( data[5] == "completed" ) {
             $(row).addClass('gray');
           }else if (data[5]=="scheduled") {

             $(row).addClass('yellow');
           }


        }
      });
    } );
</script>
</div>
</div>
</div>
</html>
