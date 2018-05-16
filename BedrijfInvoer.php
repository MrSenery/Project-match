<!DOCTYPE html>
<?php include("HeaderNav.php"); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form action="">
        <div class="col-12" style="background-color: #93C0C0;">
        <div class="col-12" style="text-align: center;">
            <input name="Search" style="width: 30%; margin: 3px;">
            <input type="submit" name="Zoek" value="Zoek"/>
            <button><i class="fa fa-plus-circle fa-sm"></i></button>
        </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4" style="color: white;">
                    <?php
                        $con= mysqli_connect($host, $username, $password, $db_name);
                        $query = "SELECT * FROM bedrijfsinfo";
                
                        $result = $con->query($query);

                        if ($result->num_rows > 0)
                        {
                        // output data of each row
                            while($row = $result->fetch_assoc())
                            {
                                echo '<i class="fa fa-building"></i>' . " " . $row["BedrijfsNaam"]. '<button style="float: right;"><i class="fa fa-trash fa-sm"></i></button>' . '<button style="float: right;"><i class="fa fa-edit fa-sm"></i></button>' . "<br>";
                                echo '<i class="fa fa-envelope"></i>' . " " . $row["BedrijfsEmail"]. "<br>";
                                echo '<i class="fa fa-info-circle"></i>' . " " . $row["BedrijfsInfoText"]. "<br>";
                                echo "<br>__________________<br><br>";
                            }
                        }
                        else
                        {
                        echo "Geen bedrijven gevonden";
                        }
                    ?>
                </div>
            </div>
        </div>
    </form>
  </body>
</html>
<!-- Hoe groot is het bedrijf?
Hoeveel uitdaging wordt de cursist aangeboden?
Hoeveel begeleiding kan er aangeboden worden?
Hoe geschikt is het bedrijf voor profiel 2 cursisten?
Hoeveel klant contact heeft het bedrijf? -->