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
    <!-- Dit is voor het grote van het bedrijf-->
    <form action="">
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoe groot wil de cursist het bedrijf hebben?</div>
      <div class="col-sm-7" style="background-color:#93C0C0;">
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
      <div class="col-sm-2" style="background-color:#93C0C0;"><br>
          <select required name="isBelangrijk" style="width: 90%">
          <option type="text" value="">-</option>
          <option type="text" value="Belangrijk">Belangrijk</option>
          <option type="text" value="Niet belangrijk">Niet belangrijk</option>
        </select>
      </div>
    </div>
    </div>
    <!-- Dit is voor hoeveel uitdagingen de student wil hebben in het samewerking-->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#BCD9D9;">Hoeveel uitdaging wil de cursist in zijn werkzaamheden?</div>
      <div class="col-sm-7" style="background-color:#BCD9D9;">
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
      <div class="col-sm-2" style="background-color:#BCD9D9;"><br>
        <select required name="isBelangrijk" style="width: 90%">
          <option type="text" value="">-</option>
          <option type="text" value="Belangrijk">Belangrijk</option>
          <option type="text" value="Niet belangrijk">Niet belangrijk</option>
        </select>
      </div>
    </div>
    </div>

    <!-- Hoe zelfstandig kan de student werken -->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoe zelfstandig kan de cursist werken?</div>
      <div class="col-sm-7" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Slecht</label><br>
                <input type="radio" name="zelfstandigheid">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Middel</label><br>
                <input type="radio" name="zelfstandigheid">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Goed</label><br>
                <input type="radio" name="zelfstandigheid">
            </div>
          </div>
      </div>
      <div class="col-sm-2" style="background-color:#93C0C0;"><br>
        <select required name="isBelangrijk" style="width: 90%">
          <option type="text" value="">-</option>
          <option type="text" value="Belangrijk">Belangrijk</option>
          <option type="text" value="Niet belangrijk">Niet belangrijk</option>
        </select>
      </div>
    </div>
    </div>

    <!-- Profiel 2 informatie -->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#BCD9D9;">Hoe geschikt moet het bedrijf zijn voor profiel 2 cursisten?</div>
      <div class="col-sm-7" style="background-color:#BCD9D9;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>N.v.t</label><br>
                <input type="radio" name="Profiel2">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Matig</label><br>
                <input type="radio" name="Profiel2">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Geschikt</label><br>
                <input type="radio" name="Profiel2">
            </div>
          </div>
      </div>
      <div class="col-sm-2" style="background-color:#BCD9D9;"><br>
        <select required name="isBelangrijk" style="width: 90%">
          <option type="text" value="">-</option>
          <option type="text" value="Belangrijk">Belangrijk</option>
          <option type="text" value="Niet belangrijk">Niet belangrijk</option>
        </select>
      </div>
    </div>
    </div>

    <!-- Hoe goed de student kan omgaan met klanten-->
    <div class="col-12" style="float: none; display: block; margin: 0 auto;">
    <div class="row">
      <div class="col-sm-3" style="background-color:#93C0C0;">Hoe goed kan de cursist met klanten omgaan?</div>
      <div class="col-sm-7" style="background-color:#93C0C0;">
          <div class="row">
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Slecht</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Matig</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Normaal</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Goed</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
            <div class="col-sm-2" style="margin-right: 2%">
                <label>Zeer&nbsp;goed</label><br>
                <input type="radio" name="Klantenomgang">
            </div>
          </div>
      </div>
      <div class="col-sm-2" style="background-color:#93C0C0;"><br>
        <select required name="isBelangrijk" style="width: 90%">
          <option type="text" value="">-</option>
          <option type="text" value="Belangrijk">Belangrijk</option>
          <option type="text" value="Niet belangrijk">Niet belangrijk</option>
        </select>
      </div>
    </div>
    </div>
    </form>
  </body>
</html>
