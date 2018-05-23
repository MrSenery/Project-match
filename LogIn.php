<!DOCTYPE HTML>
<?php
    session_start();
    //ini_set('display_errors', 1);
    //error_reporting(E_ALL|E_STRICT);
    
    //SQL database connectie
    include 'connection.php';
    //Gebruikersnaam en Wachtwoord uit database ophalen
    $gebruikersnaam = "gebruiker";
    $wachtwoord = "wachtwoord";
    
    //Checked of gebruiker is ingelogd
    if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == true){
        //Als true, naar inlog locatie
        header("Location: Profiel.php");
    }
    //Checked gebruiker credentials
    if (isset($_POST['Gebruikersnaam']) && isset($_POST['Wachtwoord'])){
        if($_POST['Gebruikersnaam'] == $gebruikersnaam && $_POST['Wachtwoord'] == $wachtwoord){
            //Als true, naar inlog locatie
            $_SESSION['LoggedIn'] = true;
            header("Location: Profiel.php");
        }
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
            float: left;
            margin: auto;
        }
        .registerlink{
            float: right;
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
                            <a href="#" class="active" id="loginlink">Inloggen</a>
                                 <a href="#" id="registerlink">Registreren</a>
                            </div>
                    </div>
                <form>
                    <label for="username">Gebruikersnaam:</label>
                        <input type="text" id="username" name="username">
                            <label for="password">Wachtwoord :</label>
                                <input type="password" id="password" name="password">
                        <div id="lower">
                            <input type="checkbox"><label for="checkbox">Hou mij ingelogd</label>
                                <input type="submit" value="Login">                         
                                    <a href="#" id="forgotpassword">Wachtwoord vergeten?</a>
                        </div><!--/ lower-->
                </form>
            </div>
</html>

