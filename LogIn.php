<?php
session_start();
session_destroy();
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db_name = "matchmakers";

$con = mysqli_connect($host, $username, $password, $db_name);
$query = "SELECT * FROM docenten";
//login, via passwordhash check
if (isset($_POST["login"]))
{
    $DocentGebruikersnaam = mysqli_real_escape_string($con, $_POST['username']);
    $DocentWachtwoord = mysqli_real_escape_string($con, $_POST['password']);
    if ($queryResult = mysqli_query($con, $query))
    {
        while ($row = mysqli_fetch_row($queryResult))
        {
            if ($DocentGebruikersnaam === $row['1'])
            {
                if (password_verify($DocentWachtwoord, $row['2']))
                {
                    echo 'ingelogd';
                    $_SESSION['Loggedin'] = true;
                    $_SESSION['DocentNaam'] = $DocentGebruikersnaam;
                    $_SESSION['Admin'] = $row['7'];
                    header("location: index.php");
                }
                else
                {
                    echo 'Verkeerd wachtwoord';
                }
            }
            else
            {
                echo 'Verkeerde naam';
            }
        }
    }
}

if (isset($_POST["Back"]))
{
    header("location: index.php");
}
?>

<html>
    <style>
        html, body {
            font-family: "Helvetica Neue", Helvetica, sans-serif;
            color: #444;
            background-color: #262E2E;
        }
        #containerLogIn {
            position: fixed;
            width: 340px;
            height: 319px;
            top: 50%;
            left: 50%;
            margin-top: -140px;
            margin-left: -170px;
            background: #FFF;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        label {
            color: #555;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 14px;
        }
        form {
            margin: 0 auto;
            margin-top: 20px;
        }
        input[type=text],
        input[type=password] {
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 290px;
            height: 35px;
            border: 1px solid #c7d0d2;
        }
        #lower {
            background: #FFF;
            width: 100%;
            height: 80px;
            margin-top: 20px;
            border-top: 1px solid #ccc;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        input[type=checkbox] {
            margin-left: 20px;
            margin-top: 30px;
            cursor: pointer;
        }
        .check {
            margin-left: 3px;
            font-size: 11px;
        }
        .row {
            text-align:center;
            padding: 5% 0 0;
            margin: auto;
            font-size: 20px;
            text-decoration-line: none;
            text-decoration: none;
            font-weight: bold;
        }
        a:link {
            color: black;
            text-decoration: none;
        }
        a:visited {
            color: black;
            text-decoration: none;
        }
        a:hover {
            cursor: pointer;           
        }
        .loginlink {
            float: none;
            margin: auto;
        }
        input[type=submit] {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            width: 80px;
            height: 30px;
            font-size: 14px;
            cursor: pointer;
        }
        input[type=submitSignUp] {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            width: 80px;
            height: 30px;
            font-size: 14px;
            cursor: pointer;
        }
        #forgotpassword {
            font-size: 10px;
            margin-left: 55px;
        }
    </style>
    <head>
        <!-- Match makers stylesheet -->
        <link href="CSS.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    </head>
    <div id="containerLogIn">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-6">
                    <a class="active" id="loginlink">Inloggen</a>
                </div>
            </div>
            <form action="LogIn.php" method="POST">
                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username">
                <label for="password">Wachtwoord :</label>
                <input type="password" id="password" name="password">
                <div id="lower">
                    <input id="BackButton" type="submit" name="Back" value="Terug" style="float: left; margin-left: 20px;">
                    <input id="LoginButton" type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</html>

