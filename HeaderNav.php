<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="CSS.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "matchmakers";
?>
<div class="Header" name="Header">
    <form action="Login.php" method="post">
    <input type="submit" id="Logout" href="LogIn.php" value="Naar Login">
    </form>
    <br>
    <div class="col-sm-12">
        <h1><a href="index.php" id="ProjectName">Match Maker</a></h1>
    </div>
</div>
<div class="Navigation">
    <nav class="navbar navbar-expand-sm navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Leerling-Match</a>
            </li>
        </ul>
    </nav>
</div>
