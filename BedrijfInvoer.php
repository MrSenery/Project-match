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
                <div class="col-sm-4">
                    <label>Bedrijfsnaam:</label>
                    <input type="text" name="Bedrijfsnaam" style="margin: 2px;">
                </div>
                <div class="col-sm-4">
                    <label>Bedrijfs-Email:</label>
                    <input type="text" name="BedrijfsEmail" style="margin: 2px;">
                </div>
                <div class="col-sm-4">
                    <button type="button" style="background-color: #93C0C0; border-color: #BCD9D9; border-radius: 3pt; margin: 2px;">Zoek</button>
                    <button type="button" style="background-color: #93C0C0; border-color: #BCD9D9; border-radius: 3pt; margin: 2px;">Opslaan</button>
                    <button type="button" style="background-color: #93C0C0; border-color: #BCD9D9; border-radius: 3pt; margin: 2px;">Verwijderen</button>
                </div>
            </div>
        </div>
        <!-- Dit is voor het grote van het bedrijf-->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoe groot is het bedrijf?</div>
      <div class="col-sm-9" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%;">
                <label>Klein</label><br>
                <input type="radio" name="Grote">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Middel</label><br>
                <input type="radio" name="Grote">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
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
                <input type="radio" name="Werkzaamheden">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Weinig</label><br>
                <input type="radio" name="Werkzaamheden">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Normaal</label><br>
                <input type="radio" name="Werkzaamheden">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Divers</label><br>
                <input type="radio" name="Werkzaamheden">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Zeer&nbsp;divers</label><br>
                <input type="radio" name="Werkzaamheden">
            </div>
          </div>
      </div>
    </div>
    </div>
    <!-- begeleiding -->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoeveel begeleiding kan er aangeboden worden?</div>
      <div class="col-sm-9" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Veel</label><br>
                <input type="radio" name="zelfstandigheid">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Weinig</label><br>
                <input type="radio" name="zelfstandigheid">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Geen</label><br>
                <input type="radio" name="zelfstandigheid">
            </div>
          </div>
      </div>
    </div>
    </div>
    <!-- Profiel 2 informatie -->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#BCD9D9;">Hoe geschikt is het bedrijf voor profiel 2 cursisten?</div>
      <div class="col-sm-9" style="background-color:#BCD9D9;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>N.V.T.</label><br>
                <input type="radio" name="Profiel2">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Geschikt</label><br>
                <input type="radio" name="Profiel2">
            </div>
          </div>
      </div>
    </div>
    </div>
    <!-- Hoeveel klantencontact er is-->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoeveel klant contact heeft het bedrijf?</div>
      <div class="col-sm-9" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>N.V.T.</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Weinig</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Af en toe</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Regelmatig</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Veel</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
          </div>
      </div>
    </div>
    </div>
    </form>
  </body>
</html>