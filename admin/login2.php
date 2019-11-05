<?php
/*session_start();
session_destroy();
$palm = 0;
if (isset($_GET['alert'])) {
    $palm = $_GET['alert'];
}
if ($palm == 1) {
    echo "<script>alert('username หรือ password ผิดค่ะกรุณากรอกใหม่');history.back();</script>";
} else if ($palm == 2) {
    echo "<script>alert('คุณไม่มีสิทธิ์เข้าถึงค่ะ');history.back();</script>";
}*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <style>
        body {
            background-image: url("../images/chili.jpg");
            background-size: cover;
            width: 100vw;
            height: 100vh;
        }

        html {
            font-size: 14px;
        }

        body {
            font-family: 'Montserrat';
        }

        .btn {
            border-radius: 50px;
            padding: 0 26px;
        }

        .mg {
            margin-top: 50px;
        }

        .card-title {
            color: #2c2c2c;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row"><br><br><br>
            <form action="checkadmin.php" method="POST" id="palm" name="palm">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                        <div class="card center-align mg">
                            <div class="card-content"><br>
                                <span class="card-title">Admin TumTum Inter</span><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input type="text" id="username-input" name="username" class="validate">
                                                <label for="username-input">Username</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">keyboard</i>
                                                <input type="password" id="password-input" name="password" class="validate">
                                                <label for="password-input">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="index.html" class="btn pulse waves-effect waves-light" name="action">Login
                                    <i class="material-icons right">done</i>
                                </a> -->

                                <button type="submit" class="btn pulse waves-effect orange accent-4" name="action">Login
                                    <i class="material-icons right">done</i>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>