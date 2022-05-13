<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register </title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <!DOCTYPE html>
    <html>

    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
        /* body {font-family: Arial, Helvetica, sans-serif;} */

        body {
          background: linear-gradient(rgb(8, 8, 8, 0.7), rgb(247, 236, 186, 0.2)), url("images/page-photo.jpg");
          position: relative;
          background-position: center;
          background-repeat: no-repeat;
          background-size: 100%;
          height: 578px;

        }


        .btn {
          display: block;

          border-radius: 20px;
          color: white;
          font-size: 20px;
          cursor: pointer;
          position: absolute;
          /* margin-bottom: 30px; */
          /* margin-left:100px;
    margin-top:350px; */
          background-color: rgb(219, 37, 80);

        }

        .row {
          float: right;
        }

        .header h1 {
          margin-top: 10px;
          font-family: "Lucida Handwriting";
        }


        /* Full-width input fields */
        input[type=text],
        input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }

        /* Set a style for all buttons */
        .button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }

        .button:hover {
          opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }

        img.avatar {
          width: 30%;
          border-radius: 50%;
        }

        .container {
          padding: 16px;
          color: #fefefe;

        }

        .input {
          padding: 16px;


        }

        input {
          display: table-cell;
        }

        label {
          display: table-cell;
        }



        span.psw {
          float: right;
          padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
          display: none;
          /* Hidden by default */
          position: fixed;
          /* Stay in place */
          z-index: 1;
          /* Sit on top */
          left: 0;
          top: 0;
          width: 100%;
          /* Full width */
          height: 100%;
          /* Full height */
          overflow: auto;
          /* Enable scroll if needed */
          background-color: rgb(0, 0, 0);
          /* Fallback color */
          background-color: rgba(0, 0, 0, 0.4);
          /* Black w/ opacity */
          padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
          background-color: rgb(0, 0, 0, 0.5);
          margin: 5% auto 15% auto;
          /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%;
          /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        /* .close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
} */
        /* 
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
} */

        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
          from {
            -webkit-transform: scale(0)
          }

          to {
            -webkit-transform: scale(1)
          }
        }

        @keyframes animatezoom {
          from {
            transform: scale(0)
          }

          to {
            transform: scale(1)
          }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
            display: block;
            float: none;
          }

          .cancelbtn {
            width: 100%;
          }
        }

        /* for middle part text */
        .txt {
          font-family: "font-variant: small-caps";
        }
      </style>
    </head>

    <body>
      <div class="header">
        <h1>PERFECT MATCH.com</h1>
        <h6 style="margin-left:90px">Find your Perfect Match with us!</h6>
        <a href="login.php" class="btn" style="width:auto; margin-left:85% ; margin-top:-75px">Login</a>


      </div>

      <div class="txt">
        <h1>We bring people together...</h1>
      </div>




      <div class="bt-2">
        <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-top:320px;"><b>Registeration</b></button>
      </div>
      <div class="container ">
        <div id="id01" class="modal" data-backdrop="static" data-keyboard="false">

          <form class="modal-content animate" onsubmit="return validateForm()" name="certform" action="Personal_Detail.php" method="POST">
            <div class="imgcontainer">
              <!-- <span onclick="closeSelf();" class="close" title="Close Modal">&times;</span> -->
              <img src="images/img_avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="input">
              <div id="name">
                <label for="uname"><b>Full Name</b></label>
                <input style="border-radius:15px" type="text" placeholder="Enter Name" id="uname" name="fname" required>
                <b>
                  <p class="formerror  text-danger"></p>
                </b>
                <br>
              </div>
              <div id="email">
                <label for="mail"><b>Email</b></label>
                <input style="border-radius:15px" type="text" placeholder="Enter email" id="mail" name="femail" required>
                <b>
                  <p class="formerror  text-danger"></p>
                </b>
                <br>
              </div>

              <div id="phone">
                <label for="mobile"><b>Mobile No.</b></label>
                <input class="form-control" style="border-radius:15px" type="phone" placeholder="Enter Mobile No." id="mobile" name="fphone" required>
                <b>
                  <p class="formerror  text-danger"></p>
                </b>
                <br>
              </div>

              <div id="pass">
                <label for="psw"><b>Password</b></label>
                <input style="border-radius:15px" type="password" onkeyup="passValidate()" placeholder="Enter Password" id="psw" name="fpass" required>
                <b>
                  <p class="formerror  text-danger"></p>
                </b>
                <br>
              </div>

              <div id="cpass">
                <label for="psw"><b>Confirm Password</b></label>
                <input style="border-radius:15px" type="password" placeholder="Enter Password" id="psw" name="fcpass" required>
                <b>
                  <p class="formerror  text-danger"></p>
                </b>
                <br>
              </div>

              <!-- <button onmouseover="return validateForm()">Clicl Me</button> -->


              <a href="Personal_Detail.php" class="text-light"><input class="button" name="register" style="border-radius:10px" type="submit" value="Register"></a>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span style="color:#000" class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }

        }

        function closeSelf() {
          // do something

          if (condition satisfied) {
            alert("conditions satisfied, submiting the form.");
            document.forms['certform'].submit();
            window.close();
          } else {
            alert("conditions not satisfied, returning to form");
          }
        }
      </script>

      <script>
        function clearErrors() {
          errors = document.getElementsByClassName('formerror');
          for (let item of errors) {
            item.innerHTML = " ";
          }
        }

        function passValidate() {
          clearErrors();


          var password = document.forms['certform']["fpass"].value;
          if (password.length < 6) {
            seterror("pass", "*Password should be atleast 6 Characters long!!");
            return false;
          }

          if (password.search(/[A-Z]/) < 0) {
            seterror("pass", "Your password must be starts with Capital Letter.");
            return false;
          }

          if (password.search(/[a-z]/i) < 0) {
            seterror("pass", "Your password must contain at least one letter.");
            return false;
          }
          if (password.search(/[0-9]/) < 0) {
            seterror("pass", "Your password must contain at least one digit.");
            return false;
          }

        }



        function seterror(id, error) {
          //sets error inside tag of id
          element = document.getElementById(id);
          element.getElementsByClassName('formerror')[0].innerHTML = error;
          // return false;

        }

        function validateForm() {
          clearErrors();

           


          //perform validation and if validation fails, set the value of returnval to false
          var name = document.forms['certform']["fname"].value;
          // alert(name.length)
          if (name.length < 5) {
            seterror("name", "*Length of name is too short!!");
            
            // alert("a");
            document.forms['certform']["fname"].value = "";
            return false;
          }


          var email = document.forms['certform']["femail"].value;
          if (email.length > 50) {
            seterror("email", "*Length of email is too long!!");
            document.forms['certform']["femail"].value = "";
            return false;
          }

          var phone = document.forms['certform']["fphone"].value;
          if (phone.length != 10) {
            seterror("phone", "*Phone number should be of 10 digit!!");
            document.forms['certform']["fphone"].value = "";
            return false;
          }


          var password = document.forms['certform']["fpass"].value;

          var cpassword = document.forms['certform']["fcpass"].value;
          if (cpassword != password) {
            seterror("cpass", "*Password and Confirm password should be Equal!!");
            document.forms['certform']["fpass"].value = "";
            document.forms['certform']["fcpass"].value = "";


            return false;
          }

          

  
        }
      </script>

 

    </body>

    </html>

  </div>
</body>

</html>

<?php

include("connection.php");


if (isset($_POST['register'])) {
  $name = $_POST['fname'];
  $email = $_POST['femail'];
  $phone = $_POST['fphone'];
  $password = $_POST['fpass'];


  $isrt = "INSERT INTO users(name, email, mobile, password) VALUES('$name', '$email', '$phone', '$password')";

  mysqli_query($conn, $isrt) or die($conn->error);
}

?>