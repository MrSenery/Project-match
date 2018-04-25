<!DOCTYPE html>
<?php include("HeaderNav.php"); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="CSS.css" rel="stylesheet">
  <body>
    <form action="">
        <div class="col-12" style="float: none; display: block; margin: 0 auto; background-color:#BCD9D9;">
            <!-- Als bedrijfsnaam al bestaat, overschrijf het in de database -->
            <div class="row">
                <!-- Invul voor Bedrijfsnaam en Email -->
                <div class="col-sm-4">
                    <label>Bedrijfsnaam:</label>
                    <input type="text" name="Bedrijfsnaam" style="margin: 2px;">
                </div>
                <div class="col-sm-4">
                    <label>Bedrijfs-Email:</label>
                    <input type="text" name="BedrijfsEmail" style="margin: 2px;">
                </div>
                <div class="col-sm-4">
                    <!-- Buttons voor zoeken/opslaan/verwijderen in/uit de database -->
                    <input type="submit" name="Zoek" value="Zoek" style="background-color: #93C0C0; border-color: #BCD9D9; border-radius: 3pt; margin: 2px;">
                        <?php
                        $con= mysqli_connect($host, $username, $password, $db_name);
                        $query = "SELECT * FROM bedrijven";?>
                    <input type="submit" name="Opslaan" value="Opslaan" style="color: #155724; background-color: #93C0C0; border-color: #BCD9D9; border-radius: 3pt; margin: 2px;">
                        <?php
                        $con= mysqli_connect($host, $username, $password, $db_name);
                        $query = "SELECT * FROM bedrijven";?>
                    <input type="submit" name="Verwijderen" value="Verwijderen" style="color: #721c24; background-color: #93C0C0; border-color: #BCD9D9; border-radius: 3pt; margin: 2px;">
                        <?php
                        $con= mysqli_connect($host, $username, $password, $db_name);
                        $query = "SELECT * FROM bedrijven";?>
                </div>
            </div>
        </div>
        <!-- Dit is voor de grote van het bedrijf-->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoe groot is het bedrijf?</div>
      <div class="col-sm-9" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%;">
                <label>Klein</label><br>
                <input type="radio" name="Grote" value="0">
            </div>
            <div class="col-sm-2" style="margin-right: 2%" value="1">
                <label>Middel</label><br>
                <input type="radio" name="Grote">
            </div>
            <div class="col-sm-2" style="margin-right: 2%" value="2">
                <label>Groot</label><br>
                <input type="radio" name="Grote">
            </div>
          </div>
      </div>
    </div>
    </div>
    <!-- Dit is voor hoeveel uitdagingen de student aangeboden krijgt in de samewerking-->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#BCD9D9;">Hoeveel uitdaging wordt de cursist aangeboden?</div>
      <div class="col-sm-9" style="background-color:#BCD9D9;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Zeer&nbsp;weinig</label><br>
                <input type="radio" name="Werkzaamheden" value="0">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Weinig</label><br>
                <input type="radio" name="Werkzaamheden" value="1">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Normaal</label><br>
                <input type="radio" name="Werkzaamheden" value="2">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Divers</label><br>
                <input type="radio" name="Werkzaamheden" value="3">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Zeer&nbsp;divers</label><br>
                <input type="radio" name="Werkzaamheden" value="4">
            </div>
          </div>
      </div>
    </div>
    </div>
    <!-- Dit is voor de begeleiding -->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoeveel begeleiding kan er aangeboden worden?</div>
      <div class="col-sm-9" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Veel</label><br>
                <input type="radio" name="zelfstandigheid" value="0">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Weinig</label><br>
                <input type="radio" name="zelfstandigheid" value="1">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Geen</label><br>
                <input type="radio" name="zelfstandigheid" value="2">
            </div>
          </div>
      </div>
    </div>
    </div>
    <!-- Dit is voor profiel 2 informatie -->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#BCD9D9;">Hoe geschikt is het bedrijf voor profiel 2 cursisten?</div>
      <div class="col-sm-9" style="background-color:#BCD9D9;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%" value="0">
                <label>N.v.t.</label><br>
                <input type="radio" name="Profiel2">
            </div>
            <div class="col-sm-2" style="margin-right: 2%" value="1">
                <label>Geschikt</label><br>
                <input type="radio" name="Profiel2">
            </div>
          </div>
      </div>
    </div>
    </div>
    <!-- Dit is voor hoeveel klantencontact er is-->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoeveel klant contact heeft het bedrijf?</div>
      <div class="col-sm-9" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>N.v.t.</label><br>
                <input type="radio" name="Klantenomgang" value="0">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Weinig</label><br>
                <input type="radio" name="Klantenomgang" value="1">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Af en toe</label><br>
                <input type="radio" name="Klantenomgang" value="2">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Regelmatig</label><br>
                <input type="radio" name="Klantenomgang" value="3">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Veel</label><br>
                <input type="radio" name="Klantenomgang" value="4">
            </div>
          </div>
      </div>
    </div>
    </div>
    </form>
  </body>
</html>