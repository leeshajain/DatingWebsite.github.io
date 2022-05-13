<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Personal Details</title>
</head>
<style>
    body{
           background-color:rgb(247, 244, 234);
       }
       .header{
           /* margin-top:34px; */
           padding:50px;
           background-color:rgb(219, 37, 80);
           color:white;
           text-decoration:underline;
       }
       .container{
           margin-top:30px;
       }
       /* .overlay{
         margin-left: 250px;
         font-size: 200px;
       } */

       .center-div{
         background-color: white;
         padding:2%;         
         border: 1px solid white;
         border-radius: 5px;
         box-shadow: 0px 2px 10px 11px rgb(0,0,0, 0.1);
       }
       .form-group{
         padding-top:5px;
       }

       input[type="file"] {
         display: none;
       }

       .custom-file-upload {
          border: 1px solid #ccc;
          border-radius: 3px !important;
          display: inline-block;
          padding: 7.5px 12px;
          cursor: pointer;
          margin-top:1%;
        } 


</style>
<body>
  <!-- HEADER -->
    <div class="header">
        <center><h1>PERSONAL DETAILS</h1></center>
    </div>

<div class="container">

       <div class="row d-flex justify-content-center">
         <!-- <div class="col-md-4">

         </div> -->
         <div class="col-md-12 center-div">
            <form action = "insert.php" method="post">        
              <div class="form-group">
                <!-- NAME  -->
                <label for="Cname">Candidate Name</label>
                <input type="text" class="form-control" name="Cname"  placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <!-- GENDER -->                
                <label>Gender</label><br>
                <input class="form-check-input" type="radio" name= "gender" id="male" value="Male" checked>
                <label class="form-check-label" for="male"> Male</label>
                <input class="form-check-input" type="radio" name= "gender" id="male" value="Female" checked>
                <label class="form-check-label" for="female"> Female </label>                                
              </div>
              <div class="form-group">
                  <!-- DOB -->
                  <label for="dt"><span>DOB</span></label>
                  <input type="date" class="form-control" placeholder="Enter DOB" id= "dt" name="dt" required>
              </div>
              <div class="form-group">
                <!-- MOTHER TONGE -->                
                  <label for= "mothertongue" class="form-label" >Mother Tongue</label>
                    <select name="mothertongue" style= "width:100%" class="form-label form-control" >
                      <option value="">Select Mother Tongue</option>
                      <?php
                        $sql = mysqli_query($con, "select * from tongue");
                        $row = mysqli_fetch_array($sql);
                        while ($row = mysqli_fetch_array($sql)){
                          echo "<option value='". $row['Mother_Tongue'] ."'>" .$row['Mother_Tongue'] ."</option>" ;
                        }
                      ?>
                    </select>                  
              </div>
              <div class="form-group">
                 <!-- RELIGIOUS -->                
                  <label for= "religion" class="form-label">Religion</label>
                  <select name="religion"style= "width:100%" class="form-label form-control">
                    <option value="">Select Religion</option>
                    <?php
                      $sql = mysqli_query($con, "select * from religion");
                      $row = mysqli_fetch_array($sql);
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['Religion'] ."'>" .$row['Religion'] ."</option>" ;
                      }
                    ?>
                  </select>                
              </div>
              <div class="form-group">
                    <!-- MARITAL STATUS -->                    
                    <label for= "marital_status" class="form-label">Marital status</label>
                    <select name="marital_status" style= "width:100%" class="form-label form-control">
                      <option value="">Select Marital Status</option>
                      <?php
                        $sql = mysqli_query($con, "select * from marital");
                        $row = mysqli_fetch_array($sql);
                        while ($row = mysqli_fetch_array($sql)){
                          echo "<option value='". $row['Marital_Status'] ."'>" .$row['Marital_Status'] ."</option>" ;
                        }
                      ?>
                    </select>                  
              </div>
              <div class="form-group">
                <!-- HEIGHT -->                
                <label for= "height" class="form-label">Height</label>
                <select name="height" style= "width:100%" class="form-label form-control"; >
                  <option value="">Select Height</option>
                  <?php
                    $sql = mysqli_query($con, "select * from height");
                    $row = mysqli_fetch_array($sql);
                    while ($row = mysqli_fetch_array($sql)){
                      echo "<option value='". $row['height'] ."'>" .$row['height'] ."</option>" ;
                    }
                  ?>
                </select>                  
              </div>
              <div class="form-group">
                  <!-- WEIGHT -->                
                  <label for= "weight" class="form-label">Weight</label>
                  <select name="weight" style= "width:100%" class="form-label form-control" >
                    <option value="">Select Weight</option>
                    <?php
                      $sql = mysqli_query($con, "select * from weight");
                      $row = mysqli_fetch_array($sql);
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['weight'] ."'>" .$row['weight'] ."</option>" ;
                        }
                    ?>
                  </select>                
              </div>
              <div class="form-group">
                  <!-- CASTE -->                
                  <label for= "caste" class="form-label">Caste</label>
                  <select name="caste" style= "width:100%" class="form-label form-control">
                    <option value="">Select Caste</option>
                    <?php
                    $sql = mysqli_query($con, "select * from caste");
                    $row = mysqli_fetch_array($sql);
                    while ($row = mysqli_fetch_array($sql)){
                      echo "<option value='". $row['caste'] ."'>" .$row['caste'] ."</option>" ;
                      }
                    ?>
                  </select>                  
              </div>
              <div class="form-group">
                  <!-- MANGLIK -->                  
                  <label for= "manglik" class="form-label">Are you Manglik?</label>
                  <select name="manglik" style= "width:100%" class="form-label form-control"; >
                    <option value="">yes</option>
                    <?php
                      $sql = mysqli_query($con, "select * from manglik");
                      $row = mysqli_fetch_array($sql);
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['manglik'] ."'>" .$row['manglik'] ."</option>" ;
                      }
                    ?>
                  </select>                
              </div>
              <div class="form-group">
                  <!-- HOROSCOPE -->                
                  <label for="horoscope" class="form-label">Horoscope</label>
                  <select name="horoscope" class="form-control" >
                  <option value="">Select Horoscope</option>
                  <?php
                      $sql = mysqli_query($con, "select * from horoscope");
                      $row = mysqli_fetch_array($sql);
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['horoscope'] ."'>" .$row['horoscope'] ."</option>" ;
                      }
                  ?>
                  </select>                
              </div>
              <!-- CarrerDetail -->

              <div class="form-group">
                  <!-- Country -->                
                  <label for="country" class="form-label">Country</label>
                  <select name="country" class="form-control" >
                  <option value="">Select Country</option>
                  <?php
                      $sql = mysqli_query($con, "select * from country");
                      $row = mysqli_fetch_array($sql);
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
                      }
                  ?>
                  </select>                
              </div>
               
              <div class="form-group">
                  <!-- State -->                
                  <label for="state" class="form-label">State</label>
                  <select name="state" class="form-control" >
                  <option value="">Select State</option>
                  <?php
                      $sql = mysqli_query($con, "select * from state");
                      $row = mysqli_fetch_array($sql);
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
                      }
                  ?>
                  </select>                
              </div>

              <div class="form-group">
                  <!-- Country -->                
                  <label for="city" class="form-label">City</label>
                  <select name="city" class="form-control" >
                  <option value="">Select City</option>
                  <?php
                      $sql = mysqli_query($con, "select * from city");
                      $row = mysqli_fetch_array($sql);
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
                      }
                  ?>
                  </select>                
              </div>

              <!-- Education -->
