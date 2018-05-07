<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: auto;
  font-family: Raleway;
  padding: 40px;
  min-width: 300px;
  height: auto;
}

h1 {
  text-align: center;
}

input {
 padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input.form-check-input{
  width: 40px;
}
/*    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}*/
</style>
</head>
<body>

  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" id="myBtn" style="float: right; margin-top:40px;">New Patients</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Patient Register Form</h4>
          </div>
          <div class="modal-body">
            <form id="regForm" action="/action_page.php">
              <!-- One "tab" for each step in the form: -->
              <div class="tab">Name:
                <p><input placeholder="Patname" oninput="this.className = ''" name="name"></p>

              <div >Birthday:
                <p><input type="date" id="PatBirth" name="PatBirth" placeholder="BirthDate"></p>
              </div>

              <div class="radio-toolbar">Gender:
                <div class="form-check form-check-inline" style="padding:10px 0px 10px 0px; border: solid 0.5px darkgray;">
                <label class="form-check-label" for="inlineRadio1">Male</label>  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio2">Female</label>  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio3">other</label>  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                </div>
                </div>
              <div >Address:
                <p><input placeholder="address" oninput="this.className = ''" name="phone"> </p>
              </div>
              <div >Insurance:
                <p><input placeholder="Insurance" oninput="this.className = ''" name="phone"> </p>
              </div>
</div>
              <div class="tab">
                <h3>Medical Records</h3>
                <table class="table table-condensed "  id="vertical-1">

                 <tr>
                     <th>Allergies</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>Cancer</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>Depression</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>Epilepsy</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>Heart_disease</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>Liver_disease</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>Diabetes</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>High_blood_pressure</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                 <tr>
                     <th>other_problems</th>
                     <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active btn-sm">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> <span class="glyphicon glyphicon-remove"></span>
    </label>
    <label class="btn btn-secondary btn-sm">
      <input type="radio" name="options" id="option2" autocomplete="off"><span class="glyphicon glyphicon-ok"></span>
    </label>
  </div></td>
                 </tr>
                </table>
                <label class="control-label">Notes</label>
                <p><input placeholder="Notes" oninput="this.className = ''" name="Notes" ></p>
              </div>
              <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Patient info</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">MedicalRecord</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                  <span class="step"></span>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

  </div>
  <script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the crurrent tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Create";
    } else {
      document.getElementById("nextBtn").innerHTML = "Medical Record";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
  </script>
  <script>
  $(document).ready(function(){
      $("#myBtn").click(function(){
          $("#myModal").modal();
      });
  });
  </script>



</body>
</html>
