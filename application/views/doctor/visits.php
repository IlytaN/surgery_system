<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid container-align">


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
                    <button type="button" class="btn btn-info btn-lg" id="myBtn"
                            style="float: right; margin-top:40px;">add visit
                    </button>
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
                            <td>
                                <time>2018-04-29</time>
                            </td>
                            <td>
                                <time>9:00~10:00</time>
                            </td>
                            <td>Homas Came</td>
                            <td>cough itchy throat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <time>2018-04-29</time>
                            </td>
                            <td>
                                <time>10:00~11:00</time>
                            </td>
                            <td>George Victoria</td>
                            <td>fever,stomache</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <time>2018-04-29</time>
                            </td>
                            <td>
                                <time>13:00~16</time>
                            </td>
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

