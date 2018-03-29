<!DOCTYPE HTML>
<?php
    session_start();
    
    //SQL database connectie
    
    //Gebruikersnaam en Wachtwoord uit database
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
    <body>
        <form method="post" action="LogIn.php">
            Username:<br/>
            <input type="text" name="Gebruikersnaam"><br/>
            Wachtwoord:<br/>
            <input type="password" name="Wachtwoord"><br/>
            <input type="submit" value="Inloggen">
        </form>
    </body>
</html>

