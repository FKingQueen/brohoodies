<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <style>
    .main-img {
        background: url('background.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
    }
    .form input{
        background: transparent;
        border-bottom: 1px solid yellow;
        border-top: none;
        border-right: none;
        border-left: none;
        color: white;s
    }
    .form input:focus{
        outline:none;
    }
    .form input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white;
        opacity: .9; /* Firefox */
    }

    .login-here{
        font-family: sans-serif;
        text-align: center;
        color: black;
        font-size: 20px;
        background-color: white;
        border-radius: 10px;
        margin: 2px;
        padding: 8px;
    }
    </style>
</head>
<body class="main-img">
    <nav class="navbar navbar-expand-md ">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="login.php" style="opacity: 100%; font-family: arial; color: yellow; font-size: 1.8vw;" >
                 Bro'Hoodies
            </a>
        </div>
    </nav>
    <?php
        if(!empty($_GET))
        { ?>
            <div class="d-flex justify-content-center">
                <div id="hide" style="display:none" class="alert  alert-warning" role="alert">
                    You don't have an account, Sign up now
                </div>
            </div>
        <?php }
    ?>  

    <script>
    setTimeout(function() {
    $('#hide').show()
    });
    setTimeout(function() {
    $('#hide').hide()
    }, 4000);
    </script>


    <div class="container w-100 d-flex " style="color: white; margin-top: 7vw;">
        <div class="w-75">
            <div>
                <h1>
                    For the Hoop-Up
                </h1>
                <p class="par">"They just make you feel safe" <br> <br>In a world full of colorful clothes <br> 
                Be my monotonous hoodie <br> <br> This hoodie is perfect for <br> cool breezy days, all the colors <br>
                fade at the front of hoodie. </p>
            </div>
        </div>
        <div class="w-25 d-flex justify-content-end">
            <div class="w-100">
                <h2 class="login-here mb-4">Login here</h2>
                <form method="POST" action="login-function.php">

                    <div class="mb-4">
                        <div class="form">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required autocomplete="email"  placeholder="Enter Email Here">
                        </div>
                    </div>


                    <div class="mb-4">
                        <div class="form">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required autocomplete="current-password" placeholder="Enter Password Here">
                        </div>
                    </div>

                    <div class=" mb-2">
                        <button type="submit" class="btn btn-block btn-warning text-dark fw-bold">
                            Login
                        </button>
                    </div>
                    <div class="mb-1">
                        <p > Don't have an account 
                            <a href="registration.php" style="color: yellow;"> Sign up </a> 
                            now!
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>