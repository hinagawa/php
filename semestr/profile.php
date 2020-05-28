<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="templates/css/style.css"/>

    <link rel="stylesheet" href="templates/icon-fonts/fontawesome-5.8.1/css/all.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
<style>
    h1{
        position: absolute;
        top:100px;
        left:100px;
    }
    .menu1{
        position: absolute;
        top:200px;
        left:100px;
    }
  fieldset{
      position: absolute;
      z-index: 10000;
      background-color: white;
  }
</style>
</head>

<body>

<main>
    <header>

        <!-- Menu -->
        <div class="menu">
            <span></span>
            <span></span>
        </div>
    </header>



<div>
    <h1 class="page-title box-animation">Hello, <?=" ". $_SESSION['user']['login']?>!</h1>
    <div class="menu1">
        <form method="post" action="profile.php">
        <a  class="btn btn-outline-light" href="my_news.php" role="button" >Мои записи</a>
           <a  class="btn btn-outline-light" href="my_like.php" role="button" >Понравилось</a>
        </form>

    </div>


</div>




        <div class="right-menu">
            <div class="menu-close"></div>
            <div class="page-menu">
                <ul>
                    <li>
                    <i class="fas fa-newspaper"></i>
                    </li>
                    <li >
                        <a  href="news.php">News</a>

                    </li>
                    <li>
                    <i class="fas fa-music"></i>
                    </li>
                    <li>
                  <a  href="music.php">Music</a>

                    </li>
                    <li>
                    <i class="fas fa-sms"></i>
                    </li>
                    <li>
                    <a  href="profile.php">Profile</a>

                    </li>
                </ul>
            </div>
        </div>

</main>

<script src="templates/js/jquery-2.1.4.min.js"></script>
<script src="templates/js/plugins.js"></script>
<script src="templates/js/main.js"></script>

</body>
</html>
