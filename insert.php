<?php
 include("connection.php");

 if (isset($_POST['next'])) {
 //Personal Detail
  $Cname = $_POST['Cname'];
  $gender = $_POST['gender'];
  $DOB = $_POST['dt'];
  $MotherTongue = $_POST['mothertongue'];
  $Religion = $_POST['religion'];
  $MaritalStatus = $_POST['marital_status'];
  $Height = $_POST['height'];
  $Weight = $_POST['weight'];
  $Caste = $_POST['caste'];
  $Manglik = $_POST['manglik'];
  $Horoscope = $_POST['horoscope'];
  $Country = $_POST['country'];
  $State = $_POST['state'];
  $City = $_POST['city'];
  $Education = $_POST['education'];
  $Occupation = $_POST['occupation'];
  $Income = $_POST['income'];
  $Image = $_POST['image'];

  
echo "Hello";

    $isrt = "INSERT INTO candidate(full_name, gender, dob, tongue, religion, marital, height, weight,
    caste, manglik, horoscope, country, state, city, education, occupation, income ,image)   
   VALUES('$Cname', '$gender', '$DOB', ' $MotherTongue', '$Religion', '$MaritalStatus', '$Height',
    '$Weight', '$Caste', '$Manglik', '$Horoscope','$Country','$State', '$City', '$Education', '$Occupation','  $Income', '$Image')";

echo $isrt;
$result = mysqli_query($con, $isrt);
 if($result){
  move_uploaded_file(['image']['tmp_name'], "upload/".$_FILES['image']['name']);
//   $_SESSION['success'] = "Data Inserted Successfully";
    // echo "Data Inserted";
   header("location:carrerdetail1.php");
  
 }
 else {
   die(mysqli_error($con));
 }
}

//  Carrer Detail 



?>


<!-- 
 include("connection.php");

 if (isset($_POST['next'])) {
 //Personal Detail
  $Cname = $_POST['Cname'];
  $gender = $_POST['gender'];
  $DOB = $_POST['dt'];
  $MotherTongue = $_POST['mothertongue'];
  $Religion = $_POST['religion'];
  $MaritalStatus = $_POST['marital_status'];
  $Height = $_POST['height'];
  $Weight = $_POST['weight'];
  $Caste = $_POST['caste'];
  $Manglik = $_POST['manglik'];
  $Horoscope = $_POST['horoscope'];
  $Image = $_POST['image'];

  $Country = $_POST['Country'];
  $State = $_POST['State'];
  $City = $_POST['City'];
  $Education = $_POST['Education'];
  $Occupation = $_POST['Occupation'];
  $income = $_POST['income'];

  //LS&F Details
  $Family = $_POST['Family'];
    $Father = $_POST['Father'];
    $Mother = $_POST['Mother'];
    $Brother = $_POST['Brother'];
    $Sister = $_POST['Sister'];
    $FamilyLive = $_POST['FamilyLive'];
    $Address = $_POST['Address'];




  $isrt = "INSERT INTO candidate(full_name, gender, dob, tongue, religion, marital, height, weight,
   caste, manglik, horoscope, image, country, state, city, education, occupation, income, family, f_occupation, m_occupation, brother, sister, living, address) 
  VALUES('$Cname', '$gender', '$DOB', ' $MotherTongue', '$Religion', '$MaritalStatus', '$Height',
   '$Weight', '$Caste', '$Manglik', '$Horoscope', '$Image', '$Country','$State', '$City', '$Highest_Degree','$Occupation', '$Annual_Income', '$Family', '$Father', '$Mother', '$Brother', '$Sister','$FamilyLive', '$Address')";

$result = mysqli_query($con, $isrt);
if($result){
  move_uploaded_file(['image']['tmp_name'], "upload/".$_FILES['image']['name']);
//   $_SESSION['success'] = "Data Inserted Successfully";
    // echo "Data Inserted";
    header("location:carrerdetail.php");
  
 }
 else {
   die(mysqli_error($con));
 }
}

?> 