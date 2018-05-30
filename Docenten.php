<!DOCTYPE html>
<?php include("AdminNav.php"); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function Edit(DocentId, DocentGebruikersnaam, DocentWachtwoord, DocentNaam, DocentAchternaam, LeerRichting, DocentEmail) {
            document.getElementById("docentEditId").setAttribute("value", DocentId);
            document.getElementById("docentEditGebruikersnaam").setAttribute("value", DocentGebruikersnaam);
            document.getElementById("docentEditWachtwoord").setAttribute("value", DocentWachtwoord);
            document.getElementById("docentEditNaam").setAttribute("value", DocentNaam);
            document.getElementById("docentEditAchternaam").setAttribute("value", DocentAchternaam);
            document.getElementById("docentEditLeerrichting").setAttribute("value", LeerRichting);
            document.getElementById("docentEditEmail").setAttribute("value", DocentEmail);

            LeerrichtingSelect = document.getElementById("docentEditLeerrichting");
            LeerrichtingSelect.value = LeerRichting;
        }

        function Delete(DocentId, DocentNaam) {
            document.getElementById("deleteId").setAttribute("value", DocentId);
            document.getElementById("deleteName").setAttribute("value", DocentNaam);
            document.getElementById("deleteShowName").innerHTML = DocentNaam;
        }
    </script>
    <body>
        <div class="col-12" style="background-color: #93C0C0;">
            <div class="col-12" style="text-align: center;">
                <input name="Search" style="width: 30%; margin: 3px;">
                <input type="submit" name="Zoek" value="Zoek"/>
                <button data-toggle='modal' data-target='#docentToevoegen'><i class="fa fa-plus-circle fa-sm"></i></button>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4" id="TColour">
                    <?php
                    $con = mysqli_connect($host, $username, $password, $db_name);
                    if (isset($_POST["SaveModel"])) {
                        $DocentGebruikersnaam = $_POST['docentGebruikersaam'];
                        $DocentWachtwoord = $_POST['docentWachtwoord'];
                        $DocentNaam = $_POST['docentNaam'];
                        $DocentAchternaam = $_POST['docentAchternaam'];
                        $LeerRichting = $_POST['docentLeerrichting'];
                        $DocentEmail = $_POST['docentEmail'];
                        $DocentenWachtwoordHash = password_hash($DocentWachtwoord, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO docenten(DocentGebruikersnaam, DocentWachtwoord, DocentNaam, DocentAchternaam, LeerRichting, DocentEmail) VALUES ('$DocentGebruikersnaam','$DocentenWachtwoordHash','$DocentNaam','$DocentAchternaam','$LeerRichting','$DocentEmail')";
                        mysqli_query($con, $sql);
                    }

                    if (isset($_POST["DeleteDocent"])) {
                        $id = $_POST["deleteDocentId"];

                        $sql = "DELETE FROM docenten WHERE docentId=" . $id;
                        mysqli_query($con, $sql);
                    }

                    if (isset($_POST["EditModel"])) {
                        $DocentId = $_POST['docentEditId'];
                        $DocentGebruikersnaam = $_POST['docentEditGebruikersaam'];
                        $DocentWachtwoord = $_POST['docentEditWachtwoord'];
                        $DocentNaam = $_POST['docentEditNaam'];
                        $DocentAchternaam = $_POST['docentEditAchternaam'];
                        $LeerRichting = $_POST['docentEditLeerrichting'];
                        $DocentEmail = $_POST['docentEditEmail'];
                        $DocentenWachtwoordHash = password_hash($DocentWachtwoord, PASSWORD_DEFAULT);

                        $sql = "UPDATE `docenten` SET DocentGebruikersNaam='$DocentGebruikersnaam',DocentWachtwoord='$DocentenWachtwoordHash',DocentNaam='$DocentNaam',DocentAchternaam='$DocentAchternaam',LeerRichting='$LeerRichting',DocentEmail='$DocentEmail' WHERE  DocentId='$DocentId'";
                        mysqli_query($con, $sql);
                    }

                    $query = "SELECT * FROM docenten";

                    if ($result = mysqli_query($con, $query)) {
                        // output data of each row
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<i class='fa fa-user' style='text-shadow: none;'></i>" . " " . $row["3"] . " " . $row["4"]
                            . "<button style='float: right;' data-toggle='modal' data-target='#docentVerwijderen' onclick='Delete(" . $row['0'] . ", \"" . $row['3'] . " " . $row['4'] . "\")'>"
                            . "<i class='fa fa-trash fa-sm'></i></button>"
                            . "<button style='float: right;' data-toggle='modal' data-target='#docentEdit' onclick='Edit(" . $row['0'] . ", \"" . $row['1'] . "\", \"" . $row['2'] . "\", \"" . $row['3'] . "\", \"" . $row['4'] . "\", \"" . $row['5'] . "\", \"" . $row['6'] . "\")'>"
                            . "<i class='fa fa-edit fa-sm'></i></button>" . "<br>";

                            echo "<i class='fa fa-envelope' style='text-shadow: none;'></i>" . " " . $row["6"] . "<br>";
                            echo "<i class='fa fa-briefcase' style='text-shadow: none;'></i>" . " " . $row["5"] . "<br>";
                            echo "<br><a style='text-shadow: none;'>__________________</a><br><br>";
                        }
                    } else {
                        echo "Geen docenten gevonden";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div id="docentToevoegen" class="modal fade" role="dialog">
            <form action="Docenten.php" method="post">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Docent toevoegen</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body ">
                            <div class="row">
                                <div class="col-sm-4" style="margin-right: 2%;">Gebruikersnaam:</div>
                                <div class="col-sm-7">
                                    <input required type="values" name="docentGebruikersaam" id="BoxInput">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Wachtwoord:</div>
                                <div class="col-sm-7">
                                    <input required type="password" name="docentWachtwoord" id="BoxInput">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Naam van docent:</div>
                                <div class="col-sm-7">
                                    <input required type="values" name="docentNaam" id="BoxInput">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Achternaam:</div>
                                <div class="col-sm-7">
                                    <input required type="values" name="docentAchternaam" id="BoxInput">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Email docent:</div>
                                <div class="col-sm-7">
                                    <input required type="email" name="docentEmail" id="BoxInput">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Leerrichting van de docent:</div>
                                <div class="col-sm-7">
                                    <select required name="docentLeerrichting" id="BoxInput">
                                        <option type="text" value="">-</option>
                                        <option type="text" value="Logistics">Logistics</option>
                                        <option type="text" value="ICT">ICT</option>
                                        <option type="text" value="Bouw">Bouw</option>
                                    </select>
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

        <div id="docentVerwijderen" class="modal fade" role="dialog">
            <form action="Docenten.php" method="post">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Weet u zeker dat u <i id="deleteShowName">boek</i> wilt verwijderen?</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body ">
                            <input type="text" id="deleteId" name="deleteDocentId" readonly value="id" style="width: 25px; padding: 2px; text-align: center; color: gray; border: 1px solid gray; background-color: lightgray;"/>
                            <input type="text" id="deleteName" name="deleteDocentName" placeholder=" name"  style="margin-bottom: 5px;"/><br/>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" Name="DeleteDocent" value="Verwijder">
                            <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Sluiten">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id="docentEdit" class="modal fade" role="dialog">
            <form action="Docenten.php" method="post">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Docent bijwerken</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body ">
                            <div class="row">
                                <div class="col-sm-4" style="margin-right: 2%;">Docent id:</div>
                                <div class="col-sm-7">
                                    <input required type="values" readonly name="docentEditId" id="docentEditId" style="width: 25px; padding: 2px; text-align: center; color: gray; border: 1px solid gray; background-color: lightgray;">
                                </div>
                                <div class="col-sm-4" style="margin-right: 2%;">Gebruikersnaam:</div>
                                <div class="col-sm-7">
                                    <input required type="values" name="docentEditGebruikersaam" id="docentEditGebruikersnaam" style="width: 70%;">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Wachtwoord:</div>
                                <div class="col-sm-7">
                                    <input required type="password" name="docentEditWachtwoord" id="docentEditWachtwoord" style="width: 70%;">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Naam van docent:</div>
                                <div class="col-sm-7">
                                    <input required type="values" name="docentEditNaam" id="docentEditNaam" style="width: 70%;">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Achternaam:</div>
                                <div class="col-sm-7">
                                    <input required type="values" name="docentEditAchternaam" id="docentEditAchternaam" style="width: 70%;">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Email docent:</div>
                                <div class="col-sm-7">
                                    <input required type="email" name="docentEditEmail" id="docentEditEmail" style="width: 70%;">
                                </div>
                                <br />
                                <div class="col-sm-4" style="margin-right: 2%;">Leerrichting van de docent:</div>
                                <div class="col-sm-7">
                                    <select required name="docentEditLeerrichting" id="docentEditLeerrichting" style="width: 70%;">
                                        <option type="text" value="">-</option>
                                        <option type="text" value="Logistics">Logistics</option>
                                        <option type="text" value="ICT">ICT</option>
                                        <option type="text" value="Bouw">Bouw</option>
                                    </select>
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
    </div>
</body>
</html>
<!-- 
DocentGebruikersnaam, DocentWachtwoord, DocentNaam, DocentAchternaam, LeerRichting
-->
