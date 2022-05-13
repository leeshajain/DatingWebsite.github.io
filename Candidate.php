<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "datingsite";

// Create a connection
$con = mysqli_connect($servername, $username, $password, $database);
    if (!$con) {
        echo "<h3>Connection Error:".mysqli_connect_error(). "</h3>";  
    }
    else {
      //  echo "Success". '<br>';
    }
?>
<style>
* {
  box-sizing: border-box;
}

<style>
   body{
    background-color:black;
   }
   .txt{
        text-align:center;
        padding:40px;
        background-color:rgb(219, 37, 80);
        color:white;
        text-decoration:underline;
        animation-duration: 4s;
   }
   /* @keyframes example {
  from {color: red;}
  to {color: yellow;}
} */
label{
  display: table-cell;
  margin-top:10px;
}
.tab{
  
}
select{
  padding:10px;
  width:50%;
  display: table-cell;
  width:70px;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

.header {
  text-align: center; 
  padding:50px;
  background-color:rgb(219, 37, 80);
  color:white;
  text-decoration:underline 
}


input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
  margin-left: 10px;

}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
  background-color:rgb(247, 244, 234);
  size: 100%;
}

button {
  background-color: #04AA6D;
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
  background-color: #04AA6D;
}
</style>
<body>

<form id="regForm" action="insert.php" method="post">
  
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  <div class="header">
        <center><h1>PERSONAL DETAILS</h1></center>
    </div>
    <!-- <p><input type="text" class="form-control" name="Came" id="Cname"  placeholder="Enter Name"  oninput="this.className = ''" required></p> -->
    <label> <b>Candidate Name</b></label>
    <input type="text" class=" col-sm-8" name="Came" id="Cname"  placeholder="Enter Name" oninput="this.className = ''" required><br> <br>

<!-- GENDER -->
<legend  name="Gender"><b>Gender:</b></legend> <br>
<label  for="validationFormCheck2"> Male</label>
    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
    
    <label  for="validationFormCheck3">Female</label>
    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required> <br><br>
    
  <!-- DOB -->
  <label for="dt"><span><b>DOB</b><br></span>
      <input type="date" class="form-control" placeholder="Enter DOB" id= "dt" name="dt" oninput="this.className = ''" required><br><br>

  <!-- MOTHER TONGE -->
   <label>Mother Tongue</label>
   <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="tongue" id="tongue" required>
    <option value="">Select Mother-Tongue </option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>

  <!-- RELIGIOUS -->
    <label >Religion</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="religion" id="religion" required>
    <option value="">Select Religion</option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>
  
    <!-- MARITAL STATUS -->
    <label >Marital Status</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="status" id="status" required>
    <option value="">Select Marital-Status </option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>

<!-- HEIGHT -->
    <label >Height</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="height" id="height" required>
    <option value="">Select Height</option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>
  

  <!-- WEIGHT -->
    <label>Weight</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="weight" id="weight" required>
    <option value="">Select Weight</option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>
  

 <!-- CASTE -->
    <label>Caste</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="caste" id="caste" required>
    <option value="">Select Caste</option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>
  

  <!-- MANGLIK -->
    <label>Are you Manglik?</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="manglik"  id="manglik"  required>
    <option value="">Select Manglik</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      ?>  
    </select>

  <!-- HOROSCOPE -->
    <label>Horoscope</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class=" col-sm-12" name="" id="caste" required>
    <option value="">Select Horoscope</option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>

  </div>

<!-- country -->
<div class="tab">
<div class="header">
        <center><h1>CARRER DETAILS</h1></center>
    </div>
    <label>Country:</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class="col-sm-12" name="id" id="id" required>
    <option value="">Select Country</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      ?>  
    </select>


<!-- State -->

    <label >State:</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class="col-sm-12" name="state" id="state" required>
    <option value="">Select State</option>
      <?php
        
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
      
      ?>  
    </select>
  


<!-- City -->
  
    <label >City:</label>
    <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class="col-sm-12" name="city" id="city" required>
    <option value="">Select  City</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
       ?>  
    </select>
  


<!-- Education -->

  <label>Education:</label>
  <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class="col-sm-12" name="education" id="education" required>
    <option value="">Select Education</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['education_name']."'>".$row['education_name']."</option>";
        }
       ?> 
       </select> 
 <br>


<!-- Occupation -->

  <label>Occupation:</label>
  <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class="col-sm-12" name="occupation" id="occupation" required>
    <option value="">Select Occupation</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['Occupation']."'>".$row['Occupation']."</option>";
        }
       ?> 
        </select>
 <br>


<!-- Annual_income -->

  <label>Annual Income:</label>
 
  <?php
     $sql="SELECT * FROM `candidate`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select class="col-sm-12" name="income" id="income" required>
    <option value="">Select Annual_income</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['Annual_Income']."'>".$row['Annual_Income']."</option>";
        }
       ?> 
        </select>
 <br> <br>
  </div>

  <div class="tab">
  <div class="header">
        <center><h1>LIFESTYLE AND FAMILY</h1></center>
    </div>
    <legend class="col-form-label col-sm-2 pt-0" name="Family"><b>Family Type:</b></legend>
    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck2"> Joint Family</label>
  
    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck3">Nuclear Family</label>

    <label for="validationTextarea"  class="form-label"><b>Father's Occupation</b></label>
    <textarea class="form-control is-invalid" name="Father" id="validationTextarea" placeholder="Required example textarea" required></textarea>
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
  
    <label for="validationTextarea" class="form-label"><b>Mother's Occupation</b></label>
    <textarea class="form-control is-invalid" name="Mother" id="validationTextarea" placeholder="Required example textarea" required></textarea>
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->

  
  <label for="Brother" class="form-label"><b>Brother</b></label>
    <select id="Brother" name="Brother" class="form-select" required aria-label="select example">
    </select>
    

  <label for="Sister" class="form-label"><b>Sister</b></label>
  <select id="Sister" name="Sister" class="form-select" required aria-label="select example">
    </select>

  
    <label for="validationTextarea" class="form-label"><b>Family live in...</b></label>
    <textarea class="form-control is-invalid" name="FamilyLive" id="validationTextarea" placeholder="Required example textarea" required></textarea>
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
  
  
  
    <label for="validationTextarea" class="form-label"><b>Contact Address</b></label>
    <textarea class="form-control is-invalid" name="Address" id="validationTextarea" placeholder="Required example textarea" required></textarea>
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
  
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" name="prevBtn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" name="nextBtn" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

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
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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

</body>
</html>