<div class="form-group p-2">
  <label>Education:</label>
  <?php
     $sql="SELECT * FROM `education`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select name="education" id="education" required>
    <option value="">Select Education</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['education_name']."'>".$row['education_name']."</option>";
        }
       ?> 
       </select> 
</div> <br>


<!-- Occupation -->
<div class="form-group p-2">
  <label>Occupation:</label>
  <?php
     $sql="SELECT * FROM `occupation`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select name="occupation" id="occupation" required>
    <option value="">Select Occupation</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['Occupation']."'>".$row['Occupation']."</option>";
        }
       ?> 
        </select>
</div> <br>


<!-- Annual_income -->
<div class="form-group p-2">
  <label>Annual Income:</label>
 
  <?php
     $sql="SELECT * FROM `income`";
     $result =mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    ?>
    <select name="income" id="income" required>
    <option value="">Select Annual_income</option>
      <?php
      
        while( $row= mysqli_fetch_assoc($result))
        { 
         echo "<option value='".$row['Annual_Income']."'>".$row['Annual_Income']."</option>";
        }
       ?> 
        </select>
</div> <br> <br>


              <div class="row" style="padding:12px">         
                <label class="custom-file-upload">
                  <input type="file"/>
                    Upload Photo
                </label>                                       
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">                  
                    <a href="register.php" class="btn btn-danger" style="width:100%">Back</a>                  
                </div>                
                <div class="col-md-6">                  
                    <a id="next" name="next" href="Home.php" class="btn btn-primary" style="width:100%">Next</a>                  
                
                  </div>    
                            
              </div>
            </form>
         </div>
         <!-- <div class="col-md-4">                       
         </div> -->
       </div>            
       <br>
  </div>

</body>
</html>

