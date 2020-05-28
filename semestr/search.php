
<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>News</title>
    <meta charset="UTF-8">
    <meta name="description" content="Rooney Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="templates/css/style.css"/>



    <!-- Font icons -->
    <link rel="stylesheet" href="templates/icon-fonts/fontawesome-5.8.1/css/all.min.css"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.shoelace.style/1.0.0-beta.25/shoelace.css"> //поиск
    <style>
        html{
            background-color: black;
        }
        form{
            position: absolute;
            z-index: 1000;
            width: 50%;
            top:50px;
            left: 200px;
        }
        button{
            position: absolute;
            top:-4px;
            left: 780px;
        }
        fieldset{
            background-color: white;
            margin-outside: 10%;
            width: 40%;
        }
        .fieldset{
            position: absolute;
            z-index: 1000;
            top:200px;
            left:300px;
            width: 100%;
            height: 90%;
        }

    </style>
</head>

<body>
<form action="search.php" method="post">
    <input type="search" name="search" placeholder="Search by tag">
    <button class="button-dark button-lg" type="submit">Search</button>
    <select name="select">
        <option  value="title">Title</option>
        <option value="author ">Author</option>
    </select>
</form>
<div class="fieldset">
    <?php
    require_once ("db.php");
    if(isset($_POST['search'])) {
        $search = $_POST['search'];
        $form=$_POST['select'];
        $query = "SELECT * FROM news WHERE $form = '$search'";

        $result = mysqli_query($mysqli, $query);
        while ($result_q = mysqli_fetch_assoc($result)) {

            if ($_SESSION['user']['login']==$result_q['author']) {
                echo "<a href='delete.php?id=$result_q[idnews]'>Delete</a>";

            }

            echo "<fieldset>";
            echo "<h4>$result_q[title]</h4>";
            echo "<br>";
            echo "<h5>$result_q[text]</h5><br>";
            echo "<h8>Author  " . "$result_q[author]" . "</h8>";
            echo "</fieldset>";


        }
    }
    ?>

</div>



<script src="templates/js/jquery-2.1.4.min.js"></script>
<script src="templates/js/plugins.js"></script>

</body>
</html>


