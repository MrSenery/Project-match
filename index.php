<!DOCTYPE html>
<?php include("HeaderNav.php"); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <!-- Dit is voor het grote van het bedrijf-->
    <form action="index.php" method="post">
      <div class="col-12" style="float: none; display: block; margin: 0 auto;">
      <div class="row">
        <div class="col-sm-3" style="background-color:#93C0C0;">Hoe groot wil de cursist het bedrijf hebben?</div>
        <div class="col-sm-7" style="background-color:#93C0C0;">
            <div class="row">
              <div class="col-sm-2" style="margin-right: 2%;">
                  <label>Klein</label><br>
                  <input type="radio" name="Grote" value="0">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Middel</label><br>
                  <input type="radio" name="Grote" value="1">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Groot</label><br>
                  <input type="radio" name="Grote" value="2">
              </div>
            </div>
        </div>
        <div class="col-sm-2" style="background-color:#93C0C0;"><br>
            <select required name="groteIsBelangrijkOptie" style="width: 90%">
            <option type="text" value="">-</option>
            <option type="text" value="1">Belangrijk</option>
            <option type="text" value="2">Niet belangrijk</option>
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
        <div class="col-sm-2" style="background-color:#BCD9D9;"><br>
          <select required name="WerkIsBelangrijkOptie" style="width: 90%">
            <option type="text" value="">-</option>
            <option type="text" value="1">Belangrijk</option>
            <option type="text" value="2">Niet belangrijk</option>
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
                  <input type="radio" name="zelfstandigheid" value="0">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Middel</label><br>
                  <input type="radio" name="zelfstandigheid" value="1">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Goed</label><br>
                  <input type="radio" name="zelfstandigheid" value="2">
              </div>
            </div>
        </div>
        <div class="col-sm-2" style="background-color:#93C0C0;"><br>
          <select required name="zelfIsBelangrijkOptie" style="width: 90%">
            <option type="text" value="">-</option>
            <option type="text" value="1">Belangrijk</option>
            <option type="text" value="2">Niet belangrijk</option>
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
                  <input type="radio" name="Profiel2" value="0">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Geschikt</label><br>
                  <input type="radio" name="Profiel2" value="1">
              </div>
            </div>
        </div>
        <div class="col-sm-2" style="background-color:#BCD9D9;"><br>
          <select required name="P2IsBelangrijkOptie" style="width: 90%">
            <option type="text" value="">-</option>
            <option type="text" value="1">Belangrijk</option>
            <option type="text" value="2">Niet belangrijk</option>
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
                  <label>N.v.t.</label><br>
                  <input type="radio" name="Klantenomgang" value="0">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Slecht</label><br>
                  <input type="radio" name="Klantenomgang" value="1">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Matig</label><br>
                  <input type="radio" name="Klantenomgang" value="2">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Normaal</label><br>
                  <input type="radio" name="Klantenomgang" value="3">
              </div>
              <div class="col-sm-2" style="margin-right: 2%">
                  <label>Goed</label><br>
                  <input type="radio" name="Klantenomgang" value="3">
              </div>
            </div>
        </div>
        <div class="col-sm-2" style="background-color:#93C0C0;"><br>
          <select required name="klantIsBelangrijkOptie" style="width: 90%">
            <option type="text" value="">-</option>
            <option type="text" value="1">Belangrijk</option>
            <option type="text" value="2">Niet belangrijk</option>
          </select>
        </div>
      </div>
      </div>
      <input type="submit" id="Match-go" name="match-go" value="Match-go"/>
    </form>
    <!-- Top # van bedrijven-->
  <div style="color: white;">
    <?php
      $con= mysqli_connect($host, $username, $password, $db_name);
      $query = "SELECT * FROM bedrijven";

      if ($queryResult = mysqli_query($con, $query))
      {
        $resultArray = array();
        // Fetch one and one row
        while ($row = mysqli_fetch_row($queryResult))
        {
          $result = 0;
          //Bedrijf grote
          if(isset($_POST['Grote']) && isset($_POST['groteIsBelangrijkOptie']))
          {
            $stapVerschil = 0;
            $groteResultaat = 0;
            if($_POST['Grote'] > $row['2'])
            {
              $stapVerschil = $_POST['Grote'] - $row['2'];

              $groteResultaat = 20 - (((20 / 2)/ $_POST['groteIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $groteResultaat;
            }
            else if($_POST['Grote'] < $row['2'])
            {
              $stapVerschil =  $row['2'] - $_POST['Grote'];

              $groteResultaat = 20 - (((20 / 2)/ $_POST['groteIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $groteResultaat;
            }
            else if($_POST['Grote'] == $row['2'])
            {
              $result = $result + 20;
            }
          }
          //diversiteit in het werk
          if(isset($_POST['Werkzaamheden']) && isset($_POST['WerkIsBelangrijkOptie']))
          {
            $stapVerschil = 0;
            $werkResultaat = 0;
            if($_POST['Werkzaamheden'] > $row['3'])
            {
              $stapVerschil = $_POST['Werkzaamheden'] - $row['3'];

              $werkResultaat = 20 - (((20 / 4)/ $_POST['WerkIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $werkResultaat;
            }
            else if($_POST['Werkzaamheden'] < $row['3'])
            {
              $stapVerschil =  $row['3'] - $_POST['Werkzaamheden'];

              $werkResultaat = 20 - (((20 / 4)/ $_POST['WerkIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $werkResultaat;
            }
            else if($_POST['Werkzaamheden'] == $row['3'])
            {
              $result = $result + 20;
            }
          }
          //Zelfstandigheid
          if(isset($_POST['zelfstandigheid']) && isset($_POST['zelfIsBelangrijkOptie']))
          {
            $stapVerschil = 0;
            $werkResultaat = 0;
            if($_POST['zelfstandigheid'] > $row['4'])
            {
              $stapVerschil = $_POST['zelfstandigheid'] - $row['4'];

              $zelfResultaat = 20 - (((20 / 2)/ $_POST['zelfIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $zelfResultaat;
            }
            else if($_POST['zelfstandigheid'] < $row['4'])
            {
              $stapVerschil =  $row['4'] - $_POST['zelfstandigheid'];

              $zelfResultaat = 20 - (((20 / 2)/ $_POST['zelfIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $zelfResultaat;
            }
            else if($_POST['zelfstandigheid'] == $row['4'])
            {
              $result = $result + 20;
            }
          }
          //P2
          if(isset($_POST['Profiel2']) && isset($_POST['P2IsBelangrijkOptie']))
          {
            $stapVerschil = 0;
            $werkResultaat = 0;
            if($_POST['Profiel2'] > $row['5'])
            {
              $stapVerschil = $_POST['Profiel2'] - $row['5'];

              $zelfResultaat = 20 - (((20 / 1)/ $_POST['P2IsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $zelfResultaat;
            }
            else if($_POST['Profiel2'] < $row['5'])
            {
              $stapVerschil =  $row['5'] - $_POST['Profiel2'];

              $zelfResultaat = 20 - (((20 / 1)/ $_POST['P2IsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $zelfResultaat;
            }
            else if($_POST['Profiel2'] == $row['5'])
            {
              $result = $result + 20;
            }
          }
          //Klanten contact
          if(isset($_POST['Klantenomgang']) && isset($_POST['klantIsBelangrijkOptie']))
          {
            $stapVerschil = 0;
            $werkResultaat = 0;
            if($_POST['Klantenomgang'] > $row['6'])
            {
              $stapVerschil = $_POST['Klantenomgang'] - $row['6'];

              $zelfResultaat = 20 - (((20 / 4)/ $_POST['klantIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $zelfResultaat;
            }
            else if($_POST['Klantenomgang'] < $row['6'])
            {
              $stapVerschil =  $row['6'] - $_POST['Klantenomgang'];

              $zelfResultaat = 20 - (((20 / 4)/ $_POST['klantIsBelangrijkOptie']) * $stapVerschil);
              $result = $result + $zelfResultaat;
            }
            else if($_POST['Klantenomgang'] == $row['6'])
            {
              $result = $result + 20;
            }
          }
          $resultArray[$row[1]] = $result;
        }
        arsort($resultArray);
        foreach ($resultArray as $key => $val)
        {
          echo "Resultaat voor bedrijf " . $key . ": " . $val . "<br />";
        }
        // Free result set
        mysqli_free_result($queryResult);
      }
    ?>
  </div>
  </body>
</html>
