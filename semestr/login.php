<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="description" content="Rooney Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="templates/css/style.css"/>


    <link rel="stylesheet" href="templates/icon-fonts/fontawesome-5.8.1/css/all.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
    <style>
        body{
            background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/fs/762abc89616237.5dfa4a37970f8.jpg');
        }
        form{
            position: absolute;
            left:70px;
            top:200px;
            width: 30%;
        }
        a{
            position: absolute;
            left:180px;
            top:380px;
        }
        h5{
            position: absolute;
            left:10px;
            top:220px;
            color: red;
        }
    </style>

</head>

<body>

<form action="signIn.php" method="post">
    <div class="form-group">
        <label  for="login">Login</label>
        <input class="form-control" type="text" name="login" placeholder="Login">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control"  type="password" name="password" id="password" placeholder="Password">
        <div id="password-error" style="display: none; color:red;" ></div>
    </div>
    <button value="submit" id="submit" class="btn btn-primary">Sign In</button>

    <?php
    if (isset($_SESSION['message'])) {
        echo '<h5>' . $_SESSION['message'] . ' </h5>';
    }
    unset($_SESSION['message']);
    ?>

</form>
<a  href="reg.php" class="text" >Sign Up</a>

<script src="templates/js/jquery-2.1.4.min.js"></script>
<script src="templates/js/plugins.js"></script>


</body>
</html>
