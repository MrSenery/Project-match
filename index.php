<!DOCTYPE html>
<?php 
session_start();
if (isset($_SESSION['Loggedin']) && $_SESSION['Loggedin'] == true)
{
    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] == "admin")
    {
        include("AdminNav.php");
    }
    else
    {
        include("DocentNav.php");
    }
}
else
{
    include("HeaderNav.php");
}
?>
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
                    <div class="col-sm-10" id="LightCol">Welke leerrichting volgt de cursist?</div>
                    <div class="col-sm-2" id="LightCol"><br>
                        <select name="leerRichtingOptie" id="DropDown" style="margin-bottom: 6px;">
                            <option type="text" value="">-</option>
                            <option type="text" value="Bouw">Bouw</option>
                            <option type="text" value="ICT">ICT</option>
                            <option type="text" value="Logistics">Logistics</option>
<!--                            <option type="text" value="Kapster">Kapster</option>
                            <option type="text" value="Lab">Lab</option>
                            <option type="text" value="Techniek">Techniek</option>-->
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12" style="float: none; display: block; margin: 0 auto;">
                <div class="row">
                    <div class="col-sm-3" id="DarkCol">Hoe groot wil de cursist het bedrijf hebben?</div>
                    <div class="col-sm-7" id="DarkCol">
                        <div class="row">
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Klein
                                <br><input type="radio" name="Grote" value="0">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Middel
                                <br><input type="radio" name="Grote" value="1">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Groot
                                <br><input type="radio" name="Grote" value="2">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" id="DarkCol"><br>
                        <select required name="groteIsBelangrijkOptie" id="DropDown">
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
                    <div class="col-sm-3" id="LightCol">Hoeveel uitdaging wil de cursist in zijn werkzaamheden?</div>
                    <div class="col-sm-7" id="LightCol">
                        <div class="row">
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Zeer&nbsp;weinig
                                <br><input type="radio" name="Werkzaamheden" value="0">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Weinig
                                <br><input type="radio" name="Werkzaamheden" value="1">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Normaal
                                <br><input type="radio" name="Werkzaamheden" value="2">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Divers
                                <br><input type="radio" name="Werkzaamheden" value="3">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Zeer&nbsp;divers
                                <br><input type="radio" name="Werkzaamheden" value="4">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" id="LightCol"><br>
                        <select required name="WerkIsBelangrijkOptie" id="DropDown">
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
                    <div class="col-sm-3" id="DarkCol">Hoe zelfstandig kan de cursist werken?</div>
                    <div class="col-sm-7" id="DarkCol">
                        <div class="row">
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Slecht
                                <br><input type="radio" name="zelfstandigheid" value="0">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Middel
                                <br><input type="radio" name="zelfstandigheid" value="1">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Goed
                                <br><input type="radio" name="zelfstandigheid" value="2">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" id="DarkCol"><br>
                        <select required name="zelfIsBelangrijkOptie" id="DropDown">
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
                    <div class="col-sm-3" id="LightCol">Hoe geschikt moet het bedrijf zijn voor profiel 2 cursisten?</div>
                    <div class="col-sm-7" id="LightCol">
                        <div class="row">
                            <div class="col-sm-2" id="RadioDiv">
                                <label>N.v.t
                                <br><input type="radio" name="Profiel2" value="0">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Geschikt
                                <br><input type="radio" name="Profiel2" value="1">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" id="LightCol"><br>
                        <select required name="P2IsBelangrijkOptie" id="DropDown">
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
                    <div class="col-sm-3" id="DarkCol">Hoe goed kan de cursist met klanten omgaan?</div>
                    <div class="col-sm-7" id="DarkCol">
                        <div class="row">
                            <div class="col-sm-2" id="RadioDiv">
                                <label>N.v.t.
                                <br><input type="radio" name="Klantenomgang" value="0">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Slecht
                                <br><input type="radio" name="Klantenomgang" value="1">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Matig
                                <br><input type="radio" name="Klantenomgang" value="2">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Normaal
                                <br><input type="radio" name="Klantenomgang" value="3">
                                </label>
                            </div>
                            <div class="col-sm-2" id="RadioDiv">
                                <label>Goed
                                <br><input type="radio" name="Klantenomgang" value="3">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" id="DarkCol"><br>
                        <select required name="klantIsBelangrijkOptie" id="DropDown">
                            <option type="text" value="">-</option>
                            <option type="text" value="1">Belangrijk</option>
                            <option type="text" value="2">Niet belangrijk</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12" id="Match-goDiv">
            <input type="submit" id="Match-go" name="match-go" value="Match-go"/>
            </div>
        </form>
        <!-- Top # van bedrijven-->
