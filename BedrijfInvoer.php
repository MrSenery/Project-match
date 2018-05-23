<!DOCTYPE html>
<?php include("HeaderNav.php"); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    //function BoekEdit(prijs, naam, sku, id) {
    //  document.getElementById("EditBoekPrijs").setAttribute("value", prijs);
    //  document.getElementById("EditBoekNaam").setAttribute("value", naam);
    //  document.getElementById("EditBoekSku").setAttribute("value", sku);
    //  document.getElementById("EditBoekId").setAttribute("value", id);
    //}

    function Delete(BedrijfsId, BedrijfsNaam) {
      document.getElementById("deleteId").setAttribute("value", BedrijfsId);
      document.getElementById("deleteName").setAttribute("value", BedrijfsNaam);
      document.getElementById("deleteShowName").innerHTML = BedrijfsNaam;
    }
    </script>
  <body>
    <div class="col-12" style="background-color: #93C0C0;">
      <div class="col-12" style="text-align: center;">
          <input name="Search" style="width: 30%; margin: 3px;">
          <input type="submit" name="Zoek" value="Zoek"/>
          <button data-toggle='modal' data-target='#bedrijfToevoegen'><i class="fa fa-plus-circle fa-sm"></i></button>
      </div>
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4" style="color: white;">
          <?php
            $con= mysqli_connect($host, $username, $password, $db_name);
            $query = "SELECT * FROM bedrijfsinfo";

            if ($result = mysqli_query($con, $query))
            {
                // output data of each row
                while ($row = mysqli_fetch_row($result))
                {
                    echo "<i class='fa fa-building'></i>" . " " . $row["1"]. "<button style='float: right;' data-toggle='modal' data-target='#BedrijfVerwijderen' onclick='Delete(" . $row['0'] . ", \"" . $row['1'] . "\")'><i class='fa fa-trash fa-sm'></i></button>" . "<button style='float: right;'><i class='fa fa-edit fa-sm'></i></button>" . "<br>";
                    echo "<i class='fa fa-envelope'></i>" . $row["2"] . "<br>";
                    echo "<i class='fa fa-info-circle'></i>"  . $row["3"] . "<br>";
                    echo "<br>__________________<br><br>";
                }
            } else {
              echo "Geen bedrijven gevonden";
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
                <div class="col-sm-4" style="margin-right: 2%;">Naam van het bedrijf:&nbsp;</div>
                <div class="col-sm-7">
                  <input required type="values" name="bedrijfNaam">
                </div>
                <br />
                <div class="col-sm-4" style="margin-right: 2%;">Email Bedrijf:&nbsp;</div>
                <div class="col-sm-7">
                  <input required type="email" name="bedrijfsEmail">
                </div>
                <br />
                <div class="col-sm-4" style="margin-right: 2%;">Info bedrijf:&nbsp;</div>
                <div class="col-sm-7">
                  <input required type="text" name="bedrijfsInfo">
                </div>
                <br />
                <div class="col-sm-4" style="margin-right: 2%;">Geschatten aantal personeel:&nbsp;</div>
                <div class="col-sm-7">
                  <input required type="values" name="aantalPersoneel">
                </div>
                <br />
                <div class="col-sm-4" style="margin-right: 2%;">Welke stage bied het bedrijf&nbsp;</div>
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-sm-3" style="margin-right: 2%;">
                        <label>Oriënterende stage</label><br>
                        <input type="checkbox" name="OStage" value="OStage">
                    </div>
                    <div class="col-sm-3" style="margin-right: 2%">
                        <label>Blok stage</label><br>
                        <input type="checkbox" name="BStage" value="BStage">
                    </div>
                    <div class="col-sm-3" style="margin-right: 2%">
                        <label>Eind stage</label><br>
                        <input type="checkbox" name="EStage" value="EStage">
                    </div>
                  </div>
                </div>
                <br />
                <div class="col-sm-4" style="margin-right: 2%;">Leerrichting van het bedrijf:&nbsp;</div>
                <div class="col-sm-7">
                  <select required name="bedrijfLeerrichting" style="width: 90%">
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
                        <input type="radio" name="BedrijfGrote" value="0">
                    </div>
                    <div class="col-sm-2" style="margin-right: 2%">
                        <label>Middel</label><br>
                        <input type="radio" name="BedrijfGrote" value="1">
                    </div>
                    <div class="col-sm-2" style="margin-right: 2%">
                        <label>Groot</label><br>
                        <input type="radio" name="BedrijfGrote" value="2">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Dit is voor hoeveel uitdagingen de student wil hebben in het samewerking-->
              <div class="col-12" style="float: none; display: block; margin: 0 auto;">
                <div class="row">
                  <div class="col-sm-4">Hoeveel uitdaging wordt de cursist aangeboden?</div>
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Zeer&nbsp;weinig</label><br>
                          <input type="radio" name="BedrijfWerkzaamheden" value="0">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Weinig</label><br>
                          <input type="radio" name="BedrijfWerkzaamheden" value="1">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Normaal</label><br>
                          <input type="radio" name="BedrijfWerkzaamheden" value="2">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Divers</label><br>
                          <input type="radio" name="BedrijfWerkzaamheden" value="3">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Zeer&nbsp;divers</label><br>
                          <input type="radio" name="BedrijfWerkzaamheden" value="4">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Hoe zelfstandig kan de student werken -->
              <div class="col-12" style="float: none; display: block; margin: 0 auto;">
                <div class="row">
                  <div class="col-sm-4">Hoeveel begeleiding kan er aangeboden worden?</div>
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Veel</label><br>
                          <input type="radio" name="Bedrijfzelfstandigheid" value="0">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Weinig</label><br>
                          <input type="radio" name="Bedrijfzelfstandigheid" value="1">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Geen</label><br>
                          <input type="radio" name="Bedrijfzelfstandigheid" value="2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Profiel 2 informatie -->
              <div class="col-12" style="float: none; display: block; margin: 0 auto;">
                <div class="row">
                  <div class="col-sm-4">Hoe geschikt is het bedrijf voor profiel 2 cursisten?</div>
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>N.v.t</label><br>
                          <input type="radio" name="BedrijfProfiel2" value="0">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Geschikt</label><br>
                          <input type="radio" name="BedrijfProfiel2" value="1">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Hoe goed de student kan omgaan met klanten-->
              <div class="col-12" style="float: none; display: block; margin: 0 auto;">
                <div class="row">
                  <div class="col-sm-4">Hoeveel klant contact heeft het bedrijf?</div>
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>N.v.t.</label><br>
                          <input type="radio" name="BedrijfKlantenomgang" value="0">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Weinig</label><br>
                          <input type="radio" name="BedrijfKlantenomgang" value="1">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Af en toe</label><br>
                          <input type="radio" name="BedrijfKlantenomgang" value="2">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Regelmatig</label><br>
                          <input type="radio" name="BedrijfKlantenomgang" value="3">
                      </div>
                      <div class="col-sm-2" style="margin-right: 2%">
                          <label>Veel</label><br>
                          <input type="radio" name="BedrijfKlantenomgang" value="3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" Name="SaveModel" value="Opslaan">
              <input type="submit" class="btn btn-secondary" data-dismiss="modal" Name"CloseModel" value="Sluiten">
            </div>
          </div>
        </div>
      </form>
    </div>

    <div id="BedrijfVerwijderen" class="modal fade" role="dialog">
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
    <?php
      $con= mysqli_connect($host, $username, $password, $db_name);
      if (isset($_POST["SaveModel"]))
      {
        $BedrijfNaam = $_POST['bedrijfNaam'];
        $BedrijfsEmail = $_POST['bedrijfsEmail'];
        $BedrijfsInfo = $_POST['bedrijfsInfo'];
        $AantalPersoneel = $_POST['aantalPersoneel'];

        if(isset($_POST['OStage']))
        {
          $OStage = 'Ja';
        } else {
          $OStage = 'Nee';
        }
        if(isset($_POST['BStage']))
        {
          $BStage = 'Ja';
        } else {
          $BStage = 'Nee';
        }
        if(isset($_POST['EStage']))
        {
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

        $sql = "INSERT INTO bedrijfsinfo(BedrijfsNaam, BedrijfsEmail, BedrijfsInfoText) VALUES ('$BedrijfNaam','$BedrijfsEmail','$BedrijfsInfo')";
        mysqli_query($con, $sql);
      }

      if (isset($_POST["DeleteBedrijf"])) {
        $id = $_POST["deleteBedrijfsId"];

        $sql = "DELETE FROM bedrijven WHERE bedrijfsId=" . $id;
        mysqli_query($con, $sql);

        $sql = "DELETE FROM bedrijfsinfo WHERE BedrijfsId=" . $id;
        mysqli_query($con, $sql);
      }
     ?>
    </div>
  </body>
</html>
<!-- Hoe groot is het bedrijf?
Hoeveel uitdaging wordt de cursist aangeboden?
Hoeveel begeleiding kan er aangeboden worden?
Hoe geschikt is het bedrijf voor profiel 2 cursisten?
Hoeveel klant contact heeft het bedrijf? -->
