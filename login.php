<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='img/logo_icon.png'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Theqa | ثقة</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="img">
                <img src="img/logo.png" class="logo">
            </div>
            <div class="title">
                <hr>
                <div>
                    Login To Theqa
                </div>
            </div>
        </div>
        <form action="php/login.php" method="post" id="login-form">
            <div>
                <div>
                    <i class="fa-solid fa-user"></i>
                    <input type="email" id="mail" name="mail" placeholder="Enter Your Email" required>
                </div>
                <div>
                    <i class="fa-solid fa-unlock"></i>
                    <input type="password" id="pass_1" name="password" placeholder="Enter Your Password" required>
                </div>
            </div>
            <div class="btns">
                <button type="submit" id="submit" class="btn btn-success w-100">
                    Login
                </button>
            </div>
        </form>
    </div>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/log.js"></script>
</body>
</html>