<!--        nog aanpassing voor het orderen op leerrichting-->
        <div>
            <?php
            if(isset($_POST['match-go']))
            {
              $con = mysqli_connect($host, $username, $password, $db_name);
              $Leerrichting = $_POST['leerRichtingOptie'];

              if($Leerrichting != "")
              {
                $query = "SELECT * FROM bedrijven WHERE LeerRichting='$Leerrichting'";
              } else {
                $query = "SELECT * FROM bedrijven";
              }

              if ($queryResult = mysqli_query($con, $query)) {
                  $resultArray = array();
                  // Fetch one and one row
                  while ($row = mysqli_fetch_row($queryResult)) {
                      $result = 0;
                      //Bedrijf grote
                      if (isset($_POST['Grote']) && isset($_POST['groteIsBelangrijkOptie'])) {
                          $stapVerschil = 0;
                          $groteResultaat = 0;
                          if ($_POST['Grote'] > $row['2']) {
                              $stapVerschil = $_POST['Grote'] - $row['2'];

                              $groteResultaat = 20 - (((20 / 2) / $_POST['groteIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $groteResultaat;
                          } else if ($_POST['Grote'] < $row['2']) {
                              $stapVerschil = $row['2'] - $_POST['Grote'];

                              $groteResultaat = 20 - (((20 / 2) / $_POST['groteIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $groteResultaat;
                          } else if ($_POST['Grote'] == $row['2']) {
                              $result = $result + 20;
                          }
                      }
                      //diversiteit in het werk
                      if (isset($_POST['Werkzaamheden']) && isset($_POST['WerkIsBelangrijkOptie'])) {
                          $stapVerschil = 0;
                          $werkResultaat = 0;
                          if ($_POST['Werkzaamheden'] > $row['3']) {
                              $stapVerschil = $_POST['Werkzaamheden'] - $row['3'];

                              $werkResultaat = 20 - (((20 / 4) / $_POST['WerkIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $werkResultaat;
                          } else if ($_POST['Werkzaamheden'] < $row['3']) {
                              $stapVerschil = $row['3'] - $_POST['Werkzaamheden'];

                              $werkResultaat = 20 - (((20 / 4) / $_POST['WerkIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $werkResultaat;
                          } else if ($_POST['Werkzaamheden'] == $row['3']) {
                              $result = $result + 20;
                          }
                      }
                      //Zelfstandigheid
                      if (isset($_POST['zelfstandigheid']) && isset($_POST['zelfIsBelangrijkOptie'])) {
                          $stapVerschil = 0;
                          $werkResultaat = 0;
                          if ($_POST['zelfstandigheid'] > $row['4']) {
                              $stapVerschil = $_POST['zelfstandigheid'] - $row['4'];

                              $zelfResultaat = 20 - (((20 / 2) / $_POST['zelfIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $zelfResultaat;
                          } else if ($_POST['zelfstandigheid'] < $row['4']) {
                              $stapVerschil = $row['4'] - $_POST['zelfstandigheid'];

                              $zelfResultaat = 20 - (((20 / 2) / $_POST['zelfIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $zelfResultaat;
                          } else if ($_POST['zelfstandigheid'] == $row['4']) {
                              $result = $result + 20;
                          }
                      }
                      //P2
                      if (isset($_POST['Profiel2']) && isset($_POST['P2IsBelangrijkOptie'])) {
                          $stapVerschil = 0;
                          $werkResultaat = 0;
                          if ($_POST['Profiel2'] > $row['5']) {
                              $stapVerschil = $_POST['Profiel2'] - $row['5'];

                              $zelfResultaat = 20 - (((20 / 1) / $_POST['P2IsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $zelfResultaat;
                          } else if ($_POST['Profiel2'] < $row['5']) {
                              $stapVerschil = $row['5'] - $_POST['Profiel2'];

                              $zelfResultaat = 20 - (((20 / 1) / $_POST['P2IsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $zelfResultaat;
                          } else if ($_POST['Profiel2'] == $row['5']) {
                              $result = $result + 20;
                          }
                      }
                      //Klanten contact
                      if (isset($_POST['Klantenomgang']) && isset($_POST['klantIsBelangrijkOptie'])) {
                          $stapVerschil = 0;
                          $werkResultaat = 0;
                          if ($_POST['Klantenomgang'] > $row['6']) {
                              $stapVerschil = $_POST['Klantenomgang'] - $row['6'];

                              $zelfResultaat = 20 - (((20 / 4) / $_POST['klantIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $zelfResultaat;
                          } else if ($_POST['Klantenomgang'] < $row['6']) {
                              $stapVerschil = $row['6'] - $_POST['Klantenomgang'];

                              $zelfResultaat = 20 - (((20 / 4) / $_POST['klantIsBelangrijkOptie']) * $stapVerschil);
                              $result = $result + $zelfResultaat;
                          } else if ($_POST['Klantenomgang'] == $row['6']) {
                              $result = $result + 20;
                          }
                      }
                      $resultArray[$row[1]] = $result;
                  }
                  // Uitkomsten van bedrijven, met gekleurde %
                  arsort($resultArray);
                  foreach ($resultArray as $key => $val)
                  {
                      if ($val >= 0 && $val <= 25)
                      {
                        echo '<div class="col-12" style="background-color: #BCD9D9;">
                              <div class="row" style="border-top-style: solid;">
                                <div class="col-11">
                                    <form method="POST" action="Bedrijf.php">
                                        <input id="Bedrijf" type="submit" href="bedrijf.php" name="bedrijf" value="' . $key . '">
                                    </form>';
                        echo   '</div>
                                <div class="col-1">
                                    <h3 style="color: #D92A13">' . $val . '%</h3>
                                </div>
                              </div>
                              </div>';
                      } else if ($val >= 26 && $val <= 50) {
                        echo '<div class="col-12" style="background-color: #BCD9D9;">
                              <div class="row" style="border-top-style: solid;">
                                <div class="col-11">
                                    <form method="POST" action="Bedrijf.php">
                                        <input id="Bedrijf" type="submit" href="bedrijf.php" name="bedrijf" value="' . $key . '">
                                    </form>';
                        echo   '</div>
                                <div class="col-1">
                                    <h3 style="color: #D99713">' . $val . '%</h3>
                                </div>
                              </div>
                              </div>';
                      } else if ($val >= 51 && $val <= 75) {
                        echo '<div class="col-12" style="background-color: #BCD9D9;">
                              <div class="row" style="border-top-style: solid;">
                                <div class="col-11">
                                    <form method="POST" action="Bedrijf.php">
                                        <input id="Bedrijf" type="submit" href="bedrijf.php" name="bedrijf" value="' . $key . '">
                                    </form>';
                        echo   '</div>
                                <div class="col-1">
                                    <h3 style="color: #D9CE13">' . $val . '%</h3>
                                </div>
                              </div>
                              </div>';
                      } else if ($val >= 76 && $val <= 100) {
                        echo '<div class="col-12" style="background-color: #BCD9D9;">
                              <div class="row" style="border-top-style: solid;">
                                <div class="col-11">
                                    <form method="POST" action="Bedrijf.php">
                                        <input id="Bedrijf" type="submit" href="bedrijf.php" name="bedrijf" value="' . $key . '">
                                    </form>';
                        echo   '</div>
                                <div class="col-1">
                                    <h3 style="color: #10AD10">' . $val . '%</h3>
                                </div>
                              </div>
                              </div>';
                      } else {
                        echo '<div class="col-12" style="background-color: #BCD9D9;">
                              <div class="row" style="border-top-style: solid;">
                                <div class="col-11">
                                    <form method="POST" action="Bedrijf.php">
                                        <input id="Bedrijf" type="submit" href="bedrijf.php" name="bedrijf" value="' . $key . '">
                                    </form>';
                        echo   '</div>
                                <div class="col-1">
                                    <h3>' . $val . '%</h3>
                                </div>
                              </div>
                              </div>';
                      }
                  }
                  // Free result set
                  mysqli_free_result($queryResult);
              }
            }
            ?>
        </div>
    </body>
</html>
