<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reg</title>
    <meta charset="UTF-8">
    <meta name="description" content="Rooney Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="templates/css/style.css"/>


    <link rel="stylesheet" href="templates/icon-fonts/fontawesome-5.8.1/css/all.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
    <style>
        form{
            position: absolute;
            left:70px;
            top:200px;
            width: 30%;
        }
        a{
            position: absolute;
            left:180px;
            top:550px;
        }
       body{
            background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/fs/762abc89616237.5dfa4a37970f8.jpg');
        }
        h5{
            position: absolute;
            left:10px;
            top:400px;
            color: red;
        }
    </style>

</head>

<body>

<form action="signUp.php" method="post">
    <div class="form-group">
        <label  for="login">Login</label>
        <input class="form-control" type="text" name="login" placeholder="Login">
    </div>
    <div class="form-group">
        <label  for="email">Email</label>
        <input class="form-control"  type="email" name="email" id="email" placeholder="Email">
        <div id="email-error" style="display: none; color:red;" ></div>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control"  type="password" name="password" id="password" placeholder="Password">
        <div id="password-error" style="display: none; color:red;" ></div>
    </div>

    <div class="form-group">
        <label  for="confirm_password">Password</label>
        <input class="form-control" id="confirm_password" type="password" name="confirm_password" placeholder="Repeat">
        <div id="password-confirm-error" style="display: none; color:red;" ></div>
    </div>
    <button value="submit" id="submit" class="btn btn-primary">Sign Up</button>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<h5>' . $_SESSION['message'] . ' </h5>';
    }
    unset($_SESSION['message']);
    ?>

</form>
<a  href="login.php" class="text" >Sign In</a>



<script>
    var isEmailCorrect = false;
    var email = document.getElementById("email");
    var emailError = document.getElementById("email-error");

    var isPasswordCorrect = false;
    var isConfirmPass = true;
    var password = document.getElementById("password");
    var passwordError = document.getElementById("password-error");

    var password_confirm = document.getElementById("confirm_password");

    var password_error_confirm = document.getElementById("password-confirm-error");

    var submitButton = document.getElementById("submit");

    email.oninput = function () {
        email.value = email.value.trim();
    };
    password.oninput = function () {
        var regExp = /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9]{8,32}$/g;
        if (!regExp.test(password.value)) {
            passwordError.innerHTML = "Пароль должен содержать только цифры и буквы латинского алфавита";
            passwordError.style.display = "block";
            isEmailCorrect = false;
        } else {
            passwordError.style.display = "none";
            isEmailCorrect = true;
        }
        button();
    };
    email.oninput = function () {
        var regExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!regExp.test(email.value.toLowerCase())) {
            emailError.innerHTML = "Email не корректный";
            emailError.style.display = "block";
            isPasswordCorrect = false;
        } else {
            emailError.style.display = "none";
            isPasswordCorrect = true;
        }
        button();
    };

    password_confirm.oninput = function () {
        if (password.value === password_confirm.value) {
            password_error_confirm.style.display = "none";
            isConfirmPass = true;
        } else {
            password_error_confirm.innerHTML = "Пароли не совпадают!";
            password_error_confirm.style.display = "block";
            isConfirmPass = false;
        }
        button();
    };

    function button() {
        if (isEmailCorrect && isPasswordCorrect && isConfirmPass) {
            submitButton.disabled = false;
        } else submitButton.disabled = true;
    }

</script>
<script src="templates/js/jquery-2.1.4.min.js"></script>
<script src="templates/js/plugins.js"></script>
</body>
</html>