<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
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
                <div id="hide" style="display:none" class="alert  alert-info w-50" role="alert">
                    You are not registered, try to login
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

    <div class="d-flex justify-content-center" style="margin-top: 3vw; color: white;">
            <div class="border w-25 pl-3 pr-3 rounded">
                <h2 class="text-center" style="color: yellow;">Create New Account</h2>

                <form action="registration-form.php" method="POST">
                    <div class="mb-4">
                        <div class="form">
                            <input type="name" name="name" class="form-control" id="name"  required autocomplete="current-password" placeholder="Full Name">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form">
                            <input type="email" name="email" class="form-control" id="email"  required autocomplete="email"  placeholder="Email">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form">
                            <input onkeyup='check();' type="password" name="password" class="form-control" id="password" required autocomplete="password"  placeholder="Password">
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form">
                            <input onkeyup='check();' type="password" name="confirm_password" class="form-control" id="confirm_password" required autocomplete="confirm_password"  placeholder="Confirm Password">
                            <span id='message'></span>
                        </div>
                    </div>

                    <div class=" mb-2">
                        <button type="submit" class="btn btn-block btn-warning text-dark fw-bold">
                            Login
                        </button>
                    </div>
                    <div class="mb-1">
                        <p > Already have an account?
                            <a href="login.php" style="color: yellow;"> login</a> 
                            now!
                        </p>
                    </div>
                </form>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'yellow';
                document.getElementById('message').innerHTML = 'Matching';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Not matching';
            }
        }
    </script>

</body>
</html>