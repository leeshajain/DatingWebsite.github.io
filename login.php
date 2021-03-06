<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
    <meta name="author" content="SINDEVO THEMES" />
    <meta name="description" content="wedding html template" />
    <meta name="keywords" content="the wedding date, wedding website, wedding html template, wedding design, marriage html template, engagement website" />
    <title>The Wedding Date</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/intro.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/animsition.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/swipebox.css" />
    <link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="owl-carousel/owl.themecarousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.transitions.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            width: 40%;
            border-radius: 10px;
            background-color: #EDD59E;
            /* box-shadow: 0px 2px 3px 4px #6465667a; */
        }

        .login-color {
            color: black;

        }

        form div input {
            border: 1px solid #e76b71;
        }

        body {
            background-image: url("images/slider/1.jpg");
        }

        .log_reg_btn {
            background-color: white;
            padding: 8px;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            vertical-align: middle;
            position: relative;
            overflow: hidden;
            z-index: 1;
            padding: 12px 40px;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.4px;
            /* -webkit-backface-visibility: hidden; */
            -moz-osx-font-smoothing: grayscale;
            background-color: #fff;
            color: #e76b71;
            border: 1px solid #e76b71;
            -webkit-transition: color 0.3s;
            transition: color 0.3s;
        }

        .log_reg_btn:hover{
            background-color: #e76b71;
            color: white;
        }
    </style>
</head>


<body>
    <?PHP include("login.php") 
    
    
    ?>
    <div  class="big-container">
        <h1 class="text-center login-color m-3 ">Login Here</h1>
        <form class="form" action="login.php" method="POST">
            <div class="container border" style="border: 2px solid #e76b71;">

                <div class="form-group m-2" id="email">
                    <label class="text-dark">Email :</label><input required type="email" name="username" style="width: 100%; margin: 4px; padding: 8px; border-radius: 10px;" placeholder="Enter Your Email " id="femail">
                </div>

                <div class="form-group m-2" id="pass">
                    <label class="text-dark">Password :</label><input required type="password" name="password" style="width: 100%; margin: 4px; padding: 8px; border-radius: 10px;" placeholder="Enter Your password " id="fpass">
                </div>

                <div class="form-group">
                    <input type="submit" name="login" class=" log_reg_btn " value="Login" style="width: 19%;">

                </div>

            </div>
        </form>
    </div>




</body>

</html>
