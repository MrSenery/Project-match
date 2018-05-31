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
    header("location: index.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function Edit(BedrijfId, BedrijfsNaam, BedrijfsEmail, BedrijfsInfo, BedrijfsAdres, BedrijfsTel, BedrijfsWebsite, BedrijfsContactPer, AantalPersoneel, StageO, StageB, StageE, LeerRichting, Grote, Werkzaamheden, Begeleiding, BedrijfsP2, KlantenOmgang) {
            document.getElementById("bedrijfEditId").setAttribute("value", BedrijfId);
            document.getElementById("bedrijfEditNaam").setAttribute("value", BedrijfsNaam);
            document.getElementById("bedrijfEditEmail").setAttribute("value", BedrijfsEmail);
            document.getElementById("bedrijfEditInfo").setAttribute("value", BedrijfsInfo);
            document.getElementById("bedrijfsEditAdres").setAttribute("value", BedrijfsAdres);
            document.getElementById("bedrijfsEditTel").setAttribute("value", BedrijfsTel);
            document.getElementById("bedrijfsEditWebsite").setAttribute("value", BedrijfsWebsite);
            document.getElementById("bedrijfsEditContactPer").setAttribute("value", BedrijfsContactPer);
            document.getElementById("aantalPersoneelEdit").setAttribute("value", AantalPersoneel);

            if (StageO == "Ja") {
                document.getElementById("OStageEdit").checked = true;
            }
            if (StageB == "Ja") {
                document.getElementById("BStageEdit").checked = true;
            }
            if (StageE == "Ja") {
                document.getElementById("EStageEdit").checked = true;
            }

            LeerrichtingSelect = document.getElementById("bedrijfEditLeerrichting");
            LeerrichtingSelect.value = LeerRichting;

            if (Grote == 0) {
                Grote = document.getElementById("Grote0");
                Grote.checked = true;
            } else if (Grote == 1) {
                Grote = document.getElementById("Grote1");
                Grote.checked = true;
            } else if (Grote == 2) {
                Grote = document.getElementById("Grote2");
                Grote.checked = true;
            }

            if (Werkzaamheden == "0") {
                Werkzaamheden = document.getElementById("Werkzaamheden0");
                Werkzaamheden.checked = true;
            } else if (Werkzaamheden == "1") {
                Werkzaamheden = document.getElementById("Werkzaamheden1");
                Werkzaamheden.checked = true;
            } else if (Werkzaamheden == "2") {
                Werkzaamheden = document.getElementById("Werkzaamheden2");
                Werkzaamheden.checked = true;
            } else if (Werkzaamheden == "3") {
                Werkzaamheden = document.getElementById("Werkzaamheden3");
                Werkzaamheden.checked = true;
            } else if (Werkzaamheden == "4") {
                Werkzaamheden = document.getElementById("Werkzaamheden4");
                Werkzaamheden.checked = true;
            }

            if (Begeleiding == "0") {
                Zelfstandigheid = document.getElementById("Zelfstandigheid0");
                Zelfstandigheid.checked = true;
            } else if (Begeleiding == "1") {
                Zelfstandigheid = document.getElementById("Zelfstandigheid1");
                Zelfstandigheid.checked = true;
            } else if (Begeleiding == "2") {
                Zelfstandigheid = document.getElementById("Zelfstandigheid2");
                Zelfstandigheid.checked = true;
            }

            if (BedrijfsP2 == "0") {
                Profiel2 = document.getElementById("Profiel20");
                Profiel2.checked = true;
            } else if (BedrijfsP2 == "1") {
                Profiel2 = document.getElementById("Profiel21");
                Profiel2.checked = true;
            }

            if (KlantenOmgang == "0") {
                Klanten = document.getElementById("Klanten0");
                Klanten.checked = true;
            } else if (KlantenOmgang == "1") {
                Klanten = document.getElementById("Klanten1");
                Klanten.checked = true;
            } else if (KlantenOmgang == "2") {
                Klanten = document.getElementById("Klanten2");
                Klanten.checked = true;
            } else if (KlantenOmgang == "3") {
                Klanten = document.getElementById("Klanten3");
                Klanten.checked = true;
            } else if (KlantenOmgang == "4") {
                Klanten = document.getElementById("Klanten4");
                Klanten.checked = true;
            }
        }

        function Delete(BedrijfsId, BedrijfsNaam) {
            document.getElementById("deleteId").setAttribute("value", BedrijfsId);
            document.getElementById("deleteName").setAttribute("value", BedrijfsNaam);
            document.getElementById("deleteShowName").innerHTML = BedrijfsNaam;
        }
    </script>
    <body>
      <div class="col-12" style="background-color: #93C0C0;">
        <div class="col-12" style="text-align: center;">
          <form action="BedrijfInvoer.php" method="post">
            <input type="text" name="Search" style="width: 30%; margin: 3px;">
            <input type="submit" name="Zoek" value="Zoek"/>
          </form>
          <button data-toggle='modal' data-target='#bedrijfToevoegen'><i class="fa fa-plus-circle fa-sm"></i></button>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" style="color: white;">
                <?php
                $con = mysqli_connect($host, $username, $password, $db_name);
                if (isset($_POST["SaveModel"])) {
                    $BedrijfNaam = $_POST['bedrijfNaam'];
                    $BedrijfsEmail = $_POST['bedrijfsEmail'];
                    $BedrijfsInfo = $_POST['bedrijfsInfo'];
                    $BedrijfsAdres = $_POST['bedrijfsAdres'];
                    $BedrijfsTel = $_POST['bedrijfsTel'];
                    $BedrijfsWebsite = $_POST['bedrijfsWebsite'];
                    $BedrijfsContactPer = $_POST['bedrijfsContactPer'];
                    $AantalPersoneel = $_POST['aantalPersoneel'];

                    if (isset($_POST['OStage'])) {
                        $OStage = 'Ja';
                    } else {
                        $OStage = 'Nee';
                    }
                    if (isset($_POST['BStage'])) {
                        $BStage = 'Ja';
                    } else {
                        $BStage = 'Nee';
                    }
                    if (isset($_POST['EStage'])) {
                        $EStage = 'Ja';
                    } else {
                        $EStage = 'Nee';
                    }
                    $BedrijfLeerrichting = $_POST['bedrijfLeerrichting'];

                    $Grote = $_POST['BedrijfGrote'];
                    $Werkzaamheden = $_POST['BedrijfWerkzaamheden'];
                    $Zelfstandigheid = $_POST['Bedrijfzelfstandigheid'];
                    $Profiel2 = $_POST['BedrijfProfiel2'];
                    $Klantenomgang = $_POST['BedrijfKlantenomgang'];

                    $sql = "INSERT INTO bedrijven (BedrijfsNaam, BedrijfsGrote, BedrijfsDiversiteit, BedrijfsZelfstandigheid, BedrijfsP2, BedrijfsKlantenOmgang, AantalPersoneel, StageOrienteert, StageBlok, StageEind, LeerRichting) VALUES ('$BedrijfNaam','$Grote','$Werkzaamheden','$Zelfstandigheid','$Profiel2','$Klantenomgang','$AantalPersoneel','$OStage','$BStage','$EStage','$BedrijfLeerrichting')";
                    mysqli_query($con, $sql);

                    $sql = "INSERT INTO bedrijfsinfo(BedrijfsNaam, BedrijfsEmail, BedrijfsInfoText, BedrijfsAdres, BedrijfsTel, Website, ContactPersoon) VALUES ('$BedrijfNaam','$BedrijfsEmail','$BedrijfsInfo', '$BedrijfsAdres', '$BedrijfsTel', '$BedrijfsWebsite', '$BedrijfsContactPer')";
                    mysqli_query($con, $sql);
                }

                if (isset($_POST["DeleteBedrijf"])) {
                    $id = $_POST["deleteBedrijfsId"];

                    $sql = "DELETE FROM bedrijven WHERE bedrijfsId=" . $id;
                    mysqli_query($con, $sql);

                    $sql = "DELETE FROM bedrijfsinfo WHERE BedrijfsId=" . $id;
                    mysqli_query($con, $sql);
                }

                if (isset($_POST["EditModel"])) {
                    $BedrijfId = $_POST['bedrijfEditId'];
                    $BedrijfNaam = $_POST['bedrijfEditNaam'];
                    $BedrijfsEmail = $_POST['bedrijfEditEmail'];
                    $BedrijfsInfo = $_POST['bedrijfEditInfo'];
                    $BedrijfsAdres = $_POST['bedrijfsEditAdres'];
                    $BedrijfsTel = $_POST['bedrijfsEditTel'];
                    $BedrijfsWebsite = $_POST['bedrijfsEditWebsite'];
                    $BedrijfsContactPer = $_POST['bedrijfsEditContactPer'];
                    $AantalPersoneel = $_POST['aantalPersoneelEdit'];

                    if (isset($_POST['OStageEdit'])) {
                        $OStage = 'Ja';
                    } else {
                        $OStage = 'Nee';
                    }
                    if (isset($_POST['BStageEdit'])) {
                        $BStage = 'Ja';
                    } else {
                        $BStage = 'Nee';
                    }
                    if (isset($_POST['EStageEdit'])) {
                        $EStage = 'Ja';
                    } else {
                        $EStage = 'Nee';
                    }
                    $BedrijfLeerrichting = $_POST['bedrijfEditLeerrichting'];

                    $Grote = $_POST['BedrijfEditGrote'];
                    $Werkzaamheden = $_POST['BedrijfEditWerkzaamheden'];
                    $Zelfstandigheid = $_POST['BedrijfEditzelfstandigheid'];
                    $Profiel2 = $_POST['BedrijfEditProfiel2'];
                    $Klantenomgang = $_POST['BedrijfEditKlantenomgang'];

                    $sql = "UPDATE bedrijven SET BedrijfsNaam='$BedrijfNaam',BedrijfsGrote='$Grote',BedrijfsDiversiteit='$Werkzaamheden',BedrijfsZelfstandigheid='$Zelfstandigheid',BedrijfsP2='$Profiel2',BedrijfsKlantenOmgang='$Klantenomgang',AantalPersoneel='$AantalPersoneel',StageOrienteert='$OStage',StageBlok='$BStage',StageEind='$EStage',LeerRichting='$BedrijfLeerrichting' WHERE bedrijfsid='$BedrijfId'";
                    mysqli_query($con, $sql);

                    $sql = "UPDATE `bedrijfsinfo` SET BedrijfsNaam='$BedrijfNaam',BedrijfsEmail='$BedrijfsEmail',BedrijfsInfoText='$BedrijfsInfo',BedrijfsAdres='$BedrijfsAdres',BedrijfsTel='$BedrijfsTel',Website='$BedrijfsWebsite',ContactPersoon='$BedrijfsContactPer' WHERE  bedrijfsid='$BedrijfId'";
                    mysqli_query($con, $sql);
                }

                if(isset($_POST['Zoek']) && !empty($_POST['Search']))
                {
                  $search = $_POST['Search'];
                  $search = htmlspecialchars($search);
                  $search = mysqli_real_escape_string($con, $search);

                  $query = "SELECT * FROM (bedrijven INNER JOIN bedrijfsinfo ON bedrijven.BedrijfsId = bedrijfsinfo.BedrijfsId) WHERE bedrijfsinfo.BedrijfsNaam LIKE '%$search%'";

                  if ($result = mysqli_query($con, $query))
                  {
                    $counter = 0;
                    // output data of each row
                    while ($row = mysqli_fetch_row($result))
                    {
                        echo "<i class='fa fa-building'></i>" . "&nbsp;" . $row["13"]
                        . "<button style='float: right;' data-toggle='modal' data-target='#bedrijfVerwijderen' onclick='Delete(" . $row['12'] . ", \"" . $row['13'] . "\")'>"
                        . "<i class='fa fa-trash fa-sm'></i></button>"
                        . "<button style='float: right;' data-toggle='modal' data-target='#bedrijfEdit' onclick='Edit(" . $row['0'] . ", \"" . $row['13'] . "\", \"" . $row['14'] . "\", \"" . $row['15'] . "\", \"" . $row['16'] . "\", \"" . $row['17'] . "\", \"" . $row['18'] . "\", \"" . $row['19'] . "\", " . $row['7'] . ", \"" . $row['8'] . "\", \"" . $row['9'] . "\", \"" . $row['10'] . "\", \"" . $row['11'] . "\", " . $row['2'] . ", " . $row['3'] . ", " . $row['4'] . ", " . $row['5'] . ", " . $row['6'] . ")'>"
                        . "<i class='fa fa-edit fa-sm'></i></button>" . "<br>";

                        echo "<i class='fa fa-envelope'></i>" . "&nbsp;" . $row["14"] . "<br>";
                        echo "<i class='fa fa-info-circle'></i>" . "&nbsp;" . $row["15"] . "<br>";
                        echo "<br>__________________<br><br>";
                        $counter++;
                      }
                      if($counter == 0) {
                        echo "Geen bedrijven gevonden";
                      }
                  } else {
                      echo "Geen bedrijven gevonden";
                  }
                } else {
                  $query = "SELECT * FROM (bedrijven INNER JOIN bedrijfsinfo ON bedrijven.BedrijfsId = bedrijfsinfo.BedrijfsId)";

                  if ($result = mysqli_query($con, $query))
                  {
                    // output data of each row
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<i class='fa fa-building'></i>" . "&nbsp;" . $row["13"]
                        . "<button style='float: right;' data-toggle='modal' data-target='#bedrijfVerwijderen' onclick='Delete(" . $row['12'] . ", \"" . $row['13'] . "\")'>"
                        . "<i class='fa fa-trash fa-sm'></i></button>"
                        . "<button style='float: right;' data-toggle='modal' data-target='#bedrijfEdit' onclick='Edit(" . $row['0'] . ", \"" . $row['13'] . "\", \"" . $row['14'] . "\", \"" . $row['15'] . "\", \"" . $row['16'] . "\", \"" . $row['17'] . "\", \"" . $row['18'] . "\", \"" . $row['19'] . "\", " . $row['7'] . ", \"" . $row['8'] . "\", \"" . $row['9'] . "\", \"" . $row['10'] . "\", \"" . $row['11'] . "\", " . $row['2'] . ", " . $row['3'] . ", " . $row['4'] . ", " . $row['5'] . ", " . $row['6'] . ")'>"
                        . "<i class='fa fa-edit fa-sm'></i></button>" . "<br>";

                        echo "<i class='fa fa-envelope'></i>" . "&nbsp;" . $row["14"] . "<br>";
                        echo "<i class='fa fa-info-circle'></i>" . "&nbsp;" . $row["15"] . "<br>";
                        echo "<br>__________________<br><br>";
                    }
                  } else {
                      echo "Geen bedrijven gevonden";
                  }
                }
                ?>
            </div>
        </div>
    </div>

    <div id="bedrijfToevoegen" class="modal fade" role="dialog">
        <form action="BedrijfInvoer.php" method="post">
            <div class="modal-dialog modal-lg">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bedrijf toevoegen</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body ">
                        <div class="row">
                            <div class="col-sm-4" style="margin-right: 2%;">Naam van het bedrijf:</div>
                            <div class="col-sm-7">
                                <input required type="values" name="bedrijfNaam" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Email Bedrijf:</div>
                            <div class="col-sm-7">
                                <input required type="email" name="bedrijfsEmail" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Info bedrijf:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsInfo" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Adres:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsAdres" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Telefoon nummer:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsTel" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Website:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsWebsite" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Contact persoon:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsContactPer" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Geschatten aantal personeel:</div>
                            <div class="col-sm-7">
                                <input required type="values" name="aantalPersoneel" id="BoxInput">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Welke stage bied het bedrijf:</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-3" id="CheckboxDiv">
                                        <label>Oriënterende</label><br>
                                        <input type="checkbox" name="OStage" value="OStage">
                                    </div>
                                    <div class="col-sm-3" id="CheckboxDiv">
                                        <label>Blok</label><br>
                                        <input type="checkbox" name="BStage" value="BStage">
                                    </div>
                                    <div class="col-sm-3" id="CheckboxDiv">
                                        <label>Eind</label><br>
                                        <input type="checkbox" name="EStage" value="EStage">
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Leerrichting van het bedrijf:</div>
                            <div class="col-sm-7">
                                <select required name="bedrijfLeerrichting" id="BoxInput">
                                    <option type="text" value="">-</option>
                                    <option type="text" value="Logistics">Logistics</option>
                                    <option type="text" value="ICT">ICT</option>
                                    <option type="text" value="Bouw">Bouw</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-4">Hoe groot is het bedrijf?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Klein</label><br>
                                        <input type="radio" name="BedrijfGrote" value="0">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Middel</label><br>
                                        <input type="radio" name="BedrijfGrote" value="1">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Groot</label><br>
                                        <input type="radio" name="BedrijfGrote" value="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dit is voor hoeveel uitdagingen de student wil hebben in het samewerking-->
                        <div class="row">
                            <div class="col-sm-4">Hoeveel uitdaging wordt de cursist aangeboden?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Zeer&nbsp;weinig</label><br>
                                        <input type="radio" name="BedrijfWerkzaamheden" value="0">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Weinig</label><br>
                                        <input type="radio" name="BedrijfWerkzaamheden" value="1">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Normaal</label><br>
                                        <input type="radio" name="BedrijfWerkzaamheden" value="2">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Divers</label><br>
                                        <input type="radio" name="BedrijfWerkzaamheden" value="3">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Zeer&nbsp;divers</label><br>
                                        <input type="radio" name="BedrijfWerkzaamheden" value="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hoe zelfstandig kan de student werken -->
                        <div class="row">
                            <div class="col-sm-4">Hoeveel begeleiding kan er aangeboden worden?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Veel</label><br>
                                        <input type="radio" name="Bedrijfzelfstandigheid" value="0">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Weinig</label><br>
                                        <input type="radio" name="Bedrijfzelfstandigheid" value="1">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Geen</label><br>
                                        <input type="radio" name="Bedrijfzelfstandigheid" value="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profiel 2 informatie -->
                        <div class="row">
                            <div class="col-sm-4">Hoe geschikt is het bedrijf voor profiel 2 cursisten?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>N.v.t</label><br>
                                        <input type="radio" name="BedrijfProfiel2" value="0">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Geschikt</label><br>
                                        <input type="radio" name="BedrijfProfiel2" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hoe goed de student kan omgaan met klanten-->
                        <div class="row">
                            <div class="col-sm-4">Hoeveel klant contact heeft het bedrijf?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>N.v.t.</label><br>
                                        <input type="radio" name="BedrijfKlantenomgang" value="0">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Weinig</label><br>
                                        <input type="radio" name="BedrijfKlantenomgang" value="1">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Af&nbsp;en&nbsp;toe</label><br>
                                        <input type="radio" name="BedrijfKlantenomgang" value="2">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Regelmatig</label><br>
                                        <input type="radio" name="BedrijfKlantenomgang" value="3">
                                    </div>
                                    <div class="col-sm-2" id="RadioDiv">
                                        <label>Veel</label><br>
                                        <input type="radio" name="BedrijfKlantenomgang" value="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" Name="SaveModel" value="Opslaan">
                        <input type="submit" class="btn btn-secondary" data-dismiss="modal" Name="CloseModel" value="Sluiten">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="bedrijfVerwijderen" class="modal fade" role="dialog">
        <form action="BedrijfInvoer.php" method="post">
            <div class="modal-dialog">
                <!--Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Weet u zeker dat u <i id="deleteShowName">boek</i> wilt verwijderen?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body ">
                        <input type="text" id="deleteId" name="deleteBedrijfsId" readonly value="id" style="width: 25px; padding: 2px; text-align: center; color: gray; border: 1px solid gray; background-color: lightgray;"/>
                        <input type="text" id="deleteName" name="deleteBedrijfName" placeholder=" name"  style="margin-bottom: 5px;"/><br/>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" Name="DeleteBedrijf" value="Verwijder">
                        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Sluiten">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="bedrijfEdit" class="modal fade" role="dialog">
        <form action="BedrijfInvoer.php" method="post">
            <div class="modal-dialog modal-lg">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bedrijf bijwerken</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body ">
                        <div class="row">
                            <div class="col-sm-4" style="margin-right: 2%;">Bedrijf id:</div>
                            <div class="col-sm-7">
                                <input required type="values" readonly name="bedrijfEditId" id="bedrijfEditId" style="width: 25px; padding: 2px; text-align: center; color: gray; border: 1px solid gray; background-color: lightgray; margin-left: -4%;">
                            </div>
                            <div class="col-sm-4" style="margin-right: 2%;">Naam van het bedrijf:</div>
                            <div class="col-sm-7">
                                <input required type="values" name="bedrijfEditNaam" id="bedrijfEditNaam" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Email Bedrijf:</div>
                            <div class="col-sm-7">
                                <input required type="email" name="bedrijfEditEmail" id="bedrijfEditEmail" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Info bedrijf:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfEditInfo" id="bedrijfEditInfo" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Adres:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsEditAdres" id="bedrijfsEditAdres" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Telefoon nummer:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsEditTel" id="bedrijfsEditTel" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Website:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsEditWebsite" id="bedrijfsEditWebsite" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Contact persoon:</div>
                            <div class="col-sm-7">
                                <input required type="text" name="bedrijfsEditContactPer" id="bedrijfsEditContactPer" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Geschatten aantal personeel:</div>
                            <div class="col-sm-7">
                                <input required type="values" name="aantalPersoneelEdit" id="aantalPersoneelEdit" style="width: 70%; margin-left: -4%;">
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Welke stage bied het bedrijf:</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-3" style="margin-right: 2%; margin-left: -4%;">
                                        <label>Oriënterende</label><br>
                                        <input type="checkbox" name="OStageEdit" id="OStageEdit" value="OStage">
                                    </div>
                                    <div class="col-sm-3" style="margin-right: 2%; margin-left: -4%;">
                                        <label>Blok</label><br>
                                        <input type="checkbox" name="BStageEdit" id="BStageEdit" value="BStage">
                                    </div>
                                    <div class="col-sm-3" style="margin-right: 2%; margin-left: -4%;">
                                        <label>Eind</label><br>
                                        <input type="checkbox" name="EStageEdit" id="EStageEdit" value="EStage">
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="col-sm-4" style="margin-right: 2%;">Leerrichting van het bedrijf:</div>
                            <div class="col-sm-7">
                                <select required name="bedrijfEditLeerrichting" id="bedrijfEditLeerrichting" style="width: 70%; margin-left: -4%;">
                                    <option type="text" value="">-</option>
                                    <option type="text" value="Logistics">Logistics</option>
                                    <option type="text" value="ICT">ICT</option>
                                    <option type="text" value="Bouw">Bouw</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-4">Hoe groot is het bedrijf?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" style="margin-right: 2%;">
                                        <label>Klein</label><br>
                                        <input type="radio" name="BedrijfEditGrote" id="Grote0" value="0">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Middel</label><br>
                                        <input type="radio" name="BedrijfEditGrote" id="Grote1" value="1">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Groot</label><br>
                                        <input type="radio" name="BedrijfEditGrote" id="Grote2" value="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dit is voor hoeveel uitdagingen de student wil hebben in het samewerking-->
                        <div class="row">
                            <div class="col-sm-4">Hoeveel uitdaging wordt de cursist aangeboden?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Zeer&nbsp;weinig</label><br>
                                        <input type="radio" name="BedrijfEditWerkzaamheden" id="Werkzaamheden0" value="0">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Weinig</label><br>
                                        <input type="radio" name="BedrijfEditWerkzaamheden" id="Werkzaamheden1" value="1">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Normaal</label><br>
                                        <input type="radio" name="BedrijfEditWerkzaamheden" id="Werkzaamheden2" value="2">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Divers</label><br>
                                        <input type="radio" name="BedrijfEditWerkzaamheden" id="Werkzaamheden3" value="3">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Zeer&nbsp;divers</label><br>
                                        <input type="radio" name="BedrijfEditWerkzaamheden" id="Werkzaamheden4" value="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hoe zelfstandig kan de student werken -->
                        <div class="row">
                            <div class="col-sm-4">Hoeveel begeleiding kan er aangeboden worden?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Veel</label><br>
                                        <input type="radio" name="BedrijfEditzelfstandigheid" id="Zelfstandigheid0" value="0">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Weinig</label><br>
                                        <input type="radio" name="BedrijfEditzelfstandigheid" id="Zelfstandigheid1" value="1">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Geen</label><br>
                                        <input type="radio" name="BedrijfEditzelfstandigheid" id="Zelfstandigheid2" value="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profiel 2 informatie -->
                        <div class="row">
                            <div class="col-sm-4">Hoe geschikt is het bedrijf voor profiel 2 cursisten?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>N.v.t</label><br>
                                        <input type="radio" name="BedrijfEditProfiel2" id="Profiel20" value="0">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Geschikt</label><br>
                                        <input type="radio" name="BedrijfEditProfiel2" id="Profiel21" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hoe goed de student kan omgaan met klanten-->
                        <div class="row">
                            <div class="col-sm-4">Hoeveel klant contact heeft het bedrijf?</div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>N.v.t.</label><br>
                                        <input type="radio" name="BedrijfEditKlantenomgang" id="Klanten0" value="0">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Weinig</label><br>
                                        <input type="radio" name="BedrijfEditKlantenomgang" id="Klanten1" value="1">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Af&nbsp;en&nbsp;toe</label><br>
                                        <input type="radio" name="BedrijfEditKlantenomgang" id="Klanten2" value="2">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Regelmatig</label><br>
                                        <input type="radio" name="BedrijfEditKlantenomgang" id="Klanten3" value="3">
                                    </div>
                                    <div class="col-sm-2" style="margin-right: 2%">
                                        <label>Veel</label><br>
                                        <input type="radio" name="BedrijfEditKlantenomgang" id="Klanten4" value="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" Name="EditModel" value="Opslaan">
                        <input type="submit" class="btn btn-secondary" data-dismiss="modal" Name="CloseModel" value="Sluiten">
                    </div>
                </div>
            </div>
        </form>
      </div>
    </body>
</html>
<!-- Hoe groot is het bedrijf?
Hoeveel uitdaging wordt de cursist aangeboden?
Hoeveel begeleiding kan er aangeboden worden?
Hoe geschikt is het bedrijf voor profiel 2 cursisten?
Hoeveel klant contact heeft het bedrijf? -->
