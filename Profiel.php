<?php include("HeaderNav.php"); ?>
<?php
    session_start();
    //Log in check als false redirect naar index.php
    if (!isset($_SESSION['LoggedIn']) || $_SESSION['LoggedIn'] == false){
        header ("Location: index.php");
    }
?>

<h2>TEST</h2>
   