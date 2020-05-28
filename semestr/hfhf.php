<?php
//session_start();
//if (!$_SESSION['user']) {
// header('Location: login.php');
//}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="UTF-8">
<meta name="description" content="Rooney Portfolio Template">
<meta name="viewport" content="width=device-width, initial-scale=1.0">





<!— Font icons —>
<link rel="stylesheet" href="templates/icon-fonts/fontawesome-5.8.1/css/all.min.css"/>

<!— Google Font —>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,7.." rel="stylesheet">
<link rel="stylesheet" href="https://cdn.shoelace.style/1.0.0-beta.25/shoelace.css">
<style>
html{
background-color: black;
}
form{
position: absolute;
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
top:200px;
left:300px;
width: 100%;
height: 90%;
}


</style>
</head>



<body>
<form action="search.php" method="post">
<input type="search" id="search" name="search" placeholder="Search by title">

<select name="select">
<option value="title">Title</option>
<option value="author ">Author</option>
</select>
<button class="button-dark button-lg" type="submit">Search</button>
<a href="add.php">Add post</a>

</form>

<main>

<div class="fieldset">
<?php
$x = 0;
//
//require_once ("db.php");
//$news = mysqli_query($mysqli,"SELECT * FROM news");
//
//while($news_result = mysqli_fetch_assoc($news)) {
//
// if ($_SESSION['user']['login']==$news_result['author']) {
// echo "<a href='delete.php?id=$news_result[idnews]'>Delete</a>";
//
// }
// echo "<fieldset>";
// echo "<h4>$news_result[title]</h4>";
// echo "<br>";
// echo "<h5>$news_result[text]</h5><br>";
// echo "<h8>Author " . "$news_result[author]" . "</h8>";
// echo "</fieldset>";
//
//
//}
//?>
</div>


<fieldset>
<h4>Title</h4>
<br>
<h5>Text</h5><br>
<h8>Author</h8>
<br>
<svg onclick="likes()" class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>
<span id="nums">
<?php echo $x?>
</span>

</fieldset>



<!--<div class="right-menu">-->
<!— <div class="menu-close"></div>-->
<!— <div class="page-menu">-->
<!— <ul>-->
<!— <li>-->
<!— <i class="fas fa-newspaper"></i>-->
<!— </li>-->
<!— <li >-->
<!— <a href="news.php">News</a>-->
<!---->
<!— </li>-->
<!— <li>-->
<!— <i class="fas fa-music"></i>-->
<!— </li>-->
<!— <li>-->
<!— <a href="music.php">Music</a>-->
<!---->
<!— </li>-->
<!— <li>-->
<!— <i class="fas fa-sms"></i>-->
<!— </li>-->
<!— <li>-->
<!— <a href="profile.php">Profile</a>-->
<!---->
<!— </li>-->
<!— </ul>-->
<!— </div>-->
<!--</div>-->
</main>
<script>
function likes() {
<?php
$x = $x + 1;
?>
document.getElementById("nums").innerHTML = <?php echo $x?>
}
</script>
<script src="templates/js/jquery-2.1.4.min.js"></script>
<script src="templates/js/plugins.js"></script>
<script src="templates/js/main.js"></script>


</body>
</html>